<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/CULTURA1.png') }}">
    <title>CC Siglo XXI - Visualizar Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body style="background-image: url('{{ asset('imagenes/teatro.jpg') }}'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

<div class="container w-50 py-2 justify-content-center">
    <div class="card mt-4">
        <div class="form-group mt-2 mb-2">
            <h2 class="mt-4 ms-3 text-black">Detalles del Evento</h2>
        </div> 

        <table class="table">
            <tbody>
                <tr>
                    <td>
                        <label for="id_evento" class="control-label fw-bold text-gray-700">ID del evento</label>
                    </td>
                    <td>{{ $evento->id }}</td>
                </tr>
                <tr>
                    <td>
                        <label for="id_organizador" class="control-label fw-bold text-gray-700">ID del Organizador</label>
                    </td>
                    <td>{{ $evento->id_organizador }}</td>
                </tr>
                <tr>
                    <td>
                        <label for="id_estacionamiento" class="control-label fw-bold text-gray-700">ID del Estacionamiento</label>
                    </td>
                    <td>{{ $evento->id_estacionamiento }}</td>
                </tr>
                <tr>
                    <td>
                        <label for="nombre" class="control-label fw-bold text-gray-700">Nombre del evento</label>
                    </td>
                    <td>{{ $evento->nombre }}</td>
                </tr>
                <tr>
                    <td>
                        <label for="tipo" class="control-label fw-bold text-gray-700">Tipo de evento</label>
                    </td>
                    <td>{{ $evento->tipo }}</td>
                </tr>
                <tr>
                    <td>
                        <label for="duracion" class="control-label fw-bold text-gray-700">Duracion del Evento</label>
                    </td>
                    <td>{{ $evento->duracion }}</td>
                </tr>
                <tr>
                    <td>
                        <label for="poster" class="control-label fw-bold text-gray-700">Poster del Evento</label>
                    </td>
                    <td>{{ $evento->poster }}</td>
                </tr>
                <tr>
                    <td>
                        <label for="banner" class="control-label fw-bold text-gray-700">Banner del Evento</label>
                    </td>
                    <td>{{ $evento->banner }}</td>
                </tr>
            </tbody>
        </table>
        <div class="mb-4 text-end">
            <a href="{{ route('Eventos.index') }}" class="btn btn-danger ms-2"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar al listado</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
