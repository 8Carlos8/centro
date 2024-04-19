<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/CULTURA1.png') }}">
    <title>CC Siglo XXI - Visualizar Persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body style="background-image: url('{{ asset('imagenes/teatro.jpg') }}'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

<div class="container w-50 py-2 justify-content-center">
    <div class="card mt-4">
        <div class="form-group mt-2 mb-2">
            <h2 class="mt-4 ms-3 text-black">Detalles de la Persona</h2>
        </div>

        
        <table class="table">
            <tbody>
                <tr>
                    <td class="control-label fw-bold">ID de la Persona</td>
                    <td>{{ $persona->id }}</td>
                </tr>
                <tr>
                    <td class="control-label fw-bold">Nombre</td>
                    <td>{{ $persona->nombre }}</td>
                </tr>
                <tr>
                    <td class="control-label fw-bold">Apellido Paterno</td>
                    <td>{{ $persona->a_paterno }}</td>
                </tr>
                <tr>
                    <td class="control-label fw-bold">Apellido Materno</td>
                    <td>{{ $persona->a_materno }}</td>
                </tr>
                <tr>
                    <td class="control-label fw-bold">Fecha de Nacimiento</td>
                    <td>{{ $persona->fecha_nac }}</td>
                </tr>
                <tr>
                    <td class="control-label fw-bold">Teléfono</td>
                    <td>{{ $persona->telefono }}</td>
                </tr>
            </tbody>
        </table>
        <div class="mb-4 text-end">
            <a href="{{ route('Personas.index') }}" class="btn btn-danger ms-2"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar al listado</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
