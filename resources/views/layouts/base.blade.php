<!doctype html>

<html
    @if(explode('.', \Request::route()->getName())[0] == 'admin' )
        class="has-navbar-fixed-top">
    @endif
<head>
    <meta charset="utf-8">
    <title>David Bell Music</title>
    <meta name="description" content="Webblog for Musician David Bell">
    <!-- http://meyerweb.com/eric/tools/css/reset/ -->
    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <![endif]-->

</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
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
                Events
            </a>
            <a class="navbar-item">
                About
            </a>
            <a class="navbar-item">
                Shop
            </a>
        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                Facebook
            </div>
            <div class="navbar-item">
                Instagram
            </div>
            <div class="navbar-item">
                Twitter
            </div>
            <div class="navbar-item">
                Youtube
            </div>
        </div>
    </div>
</nav>

<section class="hero is-black horror-fying">
    <div class="hero-body">
        <div class="container">
            <h1 class="title horror-fying-large">
                @yield('pageTitle')
            </h1>
            <h2 class="subtitle is-2">
                @yield('pageSubTitle')
            </h2>
        </div>
    </div>
</section>
    @yield('content')
</body>

<div class="footer">
    <div class="navbar-divider"></div>
    <div class="columns is-centered">
        <div class="column text-center">
            <p>Copyright &copy; {{ \Illuminate\Support\Carbon::now()->year }} David Bell Music</p>
        </div>
    </div>
</div>

</html>
@yield('pageScripts')
