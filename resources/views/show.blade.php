@extends('layout')
@section('content')
<div class="container">
    <br>
<div>
        <a href="posts/create" class="btn btn-success">New Post</a>

        </div><br>
    <div class="card">
        <div class="card-header">
            <h2>Blogs</h2>
        </div>
       
        <div class="card-body">
          
           <div>
                <h5 class="card-title">
                    {{$post->name}}
                </h5>
                <p class="card-text">
                {{$post->description}}
                </p>
                <a href="/posts" class="btn btn-primary">Back</a>
           </div><hr>
           
        </div>
    </div>
</div>

@endsection
