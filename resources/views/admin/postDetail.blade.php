@extends('layouts.admin')

@section('content')
    <div class="content section">
        <div class="columns is-centered">
            <div class="column"></div>
            <div class="column">
                <h3 class="title is-3">
                    @if(!empty($post))
                        Update Post #{{ $post->id }}
                    @else
                        Create Post
                    @endif
                </h3>
            </div>
            <div class="column"></div>
        </div>
        @if($errors->any())
            <div class="columns">
                <div class="column"></div>
                <div class="column">
                    <div class="notification is-danger">
                        <p>There were errors submitting your post.</p>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="column"></div>
            </div>
        @endif
        <form class="form card section container" action="#" method="POST">
            @csrf
           <div class="field is-horizontal">
                <div class="class field-label">Title</div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input class="input" type="text" placeholder="Title" id="title" name="title"
                            @if(!empty($post))
                                value="{{ $post->title }}"
                            @endif
                            >
                        </p>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="body">Body</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <textarea rows="15" class="textarea" placeholder="Enter your blog post body..." id="body" name="body">
                                @if(!empty($post))
                                    {!! $post->body !!}
                                @endif
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns is-centered">
                <div class="column"></div>
                <div class="column is-2"><a href="#" class="btn btn-success" >Submit</a></div>
                <div class="column"></div>
            </div>
        </form>
    </div>


@endsection
