@extends('layouts.app')
@section('content')
<form>
  <div class="form-row">
    <div class="col-8">
        <input class="form-control search" type="text" id="search" placeholder="Search">
    </div>
    <div class="col-1">
       <label for="filter">Filter By:</label>
   </div>
   <div class="col-3">
           <select class="form-control filter " id="filter" name="filter">
             <option>None</option>
             <option>Book Title</option>
             <option>Author</option>
             <option>Genre</option>
             <option>Library Section</option>
           </select>

    </div>
  </div>
</form>
<table class="table table-sm table-hover table-striped ">
  <thead style="background-color: #057091;color:white;">
    <tr>
      <th scope="col">Book ID</th>
      <th scope="col">Book Title</th>
      <th scope="col">Author</th>
      <th scope="col">Genre</th>
      <th scope="col">Library Section</th>
       <!-- <th scope="col">Borrowed</th> -->
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  		@foreach($catalogues as $catalogue) 
  	  <tr>
  	    <td scope="row">{{$catalogue->id}}</td>
  	    <td>{{$catalogue->title}}</td>
  	    <td>{{$catalogue->author}}</td>
  	    <td>{{$catalogue->genre}}</td>
  	    <td>{{$catalogue->library_section}}</td>
  	    <td><a href="catalogues/{{$catalogue->id}}/edit"><button type="button" class="btn btn-outline-primary" "><i class="far fa-edit"></i> Edit</button></a><button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteBook" data-idfield="{{$catalogue->id}}"><i class="far fa-trash-alt"></i> Delete</button></td>
  	  </tr>
  	  @endforeach

  </tbody>
</table>
<a href="/"><button type="submit" class="btn btn-info" name="submit" >Back to Home</button></a>



@include('modal.deleteData')

@endsection