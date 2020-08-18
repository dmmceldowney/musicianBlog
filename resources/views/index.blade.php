<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Black Satchel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Style Sheets -->
    <link rel="stylesheet" href="css/bulma.css">
    <link rel="stylesheet" href="css/styles.css">


</head>

<body>

<section class="hero  is-fullheight">
    <!-- Hero head: will stick at the top -->
    <div class="hero-head">
        <header class="navbar">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item">
                        <img src="https://versions.bulma.io/0.7.0/images/bulma-type-white.png" alt="Logo">
                    </a>
                    <span class="navbar-burger burger" data-target="navbarMenuHeroC">
                    <span></span>
                    <span></span>
                    <span></span>
                  </span>
                </div>
                <div id="navbarMenuHeroC" class="navbar-menu">
                    <div class="navbar-end">
                        <a class="navbar-item">
                            Facebook
                        </a>
                        <a class="navbar-item">
                            Instagram
                        </a>
                        <a class="navbar-item">
                            Twitter
                        </a>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <!-- Hero content: will be in the middle -->
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title is-1 huge-title">
                Band Name
            </h1>
            <div class="columns is-centered column-nav-link">
                <div class="column is-2">
                    <div class="container has-text-centered">
                        <a href="#" class="nav-link-text"><br>MUSIC<br></a>
                    </div>
                </div>
                <div class="column is-2">
                    <div class="container has-text-centered">
                        <a href="{{ route('blog.indexView') }}" class="nav-link-text"><br>NEWS<br></a>
                    </div>
                </div>
                <div class="column is-2">
                    <div class="container has-text-centered">
                        <a href="#" class="nav-link-text"><br>EVENTS<br></a>
                    </div>
                </div>
                <div class="column is-2">
                    <div class="container has-text-centered">
                        <a href="#" class="nav-link-text"><br>ABOUT<br></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>


</body>

</html>
