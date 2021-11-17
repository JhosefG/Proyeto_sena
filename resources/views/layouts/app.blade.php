<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
    #name{
        margin-left: 45rem;
    }
</style>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand " href="#">
                    Lubrifiltros
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto " id="izquierdasesion1">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item mb-2">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-link disabled py-0">
                                    <a class="nav-link dropdown" href="{{ route('register') }}">{{ __('registrarse') }}</a>
                                </li>
                            @endif
                            
                        @else
                       <ul class="navbar-nav ml-auto" id="izquierdasesion">
                        <li class="nav-item mb-2">
                            <a class="nav-link" href="{{ route('facturar.index') }}">Facturar</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropProyectos" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Inventario
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropProyectos">
                                <li><a class="dropdown-item" href="{{ route('inventario.index') }}">Lista</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('inventario.create') }}">Crear nuevo</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropProyectos" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Clientes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropProyectos">
                                <li><a class="dropdown-item" href="{{ route('cliente.index') }}">Lista</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('cliente.create') }}">Crear nuevo</a></li>
                            </ul>
                        </li>
                            <li class="nav-item dropdown " id="izquierda">
                                
                                <a class="nav-link dropdown-toggle " href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropDesarrolladores">
                                    
                                    <li><a class="dropdown-item" href="{{ route('register') }}">Crear Nuevo Usuario</a></li>
                                    <li><a class="dropdown-item" href="{{ route('perfil.index') }}">Ver perfil</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                        Logout
                                        </a>    
                                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         {{ csrf_field() }}
                                        </form>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul> 
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
