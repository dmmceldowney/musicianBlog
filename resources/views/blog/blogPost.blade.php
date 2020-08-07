@extends('layouts.mainLayout')

@section('content')





    <div class="content section">
        <div class="columns is-centered">
            <div class="column is-8 card">
                <h3 class="is-3 title">{{ $post->title }}</h3>
                <p>
                    {!! $post->body !!}
                </p>
            </div>
            <div class="column card is-1">
                <h4 class="subtitle is-4">Tags</h4>
            </div>
        </div>

    </div>



@endsection
