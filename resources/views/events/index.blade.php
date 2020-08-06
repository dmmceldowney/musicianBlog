@extends('layouts.mainLayout')

@section('pageTitle')
    Upcoming Events
@endsection

@section('content')
    <div class="section container">
        @if(!empty($events))
            @foreach($events as $event)
                <div class="columns">
                    <div class="column is-4"></div>
                    <div class="column">
                        <div class="card">
                            <div class="columns">

                            </div>

                            <time datetime="2014-09-20" class="icon">
                                <em>{{ $event->dayOfWeek }}</em>
                                <strong>{{ $event->monthYear }}</strong>
                                <span>{{ $event->day }}</span>
                            </time>

                            <h4 class="subtitle is-4">at the {{ $event->title }}</h4>

                        </div>
                    </div>
                    <div class="column"></div>
                </div>
            @endforeach
        @endif
    </div>
@endsection











