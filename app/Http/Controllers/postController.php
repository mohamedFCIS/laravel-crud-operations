<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();

        return view("posts.showPosts", ["data" => $post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("posts.insert");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title"=>"required |unique:posts| min:5 | max:255" ,
           "body"=> "required",
            "slug"=>"required ",
            "version"=>"required"
        ]);

        $post=new Post;
        $title = request("title");
        $body = request("body");
        $version = request("version");
        $slug = request("slug");


        // dump($title,$body,$version);
        //     $post =new  Post();
        //     $post->title = $title;
        //     $post->body = $body;
        //     $post->version = $version;
        //     $post->slug = $slug;
        // $post->save();



        Post::create([
            "title" => $title,
            "body" => $body,
            "version" => $version,
            "slug" => $slug
        ]);
        return redirect($post->path());


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view("posts.show", ["post" => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return    view("posts.update", ["post" => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            "title"=>"required |unique:posts| min:5 | max:255" ,
           "body"=> "required",
            "slug"=>"required ",
            "version"=>"required"
        ]);

        $title = $request["title"];
        $body = $request["body"];
        $version = $request["version"];
        $slug = $request["slug"];
        // $posts = Post::find(1);
        // // dd($post);
        // $posts->title=$title;
        // $posts->body=$body;
        // $posts->version=$version;
        // $posts->slug=$slug;
        // $posts->save();
        $post->update([
            "title" => $title,
            "body" => $body,
            "version" => $version,
            "slug" => $slug,
        ]);

        return redirect("posts");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return back();
    }
}
