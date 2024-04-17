<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CC Siglo XXI - Editar Evento</title>
    <link rel="icon" type="image/x-icon" href="../../../imagenes/CULTURA1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body style="background-image: url(../../../imagenes/teatro.jpg);background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <div class="container py-2 w-50 justify-content-center">
        <div class="card">
            <h2 class="mt-4 text-black ms-5">Crear nuevo Evento</h2>

            <form action="{{ route('Eventos.update', $evento->id) }}" method="POST">
                @csrf
                @method('PUT')
                <table class="table mt-4">
                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_persona">ID Organizador</label>
                        </td>
                        <td class="control-label ms-2">
                            <select class="form-select" id="id_persona" name="id_organizador">
                                <option value="">Seleccionar Organizador</option>
                                @foreach($organizadores as $organizador)
                                    <option value="{{ $organizador->id }}">{{ $organizador->id }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_persona">ID Estacionamiento</label>
                        </td>
                        <td class="control-label ms-2">
                            <select class="form-select" id="id_estacionamiento" name="id_estacionamiento">
                                <option value="">Seleccionar Estacinamiento</option>
                                @foreach($estacionamientos as $estacionamiento)
                                    <option value="{{ $estacionamiento->id }}">{{ $estacionamiento->id }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre</label>
                        </td>
                        <td class="control-label ms-2">
                            <input type="text" id="nombre" name="nombre" placeholder="Nombre del evento" class="form-input" value="{{ $evento->nombre }}">
                        </td>
                    </tr>

                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="tipo">Tipo</label>
                        </td>
                        <td class="control-label ms-2">
                            <input type="text" id="tipo" name="tipo" placeholder="Tipo de Evento" class="form-input" value="{{ $evento->tipo }}">
                        </td>
                    </tr>

                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="duracion">Duracion</label>
                        </td>
                        <td class="control-label ms-2">
                            <input type="date" id="duracion" name="duracion" class="form-input" value="{{ $evento->duracion }}">
                        </td>
                    </tr>

                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="poster">Poster</label>
                        </td>
                        <td class="control-label ms-2">
                            <input type="file" id="poster" name="poster" class="form-input" value="{{ $evento->poster }}">
                        </td>
                    </tr>

                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="banner">Banner</label>
                        </td>
                        <td class="control-label ms-2">
                            <input type="file" id="banner" name="banner" class="form-input" value="{{ $evento->banner }}">
                        </td>
                    </tr>

                    <tr>
                            <td>
                                <button type="submit" class="btn btn-success"><i class="bi bi-save-fill"></i>&nbsp;Evento</button>
                                <a href="{{ route('Eventos.index') }}" class="btn btn-danger ms-2 text-end"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar</a>
                            </td>
                        </tr>
                </table>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
