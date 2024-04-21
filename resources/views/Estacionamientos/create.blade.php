<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CC Siglo XXI - Agregar Estacionamiento</title>
    <link rel="icon" type="image/x-icon" href="../../../imagenes/CULTURA1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="background-image: url(../../../imagenes/teatro.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">
    <div class="container py-2 w-50 justify-content-center">
        <div class="card">
            <h2 class="mt-4 text-black ms-5">Crear Estacionamiento</h2>
            <form action="{{ route('Estacionamientos.store') }}" method="POST">
                @csrf
                <table class="table mt-4">
                    <tr>
                        <td class="control-label ms-2">
                            <label for="cajon_inicio" class="form-label text-gray-700">ID del Cajón inicio</label>
                        </td>
                        <td class="control-label ms-2">
                            <select class="form-select" id="cajon_inicio" name="cajon_inicio">
                                <option value="">Seleccionar Cajón de Inicio</option>
                                @foreach($cajones as $cajon)
                                <option value="{{ $cajon->id }}">Zona: {{ $cajon->zona }} - Cajón: {{ $cajon->cajon }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="control-label ms-2">
                            <label for="cajon_fin" class="form-label text-gray-700">ID del Cajón final</label>
                        </td>
                        <td class="control-label ms-2">
                            <select class="form-select" id="cajon_fin" name="cajon_fin">
                                <option value="">Seleccionar Cajón Final</option>
                                @foreach($cajones as $cajon)
                                <option value="{{ $cajon->id }}">Zona: {{ $cajon->zona }} - Cajón: {{ $cajon->cajon }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="control-label ms-2">
                            <label for="entrada" class="form-label text-gray-700">Entrada</label>
                        </td>
                        <td class="control-label ms-2">
                            <input type="date" class="form-control @error('entrada') is-invalid @enderror" id="entrada" name="entrada" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="control-label ms-2">
                            <label for="salida" class="form-label text-gray-700">Salida</label>
                        </td>
                        <td class="control-label ms-2">
                            <input type="date" class="form-control @error('salida') is-invalid @enderror" id="salida" name="salida" required>
                        </td>
                    </tr>
                    <tr>
                        <td class="control-label ms-2">
                            <label for="estado" class="form-label text-gray-700">Estado</label>
                        </td>
                        <td class="control-label ms-2">
                            <input type="text" class="form-control @error('estado') is-invalid @enderror" id="estado" name="estado" placeholder="Estado del Estacionamiento" required>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="control-label ms-2">
                            <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Crear Estacionamiento</button>
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </div>
</body>

</html>