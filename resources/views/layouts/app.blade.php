<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/mystyle.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>

    <div id="header">

        {{--Loggin Registrer--}}
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ url('/logout') }}"
                               onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
        </ul>

        <a href="/" id="logo"><img src="/template_images/logo.png" width="310" height="114" alt="" title=""></a>

        <ul class="navigation">
            <li><a href="/">Home</a></li>
            <li><a href="/pet">Mascotas</a></li>
            <li><a href="/owner">Dueños</a></li>
            <li><a href="/vaccine">Vacunas</a></li>
            <li><a href="/veterinary">Veterinarias</a></li>
            <li><a href="/pet_vaccine/create">Añadir vacuna a mascota</a></li>
        </ul>
    </div>

    {{--<nav class="navbar navbar-default navbar-static-top">--}}
        <div class="container">
            {{--<div class="navbar-header">--}}

                <!-- Collapsed Hamburger -->
                {{--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
                    {{--<span class="sr-only">Toggle Navigation</span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                    {{--<span class="icon-bar"></span>--}}
                {{--</button>--}}

                <!-- Branding Image -->
                {{--<a class="navbar-brand" href="{{ url('/') }}">--}}
                    {{--{{ config('app.name', 'Laravel') }}--}}
                {{--</a>--}}
            {{--</div>--}}

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                {{--<ul class="nav navbar-nav navbar-right">--}}
                    {{--<!-- Authentication Links -->--}}
                    {{--@if (Auth::guest())--}}
                        {{--<li><a href="{{ url('/login') }}">Login</a></li>--}}
                        {{--<li><a href="{{ url('/register') }}">Register</a></li>--}}
                    {{--@else--}}
                        {{--<li class="dropdown">--}}
                            {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                            {{--</a>--}}

                            {{--<ul class="dropdown-menu" role="menu">--}}
                                {{--<li>--}}
                                    {{--<a href="{{ url('/logout') }}"--}}
                                        {{--onclick="event.preventDefault();--}}
                                                 {{--document.getElementById('logout-form').submit();">--}}
                                        {{--Logout--}}
                                    {{--</a>--}}

                                    {{--<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">--}}
                                        {{--{{ csrf_field() }}--}}
                                    {{--</form>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--@endif--}}
                {{--</ul>--}}
            </div>
        </div>
    {{--</nav>--}}

    @yield('content')

    {{--<div id="footer">--}}
        {{--<div class="section">--}}
            {{--<ul>--}}
                {{--<li>--}}
                    {{--<img src="/template_images/friendly-pets.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">--}}

                   {{--<!-- <p>--}}
                        {{--Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diam nonummy nib. <a class="more" href="index.html">Read More</a>--}}
                    {{--</p>-->--}}
                {{--</li>--}}
                {{--<li>--}}
                   {{--<img src="/template_images/pet-lover2.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">--}}

                 {{--<!--   <p>--}}
                        {{--Lorem ipsum dolor sit amet, cons ectetuer adepis cing, sed diam euis. <a class="more" href="index.html">Read More</a>--}}
                    {{--</p>-->--}}
                {{--</li>--}}
                {{--<li>--}}
                   {{--<img src="/template_images/healthy-dog.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">--}}

                    {{--<!--  <p>--}}
                         {{--Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diam nonu mmy. <a class="more" href="index.html">Read More</a>--}}
                     {{--</p>-->--}}
                {{--</li>--}}
                {{--<li>--}}

                    {{--<!--  <p>--}}
                          {{--Lorem ipsum dolor sit amet, consectetuer adepiscing elit,  sed diameusim. <a class="more" href="index.html">Read More</a>--}}
                      {{--</p>-->--}}
                      {{--<img src="/template_images/pet-lover.jpg" width="240" height="186" alt="Pet Shop" title="Pet Shop">--}}

                {{--</li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--</div>--}}

    <!-- Scripts -->
    {{--<script src="/js/app.js"></script>--}}
</body>
</html>
