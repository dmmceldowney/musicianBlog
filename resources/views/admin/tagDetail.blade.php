@extends('layouts.admin')

@section('content')
    <div class="container section">
        <h2 class="is-2 title">
            @if(empty($record))
                New Tag
            @else
                Edit Tag #{{ $record->id }}
            @endif
        </h2>
        <div class="columns">
            <div class="column"></div>
            <div class="column is-half">
                <form action="{{ route('admin.saveTag') }}" method="POST" class="form card section content">
                    <div class="columns">
                        <div class="column"></div>
                        <div class="column is-half">
                            @csrf
                            @if(!empty($record))
                                <input type="hidden" name="id" id="id" value="{{ $record->id }}">
                            @endif
                            <div class="field">
                                <label for="tag" class="label">Tag</label>
                                <div class="control">
                                    <input type="text" class="input" id="text" name="text"
                                    @if(!empty($record))
                                        value="{{ $record->title }}"
                                    @endif
                                    >
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <button class="button is-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="column"></div>
                    </div>
                </form>
            </div>
            <div class="column"></div>
        </div>
    </div>

@endsection

@section('pageScripts')

@endsection
