@extends('layout')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Welcome to Laravel Blog</h2>
        </div>
        <div class="card-body">
            @foreach($data as $post)
           <div>
                <h5 class="card-title">
                    {{$post->name}}
                </h5>
                <p class="card-text">
                {{$post->description}}
                </p>
                <a href="#" class="btn btn-primary">Show Details</a>
           </div><hr>
            @endforeach
        </div>
    </div>
</div>

@endsection
