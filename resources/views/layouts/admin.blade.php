@extends('layouts.base')

@section('body')

    <nav class="navbar is-fixed-top dark-nav" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item dark-nav" href="{{ route('home') }}">
                <strong>Site Administration</strong>
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
               data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbar" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item dark-nav" href="{{ route('admin.index') }}">
                    Home
                </a>

                <a class="navbar-item dark-nav" href="{{ route('admin.blogIndex') }}">
                    Blog Posts
                </a>

                <a  class="navbar-item dark-nav" href="{{ route('admin.tagsIndex') }}">
                    Tags
                </a>

                <a class="navbar-item dark-nav" href="{{ route('admin.eventsIndex') }}">
                    Events
                </a>

                <!--
                <a href="#" class="navbar-item"></a>
                <div class="navbar-item has-dropdown is-hoverable">

                </div>
                -->
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="" class="button is-primary">
                            Settings
                        </a>
                        <a class="button is-danger" href="#">
                            Log Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="">
        @yield('content')
    </div>
@endsection
