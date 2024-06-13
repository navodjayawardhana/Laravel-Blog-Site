@extends('layouts.fontend')

@section('content')

<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <div class="">
            
            <div class="row">
            @foreach ($posts as $post)
                <div class="col-lg-6">
                
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="small text-muted">{{ date('Y-m-d',strtotime($post->created_at)) }}</div>
                            <h2 class="text-center">{{ $post->title }}</h2>
                            <p class="card-text text-center">{{ $post->description }}</p>
                            <a class="btn btn-primary" href="{{ route('posts.show',$post->id) }}">Read more →</a>
                        </div>
                    </div>  
                                 
                </div>
                @endforeach 
            </div>                 
        </div>
    </div>
</div>




@endsection