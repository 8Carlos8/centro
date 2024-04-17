<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/CULTURA1.png') }}">
    <title>CC Siglo XXI - Iniciar Sesion</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body style="background-color:#231c16; background-image: url({{ asset('imagenes/teatro.jpg') }}); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

    <!-- Carrusel -->
    <section class="w-100">
        <div>
            <div class="card position-absolute bg-black text-white w-100 z-n1">
                <img src="{{ asset('imagenes/teatro.jpg') }}" class="bg-img w-100" />
                <div class="card-img-overlay text-light justify-content-center flex-column text-center pt-0 pt-lg-5" style="background-color: rgba(0, 0, 0, 0.5)">
                </div>
            </div>
        </div>

        <div class="container-fluid mb-xxl-5">
            <div class="row w-100 justify-content-center">
                <div class="col col-10 col-xxl-6 mt-5 mb-5 mt-xxl-5 mb-xxl-5">
                    <div class="d-flex justify-content-center w-100 mt-xxl-5 mb-xxl-5 mp-5">
                        <img class="img-fluid w-50" src="{{ asset('identidad/CULTURAHWhiteA.png') }}" alt="Logo CCSXXI">
                    </div>
                </div>
                <div class="col col-10 mt-5 mt-xxl-5 mb-xxl-5 col-xxl-3">
                    <div class="d-flex w-100 justify-content-center">
                        <div id="login" class="card mt-xxl-5 mb-xxl-5">
                            <div class="p-2">
                                <input id="filtrocartelera" type="button" value="Regresar" class="btn" onclick="history.back()">
                            </div>
                            <div class="d-flex mb-5 mt-5 w-100 justify-content-center">
                                <svg  id="loginlogo" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                            </div>
                            <div class="d-flex w-100 justify-content-center">
                                <p class="fs-3 fw-bold"> Iniciar Sesión </p>
                            </div>
                            <div class="w-100 ps-4 pe-4 mb-3">
                                @if ($errors->any())
                                    <div>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form method="POST" action="{{ route('Usuarios.login') }}">
                                    @csrf
                                    <table>
                                        <tr>
                                            <td class="control-label ms-2">
                                                <label for="username">Username</label>
                                            </td>
                                            <td class="control-label ms-2">
                                                <input type="text" id="username" name="username" value="{{ old('username') }}" required autofocus>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="control-label ms-2">
                                                <label for="password">Password</label>
                                            </td>
                                            <td class="control-label ms-2">
                                                <input type="password" id="password" name="password" required>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align:middle" align="right">
                                                <a href="{{ route('Personas.create') }}" class="btn btn-primary"><i class="bi bi-person-plus-fill"></i>&nbsp;Registrarse</a>
                                            </td>  
                                            <td  style="vertical-align:middle" align="center">
                                                <button type="submit" class="btn btn-success"><i class="bi bi-save-fill"></i>&nbsp;Login</button>
                                            </td>
                                        </tr>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
