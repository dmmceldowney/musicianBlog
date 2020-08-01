<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>David Bell Music</title>
    <meta name="description" content="Webblog for Musician David Bell">
    <!-- http://meyerweb.com/eric/tools/css/reset/ -->
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->

</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('blog.homeView') }}">
            <h4><strong>David Bell</strong></h4>
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
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
            <a href="#" class="navbar-item" disabled>
                <strike>Merch</strike>
            </a>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary" href="{{ route('register') }}">
                        <strong>Sign up</strong>
                    </a>
                    <a class="button is-light" href="{{ route('login') }}">
                        Log in
                    </a>
                </div>
            </div>
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
</html>
