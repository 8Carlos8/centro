<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/CULTURA1.png') }}">
    <title>CC Siglo XXI - Visualizar Organizador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body style="background-image: url('{{ asset('imagenes/teatro.jpg') }}'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

<div class="container w-50 py-2 justify-content-center">
    <div class="card mt-4">
        <div class="form-group mt-2 mb-2">
            <h2 class="mt-4 ms-3 text-black">Detalles del Organizador</h2>
        </div> 

        <table class="table">
            <tbody>
                <tr>
                    <td>
                        <label for="id_organizador" class=" control-label fw-bold">ID del Organizador</label>
                    </td>
                    <td>{{ $organizador->id }}</td>
                </tr>
                <tr>
                    <td>
                        <label for="id_persona" class=" control-label fw-bold">ID de Personas</label>
                    </td>
                    <td>{{ $organizador->id_persona }}</td>
                </tr>
                <tr>
                    <td>
                        <label for="estado" class=" control-label fw-bold">Estado</label>
                    </td>
                    <td>{{ $organizador->estado }}</td>
                </tr>
                <tr>
                    <td>
                        <label for="razonSoc" class=" control-label fw-bold">Razon Social</label>
                    </td>
                    <td>{{ $organizador->razonSoc }}</td>
                </tr>
                <tr>
                    <td>
                        <label for="direccion" class=" control-label fw-bold">Direccion</label>
                    </td>
                    <td>{{ $organizador->direccion }}</td>
                </tr>
            </tbody>
        </table>
        <div class="mb-4 text-end">
            <a href="{{ route('Organizadores.index') }}" class="btn btn-danger ms-2"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar al listado</a>
        </div>
    </div>
</div>
</body>
</html>
