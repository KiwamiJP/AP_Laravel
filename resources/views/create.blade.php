@extends('layout')
@section('content')
<div class="container">
    <br>
<div>

        </div><br>
    <div class="card">
        <div class="card-header">
            New Post
        </div>
       
        <div class="card-body">
           
        <form action="/posts" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter Name" require>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Enter Desc" require></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="posts" class="btn btn-success">Back</a>

        </form>
        </div>
    </div>
</div>
@endsection
