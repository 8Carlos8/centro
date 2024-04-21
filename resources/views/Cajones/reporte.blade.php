<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('imagenes/CULTURA1.png') }}">
    <title>CC Siglo XXI - Visualizar Reportes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="background-image: url('{{ asset('imagenes/teatro.jpg') }}'); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">

    <div class="container w-50 py-2 justify-content-center">
        <div class="card mt-4">
            <div class="form-group mt-2 mb-2">
                <h2 class="mt-4 ms-3 text-black">Detalles de Reportes</h2>
            </div>

            <div class="mb-4 ">
                <a href="{{ route('Estacionamientos.index') }}" class="btn btn-danger ms-2"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar al Listado</a>
                <a href="{{ route('Personas.index') }}" class="btn btn-danger ms-2 text-end"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar al panel</a>
            </div>

        </div>
    </div>
    <div class="container w-50 py-2 justify-content-center">
        <div class="card mt-4">
            <div class="bg-gray-100 p-4 rounded-lg mb-4">
                <h2 class="mt-4 ms-3 text-black">Resumen</h2>
                <p>Total de Cajones: {{ $totalCajones }}</p>
                <p>Cajones Disponibles: {{ $cajonD }}</p>
                <p>Cajones Ocupados: {{ $cajonesOcupados  }}</p>
                <p>Cajones Reservados: {{ $cajonesReservados  }}</p>
                <p>Porcentaje de disponibilidad: {{ $porcentajeDisponibilidad }}%</p>

                @isset($reporteMasUtilizadoInfo)
                <p>Reporte más utilizado: Zona {{ $reporteMasUtilizadoInfo->zona }}, Reporte {{ $reporteMasUtilizadoInfo->reporte }}</p>
                @endisset
            </div>
        </div>
    </div>
</body>

</html>