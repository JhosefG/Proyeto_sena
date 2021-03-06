<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" id="derecha1" href="{{ route('home') }}">
                <img src="{{ asset('img/logo.jpg') }}" alt="Logo" class="logo3">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    
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
                    <li class="nav-item mb-2">
                        <a class="nav-link" href="{{ route('facturar.index') }}">Facturar</a>
                    </li>
                    <li class="nav-item dropdown" id="izquierdainventario1">
                        <a class="nav-link dropdown-toggle" href="#" id="dropDesarrolladore" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropDesarrolladores" >
                            <li><a class="dropdown-item" href="{{ route('register') }}">Crear Nuevo Usuario</a></li>
                            
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                Cerrar sesion
                                </a>    
                                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 {{ csrf_field() }}
                                </form>
                            </li>
                            
                        </ul>
                    </li>

                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>