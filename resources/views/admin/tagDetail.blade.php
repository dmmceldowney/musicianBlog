@extends('layouts.admin')

@section('content')
    <div class="container section">
        <div class="columns is-centered">
            <div class="column is-half">
                <form action="{{ route('admin.saveTag') }}" method="POST" class="form card section content">
                    <h3 class="is-3 title">
                        @if(empty($record))
                            New Tag
                        @else
                            Edit Tag #{{ $record->id }}
                        @endif
                    </h3>
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
                </form>
            </div>
        </div>
    </div>

@endsection

@section('pageScripts')

@endsection
