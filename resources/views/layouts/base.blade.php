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
@yield('body')

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
