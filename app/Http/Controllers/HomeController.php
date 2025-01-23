<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StorePostRequest;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Post::where('user_id',auth()->id())->get();
        return view('welcome',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
       //$post = new Post();
       //$post->name = $request->name;
       //$post->description = $request->description;
       //$post->save();
       $validated = $request->validated();
      // Post::create([
       //     'name'=>$request->name,
         //   'description'=>$request->description,
        //    'category_id'=>$request->category
       //]);
       Post::create($validated);
       return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //if($post->user_id != auth()->id()){
          //  abort(403);
        //}
        Gate::authorize('view',$post);
        return view('show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePostRequest $request, Post $post)
    {
        $validated = $request->validated();
        $post->update($validated);
       
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
       $post->delete();
        return redirect('/posts');
    }
}
