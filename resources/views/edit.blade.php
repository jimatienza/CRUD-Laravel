@extends('layouts.app')
@section('content')
       <form method="post" action="/catalogues/{{$row->id}}">
        <input type="hidden" name="_method" value="PUT">
        <h3>Edit Book Id No. {{$row->id}} </h3>
         <div class="form-group">
           <label for="title">Book Title:</label>
           <input type="text" class="form-control" value="{{$row->title}}" name="title" placeholder="Book Title" required>
            {{csrf_field()}}
         </div>
         <div class="form-group">
           <label for="author">Author:</label>
           <input type="text" class="form-control" value="{{$row->author}}" name="author" placeholder="Author" required>
         </div>
         <div class="form-group">
           <label for="genre">Genre:</label>
           <input type="text" class="form-control" value="{{$row->genre}}" name="genre" placeholder="Genre" required>
         </div>
          <div class="form-group">
           <label for="library_section">Library Section</label>
           <select class="form-control" id="library_section" name="library_section" data-selected="{{$row->library_section}}">
             <option value="Circulation">Circulation</option>
             <option value="Periodical Section">Periodical Section</option>
             <option value="General Reference">General Reference</option>
             <option value="Children's Section">Children's Section</option>
             <option value="Fiction">Fiction</option>
           </select>
         </div>
     
          
        <button type="submit" class="btn btn-info" name="submit" >Save</button>
        <a href="{{ url()->previous() }}"> <button type="button" class="btn btn-secondary">Cancel</button></a> 
      </div>
       </form>
 

@endsection

