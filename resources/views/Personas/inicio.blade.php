
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
<body style="background-color:#231c16">
    <header class="w-100">
        <nav class="navbar navbar-expand-lg ps-lg-2 pe-lg-2 ps-xll-5 pe-xll-5">
            <div class="container-fluid">
                <a id="logos" class="navbar-brand me-auto me-lg-5" aria-current="page" href="#">
                <img  id="logo" src="{{asset('identidad/CULTURA1White.png')}}" class="img-fluid float-end w-auto" alt="logo">
                </a>
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="bi bi-list"></i></span>
            </button>
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#userSupportedContent" aria-controls="userSupportedContent" aria-expanded="false" aria-label="Toggle User">
                <span><i class="bi bi-person-fill"></i></span>
            </button>
            <div class="collapse navbar-collapse ms-2" id="navbarSupportedContent">
                <div class="container justify" id="navbar">
                <div class="container rounded" style="visibility: hidden;" id="navbart">
                    <ul class="nav nav-pills nav-fill justify-content-center me-auto mt-3 mb-3 mb-lg-0">
                    <li class="nav-item m-0">
                        <a class="nav-link align-middle text-white" href="{{ route('Usuarios.index') }}">Usuario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link align-middle text-white" href="{{ route('Organizadores.index') }}">Organizador</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link align-middle text-white"href="{{ route('Estacionamientos.index') }}">Sala</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link align-middle text-white"  href="{{ route('Eventos.index') }}">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link align-middle text-white" href="{{ route('Carteleras.index') }}">Cartelera</a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        </header>
        <body>
        <div class="col col-10 mt-5 mt-xxl-2 mb-xxl-5 col-xxl-5">
                    <div class="d-flex w-100 justify-content-center">
                        <div id="login" class="card mt-xxl-5 mb-xxl-5">
                            <div class="d-flex w-100 justify-content-center">
                                <p class="mt-5 fs-3 fw-bold"> Panel de Control </p>
                            </div>
                            <div class="container-fluid p-5">
                                <div class="row w-100 justify-content-center column-gap-2">
                                    <div class="col col-xxl-6">
                                        <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Usuarios.index') }}" ROLe="button">Usuario</a><br>
                                        <a class="btn btn-danger w-100 btn-lg mt-2 mb-0"  href="{{ route('Organizadores.index') }}"  ROLe="button">Organizador</a><br>
                                    </div>
                                    <div class="col col-xxl-6">
                                        <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Salas.index') }}"   ROLe="button">Sala</a><br>
                                        <a class="btn btn-danger w-100 btn-lg mt-2 mb-0"  href="{{ route('Eventos.index') }}"  ROLe="button">Evento</a><br>
                                        <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Carteleras.index') }}"  ROLe="button">Cartelera</a><br> 
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