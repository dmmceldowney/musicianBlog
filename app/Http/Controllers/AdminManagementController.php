<?php

namespace App\Http\Controllers;

use App\Tag;
use App\BlogPost;
use App\Event;
use App\Http\Requests\SaveEventRequest;
use App\Http\Requests\SavePostRequest;
use App\Http\Requests\SaveTagRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminManagementController extends Controller
{
    public function index(){
        $blogPost = BlogPost::orderBy('created_at', 'desc')->first();

        $data = [
            'blogPost' => $blogPost
        ];

        return view('admin.index', $data);
    }

    // POSTS
    public function postIndex(){
        $blogPosts = BlogPost::orderBy('created_at', 'desc')->orderBy('id', 'desc')->paginate(5);
        $data = [
            'blogPosts' => $blogPosts
        ];

        return view('admin.postsIndex', $data);
    }

    //create
    public function createPost(){
        return view('admin.postDetail');
    }

    // save
    public function savePost(SavePostRequest $request){
        $blogPost = new BlogPost;
        $blogPost->title = $request->title;
        $blogPost->body = $request->body;
        // TODO: implement image uploads to S3 for blog post images
        $blogPost->save();

        return route('blog.blogPostView', ['id' => $blogPost->id]);

    }

    // edit
    public function editPost($id){
        $post = BlogPost::find($id);

        return view('admin.postDetail', ['post' => $post]);
    }


    // TAGS
    public function tagsIndex() {
        $tags = Tag::all();

        $data = [
            'tags' => $tags
        ];

        if (!empty($_GET['addedTag'])){
            $data['addedTag'] = Tag::find($_GET['addedTag']);
        }

        return view('admin.tagsIndex', $data);
    }

    public function createTag(){
        return view('admin.tagDetail');
    }

    public function saveTag(SaveTagRequest $request){
        // save tag
        $tag = new Tag;
        $tag->text = $request->text;
        $tag->save();

        return redirect(route('admin.tagsIndex', ['addedTag' => $tag->id]));

    }

    public function editTag($id){
        return view('admin.tagDetail', Tag::find($id));
    }

    // EVENTS
    public function eventsIndex(){
        $events = Event::whereDate('start_time', '>=', Carbon::now()->toDate())
            ->orderBy('start_time', 'asc')->get();

        return view('admin.eventsIndex', ['events' => $events]);
    }

    public function createEvent(){
        return view('admin.eventDetail');
    }

    public function saveEvent(SaveEventRequest $request){
        // save event
    }

    public function editEvent($id){
        return view('admin.eventDetail', ['event' => Event::find($id)]);
    }




}
