@extends('layouts.admin')

@section('content')
    <div class="section content admin-body">
        <div class="columns">
            <div class="column is-3"></div>
            <div class="column">
                <h3 class="is-3 title">Events Index</h3>
            </div>
            <div class="column is-2">
                <a href="{{ route('admin.createEvent') }}" class="button is-primary">+ Create Event</a>
            </div>
            <div class="column"></div>
        </div>
        @if(!empty($events))
            @foreach($events as $event)
                <div class="columns is-centered">
                    <div class="card column is-6">
                        <h4 class="subtitle is-4">{{ $event->title }}</h4>
                        <ul>
                            <li>Starts at {{ $event->start_time }}</li>
                            <li>{{ $event->description }}</li>
                            <li>{{ $event->playing_with }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        @endif
    </div>


@endsection
