@extends('layouts.app')
@section("title") @endsection

@section("content")

<div class="container mt-5">
    <div class="text-center">
      
        <a href="{{route("movies.create")}}" class="btn btn-success">Add Movie</a>
    </div>
<table class="table mt-5">
  <thead>
    <tr>
      
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">gener</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($movies as $movie)
         <tr>
      
      <td>{{$movie['movie_name']}}</td>
      <td>{{$movie['movie_description']}}</td>
      <td>{{$movie['movie_gener']}}</td>
      <td>
      <a href="{{route('movies.show', $movie['id'])}}"  class="btn btn-info">Info</a>
      <a href="{{route('movies.edit',$movie['id'])}}"  class="btn btn-primary">Edit</a>
      <form id="delete-form" class="d-inline" method="POST" action="{{route('movies.destroy',$movie['id'])}}">
        @csrf
        @method("delete")
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
      </td>
    </tr>
    @endforeach
   
   
    
  </tbody>
</table>
<script>
document.getElementById('delete-form').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent the form from submitting immediately

    if (confirm('Are you sure you want to delete this item?')) {
        this.submit(); // If confirmed, submit the form
    }
});
</script>

@endsection