@extends('layouts.admin')

@section('content')


        <!-- TODO: create blogPost CSS classes for admin && work on layout -->
        <div class="container section">
            <h2 class="is-2 title">Site Admin Home</h2>
            <div class="columns">
                <div class="column is-half">
                    <h3 class="is-3 subtitle">Most Recent Blog Post</h3>
                        <div class="card">
                            <div class="section container">
                                <div class="titleBlock">
                                    <h4 class="blog-post-title subtitle is-4">
                                        <a href="{{ route('blog.blogPostView', ['id' => $blogPost->id]) }}">
                                            {{ $blogPost->title }}
                                        </a>
                                    </h4>
                                </div>
                                <div class="bodyBlock">
                                    <br>
                                    <p>{!! $blogPost->beginning !!}</p> <!-- {\!\! \!\!} => parses HTML (non-escaped HTML) -->
                                </div>
                                <p class="creation-dates is-italic">created at {{ $blogPost->created_at }}<br>updated at {{ $blogPost->updated_at }}</p>
                                <a class="creation-dates" href="">Edit</a>
                            </div>
                        </div>
                        <div class="is-divider"></div>
                </div>
                <div class="column is-half">
                    <h3 class="is-3 subtitle">Upcoming Events</h3>
                    <!-- add events -->
                </div>
            </div>

        </div>

@endsection
