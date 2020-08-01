<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Http\Requests\SubmitPostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index(){
        $posts = BlogPost::orderBy('created_at', 'desc')->paginate(10);

        return view('posts.index', ['posts' => $posts]);
    }

    public function editPost($id = null){
        if (!empty($id)) {
            $post = BlogPost::find($id);
        } else {
            $post = null;
        }

        return view('posts.edit', ['post' => $post]);

    }

    public function submitPost(SubmitPostRequest $request){
        dd('here');
        if (!empty($request->id)) {
            $post = BlogPost::find($request->id);
        } else {
            $post = new BlogPost;
        }
        $post->body = $request->body;
        $post->title = $request->title;

        dd($post);

        $post->save();

        return redirect(route('post-management.index'));
    }



}
