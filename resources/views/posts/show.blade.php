@extends('layouts.fontend')
@section('content')

<div class="card mb-5">
  
  <div class="card-body">
    <h5 class="card-title">{{ $post->title }}</h5>
    <p class="card-text">{{ $post->description }}</p>
  </div>
  <div class="card-footer text-muted">
  {{ date('Y-m-d',strtotime($post->created_at)) }}
  </div>
</div>

@endsection
