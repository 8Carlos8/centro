<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE= edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="..\imagenes\CULTURA1.png">
    <title>CC Siglo XXI - Cartelera</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script>
        var contenido = "";
        fetch("https://minitechsolutions.shop/ccsxxitest/api/cartelera.php?pagina=1")
            .then(resp => resp.json())
            .then(resp => {
                console.log(resp);
                resp.cartelera.forEach((a) => {

                    contenido += "<div class=\"card bg-white\"><div class=\"row w-100 pt-2 pb-2\"><div class=\"col col-2\"><div class=\"d-flex w-100 justify-content-center\"><img id=\"thumbnail\" src=\"";

                    if (a.EVENTO.FOTO == "" || a.EVENTO.FOTO == "null" || a.EVENTO.FOTO == null) {
                        contenido += "../imagenes/poster-placeholder.png";
                    } else {
                        contenido += a.EVENTO.FOTO;
                    }

                    contenido += "\"></div></div><div class=\"col col-7 align-self-center\"><p class=\"h3\">" + a.EVENTO.NOMBRE + "</p><p class=\"h6\">" + a.SALA.NOMBRE + " - " + a.INICIO + "</p>" +
                        "</div><div class=\"col col-3 align-self-center\"><div class=\"d-flex w-100 pe-xl-5 justify-content-end\">" +
                        "<a id=\"filtrocartelera\" class=\"btn me-3\" href=\"../evento/?id=" + a.ID + "\" value=\"Ver Detalles\">Ver Detalles</a></div></div></div></div>";
                });
                document.getElementById("cartelera2").innerHTML = contenido;
            });

        var pagina = 1;

        function invocaplus() {
            pagina++;
            contenido = "";
            document.getElementById("cartelera2").innerHTML = "";
            fetch("https://minitechsolutions.shop/ccsxxitest/api/cartelera.php?pagina=" + pagina)
                .then(resp => resp.json())
                .then(resp => {
                    if (resp.cartelera == "Algo salio mal") {
                        contenido += "<div class=\"card bg-white\"><div class=\"row w-100 pt-2 pb-2\"><div class=\"col col-2\"><div class=\"d-flex w-100 justify-content-center\">";
                        contenido += "</div></div><div class=\"col col-7 mt-5 mb-5 align-self-center\"><p class=\"h3 mt-5 mb-5\"> Algo ha Salido Mal de Nuestro Lado </p><img class=\"h6\" src=\"../imagenes/403.jpg\">" +
                            "</div></div></div></div>";
                    } else {
                        resp.cartelera.forEach((a) => {

                            contenido += "<div class=\"card bg-white\"><div class=\"row w-100 pt-2 pb-2\"><div class=\"col col-2\"><div class=\"d-flex w-100 justify-content-center\"><img id=\"thumbnail\" src=\"";

                            if (a.EVENTO.FOTO == "" || a.EVENTO.FOTO == "null" || a.EVENTO.FOTO == null) {
                                contenido += "../imagenes/poster-placeholder.png";
                            } else {
                                contenido += a.EVENTO.FOTO;
                            }

                            contenido += "\"></div></div><div class=\"col col-7 align-self-center\"><p class=\"h3\">" + a.EVENTO.NOMBRE + "</p><p class=\"h6\">" + a.SALA.NOMBRE + " - " + a.INICIO + "</p>" +
                                "</div><div class=\"col col-3 align-self-center\"><div class=\"d-flex w-100 pe-xl-5 justify-content-end\">" +
                                "<a id=\"filtrocartelera\" class=\"btn me-3\" href=\"../evento/?id=" + a.ID + "\" value=\"Ver Detalles\">Ver Detalles</a></div></div></div></div>";
                        });
                    }
                    document.getElementById("cartelera2").innerHTML = contenido;

                });
        }

        function invocaminus() {
            pagina--;
            contenido = "";
            document.getElementById("cartelera2").innerHTML = "";
            fetch("https://minitechsolutions.shop/ccsxxitest/api/cartelera.php?pagina=" + pagina)
                .then(resp => resp.json())
                .then(resp => {
                    if (resp.cartelera == "Algo salio mal") {
                        contenido += "<div class=\"card bg-white\"><div class=\"row w-100 pt-2 pb-2\"><div class=\"col col-2\"><div class=\"d-flex w-100 justify-content-center\">";
                        contenido += "</div></div><div class=\"col col-7 mt-5 mb-5 align-self-center\"><p class=\"h3 mt-5 mb-5\"> Algo ha Salido Mal de Nuestro Lado </p><img class=\"h6\" src=\"../imagenes/403.jpg\">" +
                            "</div></div></div></div>";
                    } else {
                        resp.cartelera.forEach((a) => {

                            contenido += "<div class=\"card bg-white\"><div class=\"row w-100 pt-2 pb-2\"><div class=\"col col-2\"><div class=\"d-flex w-100 justify-content-center\"><img id=\"thumbnail\" src=\"";

                            if (a.EVENTO.FOTO == "" || a.EVENTO.FOTO == "null" || a.EVENTO.FOTO == null) {
                                contenido += "../imagenes/poster-placeholder.png";
                            } else {
                                contenido += a.EVENTO.FOTO;
                            }

                            contenido += "\"></div></div><div class=\"col col-7 align-self-center\"><p class=\"h3\">" + a.EVENTO.NOMBRE + "</p><p class=\"h6\">" + a.SALA.NOMBRE + " - " + a.INICIO + "</p>" +
                                "</div><div class=\"col col-3 align-self-center\"><div class=\"d-flex w-100 pe-xl-5 justify-content-end\">" +
                                "<a id=\"filtrocartelera\" class=\"btn me-3\" href=\"../evento/?id=" + a.ID + "\" value=\"Ver Detalles\">Ver Detalles</a></div></div></div></div>";
                        });
                    }
                    document.getElementById("cartelera2").innerHTML = contenido;
                });
        }

        function addDays(date, days) {
            var result = new Date(date);
            result.setDate(result.getDate() + days);
            return result;
        }
    </script>
</head>

<body class="bg-black">
    <!-- Header -->
    <header class="w-100">
        <nav class="navbar navbar-expand-lg ps-lg-2 pe-lg-2 ps-xll-5 pe-xll-5">
            <div class="container-fluid">
                <a id="logos" class="navbar-brand me-auto me-lg-5" aria-current="page" href="">
                    <img id="logo" src="../identidad/CULTURA1White.png" class="img-fluid float-end w-auto" alt="logo">
                </a>
                <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="bi bi-list"></i></span>
                </button>
                <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#userSupportedContent" aria-controls="userSupportedContent" aria-expanded="false" aria-label="Toggle User">
                    <span><i class="bi bi-person-fill"></i></span>
                </button>
                <div class="collapse navbar-collapse ms-2" id="navbarSupportedContent">
                    <div class="container" id="navbar">
                        <form class="d-flex mt-3 w-100" role="search">
                            <input class="form-control me-2" type="search" placeholder="Buscar en Cartelera" aria-label="Buscar">
                            <button class="btn text-white" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                        <div class="container rounded" id="navbart">
                            <ul class="nav nav-pills nav-fill justify-content-center me-auto mt-3 mb-3 mb-lg-0">

                                <li class="nav-item m-0">
                                    <a class="nav-link align-middle text-white" href="{{ route('welcome') }}">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active align-middle text-white" href="#">Cartelera</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link align-middle text-white" href="{{ route('Publi.EstP') }}">Estacionamiento</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link align-middle text-white" href="{{ route('ubicacion') }}">Ubicación</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link align-middle text-white" href="{{ route('somos') }}">Quienes somos</a>
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
                                    <a class="nav-link align-middle text-white" href="{{ route('Usuarios.login') }}">Iniciar Sesion</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link align-middle  text-white" href="{{ route('Personas.create') }}">Registrarse</a>
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
                            <li><a class="dropdown-item" href="{{ route('Usuarios.login') }}">Iniciar Sesión</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{ route('Personas.create') }}">Registrarse</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Cabecera -->
    <section class="w-100">
        <div class="card bg-dark text-white w-100 z-0">
            <img src="../imagenes/cartelera.png" class="bg-img w-100" />
            <div class="card-img-overlay text-light justify-content-center flex-column text-center pt-0 pt-lg-5" style="background-color: rgba(0, 0, 0, 0.5)">
                <h2 class="fs-1 pt-4 pt-lg-1 pt-xxl-5"> Cartelera</h2>
            </div>
        </div>
    </section>
    <!-- Filtros -->
    <section>
        <div id="cartelera" class="row z-1 p-5">
            <div id="filtro" class="col rounded mb-4 col-12 col-lg-12 col-xxl-2">
                <div class="card">
                    <button id="filtrocartelera" class="btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="true" aria-controls="collapseExample">
                        Filtros <i class="bi bi-arrow-down-short"></i>
                    </button>
                    <div class="collapse show" id="collapseExample">
                        <div class="card card-body">
                            <div>
                                <span class="form-label fw-bold mt-2">Por Nombre del Evento</span>
                                <input class="form-control mt-2 mb-2" type="text" id="nombreevento" placeholder="Nombre del Evento">
                                <span class="form-label fw-bold mt-2">Por Fecha:</span><br>
                                <span class="form-label mt-2">Inicio</span>
                                <input class="form-control mt-2 mb-2" type="date" default="" id="fechain" placeholder="">
                                <span class="form-label mt-2">Fin</span>
                                <input class="form-control mt-2 mb-2" type="date" default="" id="fechaout" placeholder="">
                                <script>
                                    document.getElementById("fechain").valueAsDate = new Date();
                                    document.getElementById("fechaout").valueAsDate = addDays(document.getElementById("fechain").valueAsDate, 5);
                                </script>
                                <span class="form-label fw-bold mt-2">Categoria</span>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="checkC" value="C">
                                    <label class="form-check-label" for="radiocat"> Conciertos y Festivales </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="checkT" value="T">
                                    <label class="form-check-label" for="radiocat"> Teatro y Culturales </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="checkD" value="D">
                                    <label class="form-check-label" for="radiocat"> Deportivos </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="checkF" value="F">
                                    <label class="form-check-label" for="radiocat"> Familiares </label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" id="checkE" value="E">
                                    <label class="form-check-label" for="radiocat"> Especiales </label>
                                </div>
                                <div>
                                    <span class="form-label mt-2">Lugar del Evento</span>
                                    <select class="form-select mt-2" name="lugarevento" id="lugarevento">
                                        <option value="0">Selecciona un Lugar</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="d-grid mt-3 gap-2">
                                    <a class="btn btn-success">Aplicar Filtros</a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="filtro" class="col rounded col-12 col-lg-12 col-xxl-10 pe-0">
                <div class="card bg-white">
                    <p id="result" class="p-2">
                        Resultados de la Busqueda <i class="bi bi-arrow-down-short"></i>
                    </p>
                    <div id="cartelera2" class="w-100">
                        <!-- Resultado de Busqueda -->
                    </div>
                </div>
                <div class="card mt-3 bg-white">
                    <div class="row pt-2 pb-2">
                        <div class="col col-12">
                            <div class="d-flex w-100 justify-content-center">
                                <a class="btn btn-danger ms-2 me-2" onclick="invocaminus()">
                                    << /a>&nbsp;&nbsp;
                                        <a class="btn btn-danger ms-2 me-2" onclick="invocaplus()">></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pie de Pagina -->
    <footer>
        <div id="footerinoc" class="container-fluid">
            <div class="row justify-content-md-center pb-lg-5 pb-5 pt-5 m-0 text-white">

                <div class="d-flex col-lg-5 mt-5 justify-content-center">
                    <p div class="h7 text-center mt-5">Complejo Cultural Siglo XXI | Todos los derechos reservados © 2023
                    </p>
                </div>

                <div class="d-flex flex-column  ps-0 mt-sm-5 col-lg-3 align-middle">
                    <div class="row justify-content-center">
                        <p><span class="text-white ms-sm-5">Mapa del Sitio:</span></p>
                        <div class="col col-10 col-xxl-4 justify-content-center">
                            <p><a id="mapa" class="link-underline text-white link-underline-opacity-0 ms-sm-5" href="../"><i class="bi bi-arrow-right-circle-fill"></i> Inicio</a></p>
                            <p><a id="mapa" class="link-underline text-white link-underline-opacity-0 ms-sm-5" href="../cartelera/"><i class="bi bi-arrow-right-circle-fill"></i> Cartelera</a></p>
                            <p><a id="mapa" class="link-underline text-white link-underline-opacity-0 ms-sm-5" href="../estacionamiento/"><i class="bi bi-arrow-right-circle-fill"></i> Estacionamiento</a></p>
                            <p><a id="mapa" class="link-underline text-white link-underline-opacity-0 ms-sm-5" href="../ubicacion/"><i class="bi bi-arrow-right-circle-fill"></i> Ubicación</a></p>
                        </div>
                        <div class="col col-10 col-xxl-4 justify-content-center">
                            <p><a id="mapa" class="link-underline text-white link-underline-opacity-0 ms-xxl-0 ms-sm-5" href="../somos/"><i class="bi bi-arrow-right-circle-fill"></i> Quienes Somos</a></p>
                            <p><a id="mapa" class="link-underline text-white link-underline-opacity-0 ms-xxl-0 ms-sm-5" href="../somos/#legal"><i class="bi bi-arrow-return-right"></i> Politica de Privacidad</a></p>
                            <p><a id="mapa" class="link-underline text-white link-underline-opacity-0 ms-xxl-0 ms-sm-5" href="../somos/#legal"><i class="bi bi-arrow-return-right"></i> Aviso Legal</a></p>
                        </div>
                    </div>
                </div>

                <div class="d-flex mt-5 col-lg-3 justify-content-center">
                    <a class="ms-2 mt-5 me-3" href="https://www.facebook.com/CCUBUAP/?locale=es_LA" style="text-decoration:none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                        </svg>
                    </a>
                    <a class="ms-2 mt-5 me-3" href="https://www.facebook.com/CCUBUAP/?locale=es_LA" style="text-decoration:none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                    </a>
                    <a class="ms-2 mt-5 me-3" href="https://twitter.com/i/flow/login?redirect_after_login=%2Fccubuap%3Flang%3Des" style="text-decoration:none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                        </svg>
                    </a>
                    <a class="ms-2 mt-5 me-3" href="https://www.youtube.com/watch?v=QWm4wYidIoY" style="text-decoration:none">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-youtube" viewBox="0 0 16 16">
                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                        </svg>
                    </a>
                </div>

            </div>
        </div>
    </footer>
</body>

</html>