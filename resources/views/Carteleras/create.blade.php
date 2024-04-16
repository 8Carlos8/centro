<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CC Siglo XXI - Agregar Cajones</title>
    <link rel="icon" type="image/x-icon" href="../../../imagenes/CULTURA1.png">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body style="background-image: url(../../../imagenes/teatro.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <div class="container py-2 w-50 justify-content-center">
        <div class="card">
            <h2 class="mt-4 text-black ms-5">Crear nueva Cartelera</h2>

            <form action="{{ route('Carteleras.store') }}" method="POST">
                @csrf
                <table class="table mt-4">
                    <tr>
                        <td class="mb-4">
                            <label class="control-label ms-2" for="id_evento">ID Evento</label>
                            <select class="form-select" id="id_evento" name="id_evento">
                                <option value="">Seleccionar Evento</option>
                                @foreach($eventos as $evento)
                                <option value="{{ $evento->id }}">{{ $evento->nombre }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="mb-4">
                            <label class="control-label ms-2" for="id_sala">ID Sala</label>
                            <select class="form-select" id="id_sala" name="id_sala">
                                <option value="">Seleccionar Sala</option>
                                @foreach($salas as $sala)
                                <option value="{{ $sala->id }}">{{ $sala->nombre }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="mb-4">
                            <label class="control-label ms-2" for="estado">Estado</label>
                            <input type="text" id="estado" name="estado" placeholder="Estado de la Cartelera" class="form-input">
                        </td>
                    </tr>
                    <tr>
                        <td class="mb-4">
                            <label class="control-label ms-2" for="inicio">Inicio</label>
                            <input type="date" id="inicio" name="inicio" class="form-input">
                        </td>
                    </tr>
                    <tr>
                        <td class="mb-4">
                            <label class="control-label ms-2" for="fin">Fin</label>
                            <input type="date" id="fin" name="fin" class="form-input">
                        </td>
                    </tr>
                    <tr>
                        <td class="mb-4">
                            <label class="control-label ms-2" for="lugares">Lugares</label>
                            <input type="number" id="lugares" name="lugares" class="form-input">
                        </td>
                    </tr>
                    <tr>
                        <td class="mb-4">
                            <button type="submit" class="btn btn-success"><i class="bi bi-save-fill"></i>&nbsp;Crear Cartelera</button>
                            <a href="{{ route('Carteleras.index') }}" class="btn btn-danger ms-2 text-end"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
