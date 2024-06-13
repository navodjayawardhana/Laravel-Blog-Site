@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif <!-- Close the if statement -->

                    <form method="post" action="{{ route('posts.store') }}">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name='title' class="form-control" placeholder="Enter Title" required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" name="description" placeholder="Enter Description" rows="10" required></textarea>
                        </div>
                    
                        <button type="submit" name='add' class="btn btn-success mt-2">Add</button>
                    </form>
                </div>
            </div>
        </div>
   

@endsection
