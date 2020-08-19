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

<nav class="navbar level band-nav" role="navigation" aria-label="main navigation">
    <div id="navbarBasicExample" class="navbar-menu">
        <p class="level-item has-text-centered">
            <div class="navbar-start">
                <a class="navbar-item"  href="{{ route('blog.homeView') }}">
                    Home
                </a>
                <a href="{{ route('blog.indexView') }}" class="navbar-item">
                    Blog
                </a>
                <a class="navbar-item" href="{{ route('events.indexView') }}">
                    Events
                </a>
                <a class="navbar-item">
                    About
                </a>
                <a class="navbar-item">
                    Shop
                </a>
            </div>

        <p class="level-item has-text-centered horror-fying-med">
            <a href="{{ route('blog.homeView') }}" class="stripped-decoration-red">Black Satchel</a>
        </p>

        <p class="level-item">
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
            <div class="columns is-centered">
                <div class="column has-text-centered has-text-justified">
                    <h1 class="title horror-fying-large">
                        @yield('pageTitle')
                    </h1>
                    <h2 class="subtitle is-2">
                        @yield('pageSubTitle')
                    </h2>
                </div>
            </div>

        </div>
    </div>
</section>


<!-------------------------------------------------------------------------------------------------- MAIN CONTENT SECTION -- I don't usually comment like this, I just want this area to stand out
------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------>
    @yield('content')
<!-- ------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------
----- MAIN BODY SECTION -- just want this area to stand out ----------------------------------------->


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
