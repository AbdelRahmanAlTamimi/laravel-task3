@extends("layout.app")
@section("title") show @endsection
@section("content") 
<div class="card mt-4">
  <h5 class="card-header">movie info</h5>
  <div class="card-body">
    <h5 class="card-title">Name: {{$movie->movie_name}}</h5>
    <p class="card-text">Description: {{$movie->movie_description}}</p>
    <p class="card-text">gener: {{$movie->movie_gener}}</p>
  </div>
</div>



@endsection

    

