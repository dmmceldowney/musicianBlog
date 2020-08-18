<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Tag;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    //
    public function homeView(){
        return view('index');
    }

    public function indexView(){
        $posts = BlogPost::orderBy('created_at', 'desc')->paginate(4);

        return view('blog.blogIndex', ['posts' => $posts]);
    }

    public function tagsView(){
        $tags = Tag::orderBy('updated_at')->get();

        return view('blog.tags', ['tags' => $tags]);
    }

    public function postsByTag($tagId){
        $posts = BlogPost::join('blog_post_tags', 'blog_post_tags.blog_post_id', '=', 'blog_posts.id')
                ->where('tag_id', '=', $tagId)->get();

        return view('blog.postsByTag', ['posts' => $posts]);
    }

    public function postView($id){
        $post = BlogPost::find($id);

        return view('blog.blogPost', ['post' => $post]);

    }



}
