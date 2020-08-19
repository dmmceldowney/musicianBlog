@extends('layouts.base')

@section('pageTitle')
    Blog
@endsection

@section('pageSubTitle')
    News & Content
@endsection


@section('content')
    <div class="columns is-centered">
        <div class="column is-6">
            @foreach($posts as $post)
                <div class="container">
                    <a class="card blog-card" href="{{ route('blog.blogPostView', ['id' => $post->id]) }}" >
                        <div class="section content">
                            <h1 class="title horror-fying-large is-1">
                                {{ $post->title }}
                            </h1>
                            <div>
                                {!! $post->beginning !!}
                            </div>
                            <div>
                                &nbsp;
                            </div>
                            <div>
                                ... click to continue...
                            </div>

                            <div class="navbar-divider"></div>

                            <p class="is-small is-italic">Created {{ $post->created_at }}, Last Updated {{ $post->updated_at }}</p>
                        </div>
                    </a>
                </div>


            @endforeach
        </div>
        <div class="column is-2">
            <!-- calendar/ search stuff -->
            <div class="card blog-card">
                <div class="section content"></div>
            </div>
        </div>
    </div>
    <div class="columns is-centered blog-paginator">
        <div class="column is-1">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
