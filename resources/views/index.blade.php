<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
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

<section class="hero is-fullheight">
    <!-- Hero head: will stick at the top -->
    <div class="hero-head">


        <header class="navbar">
            <div class="navbar-brand">
                <a role="button" class="navbar-burger" data-target="navMenu" aria-label="menu" aria-expanded="false">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div class="navbar-menu" id="navMenu">
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
        </header>
    </div>


    <!-- Hero content: will be in the middle -->
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title is-1 huge-title">
                Black Satchel
            </h1>
            <div class="columns is-centered column-nav-link">
                <div class="column is-2">
                    <div class="container has-text-centered">
                        <a href="#" class="nav-link-text">Events</a>
                    </div>
                </div>
                <div class="column is-2">
                    <div class="container has-text-centered">
                        <a href="{{ route('blog.indexView') }}" class="nav-link-text">Blog</a>
                    </div>
                </div>
                <div class="column is-2">
                    <div class="container has-text-centered">
                        <a href="#" class="nav-link-text">About</a>
                    </div>
                </div>
                <div class="column is-2">
                    <div class="container has-text-centered">
                        <a href="#" class="nav-link-text">Music</a>
                    </div>
                </div>
                <div class="column is-2">
                    <div class="container has-text-centered">
                        <a href="#" class="nav-link-text">Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>


</body>

<script>

    // get our navbarBurgers
    const navbarBurgers = document.querySelectorAll('.navbar-burger');

    // for each of the navbar items
    navbarBurgers.forEach(el => {

        // create an event listener that expands when the burger is clicked
        el.addEventListener('click', () => {
            // this gets the "target" from the hidden object
            const targetPointer = el.dataset.target;
            // getting the element by referencing that target
            const targetObject = document.getElementById(targetPointer);
            // activating hides/shows the burgers
            el.classList.toggle('is-active');
            targetObject.classList.toggle('is-active');
        });
    })


</script>

</html>
