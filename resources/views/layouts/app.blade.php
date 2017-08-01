<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Key translate - @yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
</head>
<body>
<div class="container">
    <nav class="navbar">
        <div class="navbar-brand">
            <a class="navbar-item" href="http://bulma.io">
                <img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox"
                     width="112" height="28">
            </a>

            <div class="navbar-burger burger" data-target="navMenuExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navMenuExample" class="navbar-menu">
            <div class="navbar-start">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link  is-active">
                        Docs
                    </a>
                    <div class="navbar-dropdown ">
                        <a class="navbar-item">
                            API
                        </a>
                        <a class="navbar-item">
                            Site
                        </a>
                    </div>
                </div>
                <a class="navbar-item">
                    About
                </a>
                <a class="navbar-item">
                    <span class="emoji">❤️</span>
                    Love
                </a>
            </div>

            <div class="navbar-end">
                <a class="navbar-item is-hidden-desktop-only" href="https://github.com/jgthms/bulma" target="_blank">
                    Github
                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link is-active">
                        Langs
                    </a>
                    <div class="navbar-dropdown ">
                        <a class="navbar-item">
                            Русский
                        </a>
                        <a class="navbar-item">
                            English
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
@yield('sidebar')
<section class="section">
    <div id="app">
        @yield('content')
    </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="content has-text-centered">
            <p>
                <strong>KeyTranslate</strong> by Alex Kovalchuk
            </p>
            <p>
                <a class="icon" href="https://github.com/MammutAlex">
                    <i class="fa fa-github"></i>
                </a>
            </p>
        </div>
    </div>
</footer>
<script src="/js/all.js"></script>
<script src="/js/web.js"></script>
</body>
</html>