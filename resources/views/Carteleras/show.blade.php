<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/CULTURA1.png') }}">
    <title>CC Siglo XXI - Visualizar Carteleras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="background-image: url('{{ asset('imagenes/teatro.jpg') }}'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

    <div class="container w-50 py-2 justify-content-center">
        <div class="card mt-4">
            <div class="form-group mt-2 mb-2">
                <h2 class="mt-4 ms-3 text-black">Detalles de la Cartelera</h2>
            </div>

            @if (session('status'))
            <tr>
                <td colspan="2">
                    <div class="bg-green-500 text-white p-4 mb-4 rounded-lg">
                        {{ session('status') }}
                    </div>
                </td>
            </tr>
            @endif

            <div class="mb-4">
                <a href="{{ route('Carteleras.index') }}" class="btn btn-danger ms-2"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar al listado</a>
            </div>

            <table>
                <tbody>
                    <tr>
                        <td>
                            <label for="id" class="control-label fw-bold">ID de la Cartelera</label>
                        </td>
                        <td>{{ $cartelera->id }}</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="id_evento" class="control-label fw-bold">ID del Evento</label>
                        </td>
                        <td>{{ $cartelera->id_evento }}</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="id_sala" class="control-label fw-bold">ID de la sala</label>
                        </td>
                        <td>{{ $cartelera->id_sala }}</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="estado" class="control-label fw-bold">Estado del evento</label>
                        </td>
                        <td>
                            @if($cartelera->estado == 1)
                            <span style="color: green;">Activo</span>
                            @else
                            <span style="color: red;">Deshabilitado</span>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="inicio" class="control-label fw-bold">Fecha de inicio</label>
                        </td>
                        <td>{{ $cartelera->inicio }}</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="fin" class="control-label fw-bold">Fecha de finalización</label>
                        </td>
                        <td>{{ $cartelera->fin }}</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="lugares" class="control-label fw-bold">Lugares</label>
                        </td>
                        <td>{{ $cartelera->lugares }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>

</html>