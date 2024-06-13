@extends('layouts.app')
@section('content')

<div class="container">
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
            <button type="button" class="btn btn-danger mt-auto" >Delete</button>
            <button type="button" class="btn btn-success">View</button>
            <button type="button" class="btn btn-warning">Update</button>
        </div>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>

</div>

@endsection