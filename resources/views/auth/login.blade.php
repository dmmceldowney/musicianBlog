@extends('layouts.admin')

@section('content')
    <div class="section admin-body"></div>
    <div class="section container">
        <div class="columns is-centered">
            <div class="card column is-4">
                <form action="#" class="form" method="POST">
                    @csrf
                    <div class="field">
                        <label for="email" class="label">Username</label>
                        <div class="control">
                            <input type="email" class="input" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <div class="control">
                            <input type="password" class="input" id="password" name="password" required>
                        </div>
                    </div>
                    <button class="button is-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
