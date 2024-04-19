<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/CULTURA1.png') }}">
    <title>CC Siglo XXI - Visualizar Cajón</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body style="background-image: url('{{ asset('imagenes/teatro.jpg') }}'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

<div class="container py-2 justify-content-center">
    <div class="card mt-4">
        <div class="form-group mt-2 mb-2">
            <h2 class="mt-4 ms-3 text-black">Detalles del Cajón</h2>
        </div> 

        <div class="mb-4">
            <a href="{{ route('Cajones.index') }}" class="btn btn-danger ms-2"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar al listado</a>
        </div>

        <table class="table">
            <tbody>
                <tr>
                    <td>
                        <label for="id" class="control-label fw-bold">ID del Cajón</label>
                        <p>{{ $cajon->id }}</p>
                    </td>
                    <td>
                        <label for="zona" class="control-label fw-bold">Zona del Cajón</label>
                        <p>{{ $cajon->zona }}</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="cajon" class="control-label fw-bold">Cajón</label>
                        <p>{{ $cajon->cajon }}</p>
                    </td>
                    <td>
                        <label for="estado" class="control-label fw-bold">Estado del Cajón</label>
                        @if($cajon->estado == 1)
                            <p style="color: green;">Disponible</p>
                        @else
                            <p style="color: red;">Ocupado</p>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
