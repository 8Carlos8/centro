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

            @if (session('status'))
            <div class="bg-green-500 text-white p-4 mb-4 rounded-lg">
                {{ session('status') }}
            </div>
            @endif

            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <label for="id" class="control-label fw-bold text-gray-700">ID del Estacionamiento</label>
                            <p>{{ $estacionamiento->id }}</p>
                        </td>
                        <td>
                            <label for="cajones" class="control-label fw-bold text-gray-700">ID Cajones</label>
                            <p>@php
                                // Decodificar el campo cajones del modelo Estacionamiento
                                $cajones = json_decode($estacionamiento->cajones);

                                // Verificar si $cajones es un array y no está vacío
                                if (is_array($cajones) && count($cajones) > 0) {
                                // Crear un array para almacenar los IDs de los cajones
                                $cajonesIds = [];

                                // Iterar sobre cada cajón y obtener su ID
                                foreach ($cajones as $cajon) {
                                // Verificar si el elemento actual es un objeto con una propiedad 'id'
                                if (is_object($cajon) && isset($cajon->id)) {
                                // Agregar el ID del cajón al array
                                $cajonesIds[] = $cajon->id;
                                }
                                }

                                // Imprimir los IDs de los cajones separados por coma
                                echo implode(', ', $cajonesIds);
                                } else {
                                // Si $cajones no es un array o está vacío, imprimir un mensaje
                                echo "No hay cajones disponibles.";
                                }
                                @endphp</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="entrada" class="control-label fw-bold text-gray-700">Entrada</label>
                            <p>{{ $estacionamiento->entrada }}</p>
                        </td>
                        <td>
                            <label for="salida" class="control-label fw-bold text-gray-700">Salida</label>
                            <p>{{ $estacionamiento->salida }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="estado" class="control-label fw-bold text-gray-700">Estado</label>
                            @if($estacionamiento->estado == 1)
                            <p style="color: green;">Disponible</p>
                            @else
                            <p style="color: red;">Rojo</p>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="mb-4 text-end">
                <a href="{{ route('Estacionamientos.index') }}" class="btn btn-danger ms-2"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar al listado</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>