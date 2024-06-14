@extends('layouts.app')
@section('content')

<div class="container">
@if (session('status'))
  <div class="alert alert-success" role="alert">
      {{ session('status') }}
  </div>
@endif 
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  @foreach ($posts as $post)
    <tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->title }}</td>
      <td>{{ $post->description }}</td>
      <td>
      <div class="d-flex justify-content-center align-items-center m-auto">
            <a class="btn btn-danger mt-auto" href="{{route('posts.delete',$post->id)}}">Delete</a>
            <a class="btn btn-warning" href="{{route('posts.edit',$post->id)}}">Update</a>
        </div>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

</div>

@endsection