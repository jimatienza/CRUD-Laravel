@extends('layouts.app')

@section('content')

<table class="table table-sm table-hover table-striped ">
  <thead style="background-color: #057091;color:white;">
    <tr>
      <th scope="col">Book ID</th>
      <th scope="col">Book Title</th>
      <th scope="col">Author</th>
      <th scope="col">Genre</th>
      <th scope="col">Library Section</th>
      <th scope="col">Borrowed</th>
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
      <td> <div class="form-check  text-center">
      @if($catalogue->is_borrowed=="true")
        <input type="checkbox" class="form-check-input checkbox" id="exampleCheck1" value="{{$catalogue->id}}" checked>
        <label class="form-check-label" for="exampleCheck1"></label>
      @else
        <input type="checkbox" class="form-check-input checkbox" id="exampleCheck1" value="{{$catalogue->id}}">
        <label class="form-check-label" for="exampleCheck1"></label>
      @endif

  </div></td>
      <td><a href="catalogues/{{$catalogue->id}}/edit"><button type="button" class="btn btn-outline-primary" "><i class="far fa-edit"></i> Edit</button></a><button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteBook" data-idfield="{{$catalogue->id}}"><i class="far fa-trash-alt"></i> Delete</button></td>
    </tr>
    @endforeach

  </tbody>
</table>
<div style="">
  <a href="/search"><button type="button" class="btn btn-info" style="margin-bottom: 0.25em;color:white;padding-right: 0.25em"><i class="fas fa-search"></i> Search Book</button></a> 
<button type="button" class="btn btn-info" style="margin-bottom: 0.25em;" data-toggle="modal" data-target="#addBook"><i class="fas fa-plus"></i> Add Book </button>
</div>

@include('modal.deleteData')



@stop