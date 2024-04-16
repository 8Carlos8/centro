<head>
    <title>CC Siglo XXI - Agregar Evento</title>
    <link rel="icon" type="image/x-icon" href="../../../imagenes/CULTURA1.png">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</head>

<body style="background-image: url(../../../imagenes/teatro.jpg);background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
    <div class="container py-2 w-50 justify-content-center">
        <div class="card">
            <h2 class="mt-4 text-black ms-5">Crear nuevo Evento</h2>

            <form name="frmInsProd" action="{{ route('Eventos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table class="table mt-4">
                    <tbody>
                        <tr>
                            <td>
                                <label class="control-label ms-2" for="id_persona">ID Organizador</label>
                                <select class="form-select" id="id_persona" name="id_organizador">
                                    <option value="">Seleccionar Organizador</option>
                                    @foreach($organizadores as $organizador)
                                    <option value="{{ $organizador->id }}">{{ $organizador->id }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="control-label ms-2" for="id_persona">ID Estacinamiento</label>
                                <select class="form-select" id="id_estacionamiento" name="id_estacionamiento">
                                    <option value="">Seleccionar Estacinamiento</option>
                                    @foreach($estacionamientos as $estacionamiento)
                                    <option value="{{ $estacionamiento->id }}">{{ $estacionamiento->id }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="control-label ms-2" for="nombre">Nombre</label>
                                <input type="text" id="nombre" name="nombre" placeholder="Nombre del evento"
                                    class="form-input">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="control-label ms-2" for="tipo">Tipo</label>
                                <input type="text" id="tipo" name="tipo" placeholder="Tipo de Evento"
                                    class="form-input">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="control-label ms-2" for="duracion">Duracion</label>
                                <input type="date" id="duracion" name="duracion" class="form-input">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="control-label ms-2" for="poster">Poster</label>
                                <input type="file" id="poster" name="poster" class="form-input">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label class="control-label ms-2" for="banner">Banner</label>
                                <input type="file" id="banner" name="banner" class="form-input">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" class="btn btn-success"><i class="bi bi-save-fill"></i>&nbsp;Crear Evento</button>
                                <a href="{{ route('Eventos.index') }}" class="btn btn-danger ms-2 text-end"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</body>