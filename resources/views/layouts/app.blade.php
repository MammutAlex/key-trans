<!DOCTYPE html>
<html lang="{{app('translator')->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{trans('web.header.title')}}</title>
    <meta name="keywords" content="{{trans('web.header.meta.keywords')}}">
    <meta name="description" content="{{trans('web.header.meta.description')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.0/css/bulma.min.css">
</head>
<body>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-103725532-1', 'auto');
    ga('send', 'pageview');

</script>
<div class="container">
    <nav class="navbar">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                KeyTranslate
            </a>

            <div class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div id="navMenu" class="navbar-menu">
            <div class="navbar-end">
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link  is-active">
                        {{trans('web.header.locale')}}
                    </a>
                    <div class="navbar-dropdown">
                        @foreach(trans('web.localeList') as $key=>$locale)
                            <a class="navbar-item" hreflang="{{$key}}" href="/{{$key}}">
                                {{$locale}}
                            </a>
                        @endforeach

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
<script src="/js/web.js"></script>
</body>
</html>