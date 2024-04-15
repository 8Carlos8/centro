
<head>
    <title>CC Siglo XXI - Lista de Usuarios</title>
    <link rel="icon" type="image/x-icon" href="../../../imagenes/CULTURA1.png">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    
    </script>
</head>

<body style="background-image: url(../../../imagenes/teatro.jpg);background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
    <header class="w-100">
        <nav class="navbar navbar-expand-lg ps-lg-2 pe-lg-2 ps-xll-5 pe-xll-5">
            <div class="container-fluid">
                <a id="logos" class="navbar-brand me-auto me-lg-5" aria-current="page" href="../panela.php">
                    <img id="logo" src="../../../identidad/CULTURA1White.png" class="img-fluid float-end w-auto" alt="logo">
                </a>
                <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="bi bi-list"></i></span>
                </button>
                <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#userSupportedContent" aria-controls="userSupportedContent" aria-expanded="false" aria-label="Toggle User">
                    <span><i class="bi bi-person-fill"></i></span>
                </button>
                <div class="collapse navbar-collapse ms-2" id="navbarSupportedContent">
                    <div class="container justify" id="navbar">
                        <div class="container rounded" id="navbart">
                            <ul class="nav nav-pills nav-fill justify-content-center me-auto mt-3 mb-3 mb-lg-0">
                                <li class="nav-item m-0">
                                    <a class="nav-link  align-middle text-white" href="{{ route('Usuarios.index') }}">Usuario</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active align-middle text-white" href="{{ route('Organizadores.index') }}">Organizador</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link align-middle text-white" href="{{ route('Salas.index') }}" >Sala</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link align-middle text-white"  href="{{ route('Eventos.index') }}">Eventos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link align-middle text-white" href="{{ route('Carteleras.index') }}">Cartelera</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  align-middle text-white" href="{{ route('Estacionamientos.index') }}">Estacionamiento</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  align-middle text-white" href="{{ route('Personas.index') }}">Personas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  align-middle text-white" href="{{ route('Boletos.index') }}">Boletos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link  align-middle text-white" href="{{ route('Cajones.index') }}">Cajones</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse ms-2" id="userSupportedContent">
                    <div class="container" id="navbar">
                        <div class="container" id="navbar">
                            <ul class="navbar-nav justify-content-center me-auto mt-3 mb-2 mb-lg-0">
                                <li class="nav-item m-0">
                                    <label class="dropdown-item">Usuario Activo: </label>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item" href="../../logout.php">Cerrar Sesión</a>
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
                            <li><label class="dropdown-item">Usuario Activo: </label></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="../../logout.php">Cerrar Sesión</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container-fluid py-2 z-1">
    <div class="card py-2 m-5">
        <div class="row justify-content-center">
            <div class="container-fluid py-2 z-1">
                <h1 class="text-3xl font-bold mb-4 text-gray-900">Organizadores</h1>

                <div class="mb-4">
                    <a href="{{ route('Organizadores.create') }}" class="btn btn-success ms-4"><i class="bi bi-plus-circle"></i>&nbsp;Crear nuevo organizador</a>
                    
                </div>

                <table class="table-auto w-full border-collapse border-gray-200">
                    <thead>
                        <tr>
                            <th class="border-gray-300 px-4 py-2 text-gray-700">ID</th>
                            <th class="border-gray-300 px-4 py-2 text-gray-700">ID Persona</th>
                            <th class="border-gray-300 px-4 py-2 text-gray-700">Estado</th>
                            <th class="border-gray-300 px-4 py-2 text-gray-700">Razon Social</th>
                            <th class="border-gray-300 px-4 py-2 text-gray-700">Direccion</th>
                            <th class="border-gray-300 px-4 py-2 text-gray-700">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($organizadores as $organizador)
                        <tr>
                            <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $organizador->id }}</td>
                            <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $organizador->id_persona }}</td>
                            <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $organizador->estado }}</td>
                            <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $organizador->razonSoc }}</td>
                            <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $organizador->direccion }}</td>
                            <td class="border-gray-300 px-4 py-2 text-gray-700">
                                <a href="{{ route('Organizadores.edit', $organizador->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded-lg">Editar</a>
                                <a href="{{ route('Organizadores.show', $organizador->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded-lg">Visualizar</a>
                                <form action="{{ route('Organizadores.destroy', $organizador->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-lg">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-2 ps-2 mt-4 text-end">
                    <a href="{{ route('Personas.inicio') }}" class="btn btn-danger ms-2"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
