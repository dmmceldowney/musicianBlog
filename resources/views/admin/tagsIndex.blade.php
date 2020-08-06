@extends('layouts.admin')

@section('content')

<div class="content section">
    <div class="columns is-centered">
        <div class="column"></div>
        <div class="column is-3">
            <h2 class="is-2 title">All Tags</h2>
        </div>
        <div class="column">
            <a href="{{ route('admin.createTag') }}" class="button is-primary">+ New Tag</a>
        </div>
        <div class="column"></div>
    </div>
    @if(!empty($addedTag))
        <div class="columns is-centered">
            <div class="column"></div>
            <div class="column is-6">
                <div class="notification is-success">
                    Tag "{{ $addedTag->text }}" successfully added!
                </div>
            </div>
            <div class="column"></div>
        </div>
    @endif
    <div class="columns is-centered">
        <div class="column is-6">
            <table class="table">
                <thead>
                <tr>
                    <th>Text</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <td>{{ $tag->text }}</td>
                        <td><a href="#">Edit</a></td>
                        <td><a href="#">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>


@endsection
