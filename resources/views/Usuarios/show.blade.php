<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/CULTURA1.png') }}">
    <title>CC Siglo XXI - Vizualizar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body style="background-image: url('{{ asset('imagenes/teatro.jpg') }}'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

<div class="container w-50 py-2 justify-content-center">
    <div class="card mt-4">
        <div class="form-group mt-2 mb-2">
            <h2 class="mt-4 ms-3 text-black">Detalles del Usuario</h2>
        </div>
        <table class="table">
            <tbody>
                <tr>
                    <td class="control-label fw-bold">ID del Usuario</td>
                    <td>{{ $usuario->id }}</td>
                </tr>
                <tr>
                    <td class="control-label fw-bold">Username</td>
                    <td>{{ $usuario->username }}</td>
                </tr>
                <tr>
                    <td class="control-label fw-bold">Correo</td>
                    <td>{{ $usuario->correo }}</td>
                </tr>
                <tr>
                    <td class="control-label fw-bold">Rol</td>
                    <td>{{ $usuario->Rol }}</td>
                </tr>
                <tr>
                    <td class="control-label fw-bold">Estado</td>
                    <td>{{ $usuario->estado }}</td>
                </tr>
            </tbody>
        </table>
        <div class="mb-4 text-end">
            <a href="{{ route('Usuarios.index') }}" class="btn btn-danger ms-2"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar al listado</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
