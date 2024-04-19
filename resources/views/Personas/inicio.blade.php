<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <link rel="icon" type="image/x-icon" href="../../imagenes/CULTURA1.png">
    <title>CC Siglo XXI - Panel de Administración</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>

<body style="background-image: url(../../../imagenes/teatro.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
<header class="w-100">
        <nav class="navbar navbar-expand-lg ps-lg-2 pe-lg-2 ps-xll-5 pe-xll-5">
            <div class="container-fluid">
                <a id="logos" class="navbar-brand me-auto me-lg-5" aria-current="page" href="{{ route('Personas.inicio') }}">
                    <img id="logo" src="../../../identidad/CULTURA1White.png" class="img-fluid float-end w-auto" alt="logo">
                </a>
                <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="bi bi-list"></i></span>
                </button>
                <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#userSupportedContent" aria-controls="userSupportedContent" aria-expanded="false" aria-label="Toggle User">
                    <span><i class="bi bi-person-fill"></i></span>
                </button>
                <!--<div class="collapse navbar-collapse ms-2" id="navbarSupportedContent">
                    <div class="container justify" id="navbar">
                        <div class="container rounded" id="navbart">
                            <ul class="nav nav-pills nav-fill justify-content-center me-auto mt-3 mb-3 mb-lg-0">
                                <li class="nav-item m-0">
                                    <a class="nav-link  align-middle text-white" href="{{ route('Usuarios.index') }}">Usuario</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  align-middle text-white" href="{{ route('Organizadores.index') }}">Organizador</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  align-middle text-white" href="{{ route('Salas.index') }}">Sala</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  align-middle text-white" href="{{ route('Eventos.index') }}">Eventos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  align-middle text-white" href="{{ route('Carteleras.index') }}">Cartelera</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  align-middle text-white" href="{{ route('Estacionamientos.index') }}">Estacionamiento</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  align-middle text-white" href="{{ route('Personas.index') }}">Personas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link align-middle text-white" href="{{ route('Boletos.index') }}">Boletos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  align-middle text-white" href="{{ route('Cajones.index') }}">Cajones</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>-->
                <div class="collapse navbar-collapse ms-2" id="userSupportedContent">
                    <div class="container" id="navbar">
                        <div class="container" id="navbar">
                            <ul class="navbar-nav justify-content-center me-auto mt-3 mb-2 mb-lg-0">
                                <li class="nav-item m-0">
                                    @auth
                                    <!-- Esto se mostrará solo si hay una sesión activa -->
                                    <label class="dropdown-item">Usuario Activo: {{ auth()->user()->username }}</label>
                                    @else
                                    <!-- Esto se mostrará si no hay una sesión activa -->
                                    <p>Por favor, inicia sesión para acceder a esta página.</p>
                                    @endauth
                                </li>
                                <li class="nav-item">
                                    @if (Auth::check())
                                    <form action="{{ route('logout') }}" method="POST" class="inline-block">
                                        @csrf
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg">Cerrar Sesión</button>
                                    </form>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="navbar-brand align-middle" id="userslong">
                    <div class="btn-group ms-lg-5 mt-1">
                        <button id="useraccess" type="button" class="btn btn-lg dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                        </button>
                        <ul id="useraccesslist" class="dropdown-menu">
                            <li>
                                @auth
                                <!-- Esto se mostrará solo si hay una sesión activa -->
                                <label class="dropdown-item">Usuario Activo: {{ auth()->user()->username }}</label>
                                @else
                                <!-- Esto se mostrará si no hay una sesión activa -->
                                <p>Por favor, inicia sesión para acceder a esta página.</p>
                                @endauth
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                @if (Auth::check())
                                <form action="{{ route('logout') }}" method="POST" class="inline-block">
                                    @csrf
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg">Cerrar Sesión</button>
                                </form>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
</header>

    <body >
    <div class="container-fluid h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col col-10 mt-5 mt-xxl-2 mb-xxl-5 col-xxl-5">
                <div class="d-flex w-100 justify-content-center">
                    <div id="login" class="card mt-xxl-5 mb-xxl-5">
                        <div class="d-flex w-100 justify-content-center">
                            <p class="mt-5 fs-3 fw-bold">Panel de Control</p>
                        </div>
                        <div class="container-fluid p-5">
                            <div class="row w-100 justify-content-center column-gap-2">
                                <div class="col col-xxl-6">
                                    @auth
                                    @if (auth()->user()->rol == 1)
                                    <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Usuarios.index') }}" ROLe="button">Usuario</a><br>
                                    <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Organizadores.index') }}" ROLe="button">Organizador</a><br>
                                    <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Estacionamientos.index') }}" ROLe="button">Estacionamiento</a><br>
                                    <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Cajones.index') }}" ROLe="button">Cajones</a><br>
                                </div>
                                <div class="col col-xxl-6">
                                    <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Salas.index') }}" ROLe="button">Sala</a><br>
                                    <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Eventos.index') }}" ROLe="button">Evento</a><br>
                                    <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Carteleras.index') }}" ROLe="button">Cartelera</a><br>
                                    <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Personas.index') }}" ROLe="button">Personas</a><br>
                                    <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Boletos.index') }}" ROLe="button">Boletos</a><br>
                                    @endif
                                    @else
                                    <!-- Esto se mostrará si no hay una sesión activa -->
                                    <p>Por favor, inicia sesión para acceder a esta página.</p>
                                    @endauth
                                </div>

                                <div class="col col-xxl-6">
                                    @auth
                                    @if (auth()->user()->rol == 2)
                                    <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Salas.index') }}" ROLe="button">Sala</a><br>
                                    <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Eventos.index') }}" ROLe="button">Evento</a><br>
                                    <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Carteleras.index') }}" ROLe="button">Cartelera</a><br>
                                    <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Boletos.index') }}" ROLe="button">Boletos</a><br>
                                    <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Estacionamientos.index') }}" ROLe="button">Estacionamiento</a><br>
                                    @endif
                                    @else
                                    <!-- Esto se mostrará si no hay una sesión activa -->
                                    <p>Por favor, inicia sesión para acceder a esta página.</p>
                                    @endauth
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

    @if (Auth::check())
    <form action="{{ route('logout') }}" method="POST" class="inline-block">
        @csrf
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg">Cerrar Sesión</button>
    </form>
    @endif
    </div>