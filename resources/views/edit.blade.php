@extends('layout')
@section('content')
<div class="container">
    <br>
<div>

        </div><br>
    <div class="card">
        <div class="card-header">
            Edit Post
        </div>
       
        <div class="card-body">
           
        <form action="/posts/{{$post->id}}" method="POST">
            @csrf
            @method('PUT')
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            
            @endif
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input value="{{$post->name}}" type="text" class="form-control" name="name" placeholder="Enter Name" >
               
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" require>{{old('description',$post->description)}}</textarea>
             
            </div>
            <div class="mb-3">
                <select name="category_id" id="" class="form-control">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}"   {{$category->id == $post->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                    @endforeach

                </select>
            </div>
          
            
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/posts" class="btn btn-success">Back</a>

        </form>
        </div>
    </div>
</div>
@endsection
