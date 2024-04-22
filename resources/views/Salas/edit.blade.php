<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CC Siglo XXI - Editar sala</title>
    <link rel="icon" type="image/x-icon" href="../../../imagenes/CULTURA1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="background-image: url(../../../imagenes/teatro.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

    <div class="container py-2 w-50 justify-content-center">
        <div class="card">
            <h2 class="mt-4 text-black ms-5">Editar Sala</h2>

            <form action="{{ route('Salas.update', $sala->id) }}" method="POST">
                @csrf
                @method('PUT')
                <table class="table mt-4">
                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="estado">Estado</label>
                        </td>
                        <td class="control-label ms-2">
                            <select class="form-select" id="estado" name="estado">
                                <option value="">Seleccionar Estado</option>
                                <option value="1" {{ $sala->estado == 1 ? 'selected' : '' }}>Activo</option>
                                <option value="2" {{ $sala->estado == 2 ? 'selected' : '' }}>Deshabilitado</option>
                            </select>
                        </td>
                    </tr>


                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="razonSoc">Nombre</label>
                        </td>
                        <td class="control-label ms-2">
                            <input type="text" id="nombre" name="nombre" placeholder="Nombre de la Sala" class="form-input" value="{{ $sala->nombre }}">
                        </td>
                    </tr>

                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="direccion">Asientos</label>
                        </td>
                        <td class="control-label ms-2">
                            <input type="text" id="asientos" name="asientos" placeholder="Asientos que hay en la Sala" class="form-input" value="{{ $sala->asientos }}">
                        </td>
                    </tr>

                    <tr>
                        <td class="mb-4">
                            <button type="submit" class="btn btn-success"><i class="bi bi-save-fill"></i>&nbsp;Editar</button>
                            <a href="{{ route('Salas.index') }}" class="btn btn-danger ms-2 text-end"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>