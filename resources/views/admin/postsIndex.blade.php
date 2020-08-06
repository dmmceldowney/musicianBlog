@extends('layouts.admin')

@section('content')
    <div class="section">
        <div class="columns is-centered">
            <div class="column is-2"></div>
            <div class="column is-3">
                <h2 class="is-2 title">Blog Posts</h2>
            </div>
            <div class="column is-2"></div>
            <div class="column is-1">
                <a href="{{ route('admin.postDetail') }}" class="button is-success">+ New Blog Post</a>
            </div>
            <div class="column"></div>
        </div>
    </div>
    @foreach($blogPosts as $blogPost)
        <div class="columns blog-post-spacing-bottom">
            <div class="column is-2"></div>
            <div class="column is-8 card blog-post-spacing-bottom">
                <a href="{{ route('blog.blogPostView', ['id' => $blogPost->id])  }}">
                    <h3 class="subtitle is-3">{{ $blogPost->title }}</h3>
                </a>
                <p>{{ $blogPost->beginning }}</p>
                @if($blogPost->beginning != $blogPost->post)
                    <p>...</p>
                @endif
                <div class="navbar-divider"></div>
                <p class="creation-dates">Last updated {{ $blogPost->updated_at }}<br>Created {{ $blogPost->created_at }}</p>
                <p class="creation-dates"><a href="{{ route('admin.blogPostDetail', ['id' => $blogPost->id]) }}">Edit</a></p>
            </div>
        </div>
    @endforeach

    <div class="columns">
        <div class="column is-4"></div>
        <div class="column is-4">
            {{ $blogPosts->links() }}
        </div>
    </div>
@endsection
