<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts= Post::all();
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       $categories= Category::all();
       return view('post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'title'=>'required|min:3|max:255',
            'description'=>'required|min:3|max:255',
            'category_id'=>'required|exists:categories,id',
            'cover'=>"mimes:jpg,jpeg,png|max:5048"

         ]);

         $post = new Post();
         $post->title=$request->title;
         $post->description=$request->description;
         if($request->hasfile('cover')){
            $post->cover = $request->file('cover')->store('images/posts');
         }
         $post->catgory_id= $request->catgory_id;
         $post->save();

       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
