@extends('layouts.base')

@section('body')

    <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <strong>David Bell Music Admin</strong>
            </a>

            <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
               data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    Home
                </a>

                <a class="navbar-item">
                    Blog Posts
                </a>

                <a href="#" class="navbar-item">
                    Tags
                </a>

                <a href="#" class="navbar-item">
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
                            {{ \Illuminate\Support\Facades\Auth::user()->name }}
                        </a>
                        <a class="button is-danger" href="#">
                            Log Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')

@endsection
