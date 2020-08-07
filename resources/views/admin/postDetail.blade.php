@extends('layouts.admin')

@section('content')
    <div class="content section">

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

        <form class="form card section container" action="{{ route('admin.saveBlogPost') }}" method="POST">
            <h3 class="is-3 title">
                @if(!empty($post))
                    Edit Post
                @else
                    Create Post
                @endif
            </h3>
            @csrf
            @if(!empty($post))
                <input type="hidden" name="id" id="id" value="{{ $post->id }}">
            @endif
            <div class="field">
                <label for="title" class="label">Title</label>
                <div class="control">
                    <input type="text" class="input" name="title" id="title"
                    @if(!empty($post))
                        value="{{ $post->title }}"
                    @endif
                    >
                </div>
            </div>
            <div class="field">
                <label for="body" class="label">Body</label>
                <div class="control">
                    <textarea class="textarea" placeholder="Enter your blog post body!" id="body" name="body" rows="15">
                        @if(!empty($post))
                            {{ $post->body }}
                        @endif
                    </textarea>
                </div>
            </div>
            <div class="columns is-centered">
                <div class="column is-2">
                    <button class="button is-fullwidth is-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>




    </div>


@endsection
