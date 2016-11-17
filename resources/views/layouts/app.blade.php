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
        {{--<ul class="nav navbar-nav navbar-right">--}}

        {{--</ul>--}}


        <ul class="nav navbar-nav navbar-left">
            <li><a href="/" id="logo"><img src="/template_images/logo.png" width="310" height="100" alt="" title=""></a></li>
            {{--<li><a href="/">Home</a></li>--}}
            <li><a href="/pet">Mascotas</a></li>
            <li><a href="/owner">Dueños</a></li>
            <li><a href="/vaccine">Vacunas</a></li>
            <li><a href="/veterinary">Veterinarias</a></li>
            {{--<li><a href="/pet_vaccine/create">Añadir vacuna a mascota</a></li>--}}

        </ul>
        <ul class="nav navbar-nav navbar-right">

            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Ingresar</a></li>
                <li><a href="{{ url('/register') }}">Registrarse</a></li>
            @else
                <li><a href="javascript:void(0)">{{ Auth::user()->name }}</a></li>
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
            @endif
        </ul>
    </div>

    @yield('content')

</body>
</html>
