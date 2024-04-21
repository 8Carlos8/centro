<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Estacionamiento</title>
    <link rel="icon" type="image/x-icon" href="../../../imagenes/CULTURA1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="background-image: url(../../../imagenes/teatro.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <div class="container py-2 w-50 justify-content-center">
        <div class="card">
            <h2 class="mt-4 text-black ms-5">Actualizar Estacionamiento</h2>

            <form action="{{ route('Estacionamientos.update', $estacionamiento->id) }}" method="POST">
                @csrf
                @method('PUT')
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <label for="id_cajonIni" class="form-label text-gray-700">ID del Cajón inicio</label>
                            </td>
                            <td>
                                <select class="form-select" id="id_cajonIni" name="cajon_inicio">
                                    <option value="">Seleccionar Cajon</option>
                                    @foreach($cajones as $cajon)
                                    <option value="{{ $cajon->id }}" @if($cajon->id == $estacionamiento->cajon_inicio) selected @endif>Zona: {{ $cajon->zona }} - Cajón: {{ $cajon->cajon }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="id_cajonFin" class="form-label text-gray-700">ID del Cajón final</label>
                            </td>
                            <td>
                                <select class="form-select" id="id_cajonFin" name="cajon_fin">
                                    <option value="">Seleccionar Cajon</option>
                                    @foreach($cajones as $cajon)
                                    <option value="{{ $cajon->id }}" @if($cajon->id == $estacionamiento->cajon_fin) selected @endif>Zona: {{ $cajon->zona }} - Cajón: {{ $cajon->cajon }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="entrada" class="form-label text-gray-700">Entrada</label>
                            </td>
                            <td>
                                <input type="date" class="form-control @error('entrada') is-invalid @enderror" id="entrada" name="entrada" value="{{ $estacionamiento->entrada }}" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="salida" class="form-label text-gray-700">Salida</label>
                            </td>
                            <td>
                                <input type="date" class="form-control @error('salida') is-invalid @enderror" id="salida" name="salida" value="{{ $estacionamiento->salida }}" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="estado" class="form-label text-gray-700">Estado</label>
                            </td>
                            <td>
                                <input type="text" class="form-control @error('estado') is-invalid @enderror" id="estado" name="estado" placeholder="Estado del Estacionamiento" value="{{ $estacionamiento->estado }}" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="submit" class="btn btn-success"><i class="bi bi-save-fill"></i>&nbsp;Editar</button>
                                <a href="{{ route('Estacionamientos.index') }}" class="btn btn-danger ms-2 text-end"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</body>

</html>