@extends('layouts.admin')

@section('content')
    <div class="content section">
        <div class="columns is-centered">
            <div class="column is-6">
                <h3 class="is-3 title">
                    @if(!empty($event))
                        Edit Event
                    @else
                        New Event
                    @endif
                </h3>
            </div>
        </div>
        <div class="columns is-centered">
            <div class="column is-6">
                    <form action="{{ route('admin.saveEvent') }}" class="card form" method="POST">
                        @csrf
                        <div class="section container">
                            <div class="field">
                                <label class="label" for="venue">Venue</label>
                                <div class="control">
                                    <input class="input" type="text" id="venue" name="venue" placeholder="Venue name..."
                                    @if(!empty($event))
                                        value="{{ $event->venue }}"
                                    @endif
                                    >
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="start_time">Start Time</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Start time..." id="start_time" name="start_time"
                                           @if(!empty($event))
                                           value="{{ $event->start_time }}"
                                        @endif
                                    >
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="description">Description</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Description..." id="description" name="description"
                                           @if(!empty($event))
                                           value="{{ $event->description }}"
                                        @endif
                                    >
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="playing_with">Playing With</label>
                                <div class="control">
                                    <input class="input" type="text" placeholder="Playing with..." id="playing_with" name="playing_with"
                                           @if(!empty($event))
                                           value="{{ $event->playing_with }}"
                                        @endif
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="columns container">
                            <div class="column is-3">
                                <button class="button is-primary">Submit</button>
                            </div>
                            <div class="column"></div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection
