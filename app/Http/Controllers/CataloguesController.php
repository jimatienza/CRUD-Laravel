<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Catalogue;

class CataloguesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogues = Catalogue::all();

        return view('catalogues',compact('catalogues'));
        //return dd(Catalogue::all());
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Catalogue::create($request->all());
       $catalogues = Catalogue::all();
      return redirect()->to('/');

   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Catalogue::findOrFail($id);
        return view('edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Catalogue::findOrFail($id);
        $data->update($request->all());    

        return redirect()->to('/');      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Catalogue::findOrFail($id);
        $row->delete();
        return redirect()->to('/');


    }

    public function searchView()
    {
        $catalogues = Catalogue::where('is_borrowed','!=','true')->get();

        return view('search',compact('catalogues'));
        //return dd(Catalogue::all());
    }

    public function searchData(Request $request){
        // $sample = $request->search;
        // return $sample;
        if($request->ajax()){
            
            $output="";
            if($request->filter != "None"){
            $catalogues=Catalogue::where($request->filter,'LIKE','%'.$request->search.'%')
                                ->where('is_borrowed','!=','true')->get();
            }else{
               $catalogues=Catalogue::where('is_borrowed','!=','true')
                                    ->where(function ($query) use ($request)
                                    {
                                        $query->orWhere('title','LIKE','%'.$request->search.'%')
                                        ->orWhere('author','LIKE','%'.$request->search.'%')
                                        ->orWhere('genre','LIKE','%'.$request->search.'%')
                                        ->orWhere('library_section','LIKE','%'.$request->search.'%');
                                })->get();
            }

            if($catalogues){
                foreach ($catalogues as $key => $catalogue) {
                    $output.='<tr>'.
                             '<td>'.$catalogue->id.'</td>'.
                             '<td>'.$catalogue->title.'</td>'.
                             '<td>'.$catalogue->author.'</td>'.
                             '<td>'.$catalogue->genre.'</td>'.
                             '<td>'.$catalogue->library_section.'</td>'.
                             //'<td>'.$catalog->is_borrowed.'</td>'.
                             '</tr>';

                }
                return Response($output);
            }
        }
    }

    public function updateBorrow(Request $request)
    {
        if($request->ajax()){
            $row = Catalogue::findOrFail($request->id);
            $row->update(['is_borrowed' => $request->value]);   

            return Response($row);
        }
     


    }


}
