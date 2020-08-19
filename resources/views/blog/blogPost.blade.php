@extends('layouts.base')

@section('pageTitle')
    {{ $post->title }}
@endsection

@section('content')
        <div class="columns is-centered">
            <div class="column is-8">
                <div class="columns section is-centered">
                    <div class="column is-1 container section" style="margin-right:20px;">
                        <a href="{{ url()->previous() }}" class="button is-black horror-fying-sm">Back</a>
                    </div>
                    <div class="card column section container-fluid float-right">
                        <div class="columns is-centered">
                            <div class="column is-10">
                                <p>
                                    {!! $post->body !!}
                                </p>
                            </div>
                        </div>
                        <div class="navbar-divider"></div>
                        <div class="columns">
                            <div class="column">
                                <div class="container">
                                    <p class="is-italic small-font">Last Updated {{ $post->updated_at }}, Created {{ $post->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
