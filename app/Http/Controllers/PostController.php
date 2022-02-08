<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('post.index',compact('posts'));
        // return view('post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return 'test';
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'cover'=>'required|mimes:jpg,png'
        ]);

        $path = $request->cover->storeAs('public/cover', time().'-'.$request->cover->getClientOriginalName());
        $storagePath = str_replace("public","/storage",$path);

        $post = new Post();
        $post->title=$request->title;
        $post->content=$request->content;
        $post->cover=$storagePath;
        $post->save();

        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findorfail($id);
        return view('post.show',compact('post'));
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findorfail($id);
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findorfail($id);
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'cover'=>'mimes:jpg,png'
        ]);

        $post->title=$request->title;
        $post->content=$request->content;
        if ($request->hasFile('cover')) {
            $path = $request->cover->storeAs('public/cover', time().'-'.$request->cover->getClientOriginalName());
            $storagePath = str_replace("public","/storage",$path);
            $post->cover=$storagePath;
        }
        $post->update();

        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findorfail($id);
        $post->delete();
        return redirect('/post');
    }
}
