@extends('layouts.base')

@section('body')
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('blog.homeView') }}">
            <h4><strong>David Lych-Bell</strong></h4>
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbar" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="{{ route('blog.homeView') }}">
                Home
            </a>

            <a class="navbar-item">
                <strike>About</strike>
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    Blog
                </a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="{{ route('blog.indexView') }}">
                        Posts
                    </a>
                    <a class="navbar-item" href="{{ route('blog.tagsView') }}">
                        Tags
                    </a>
                </div>
            </div>
            <a href="{{ route('events.indexView') }}" class="navbar-item">
                Events
            </a>
            <!--
            <a href="#" class="navbar-item" disabled>
                <strike>Merch</strike>
            </a>
            -->
        </div>

        <div class="navbar-end">
        </div>
    </div>
</nav>
<section class="hero is-medium is-primary is-bold">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                @yield('pageTitle')
            </h1>
            <h2 class="subtitle">
                @yield('pageSubTitle')
            </h2>
        </div>
    </div>
</section>


<div class="content section">
    @yield('content')
</div>

</body>
@endsection
