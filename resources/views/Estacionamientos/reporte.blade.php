<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Estacionamiento</title>
</head>

<body>
    <h1>Reporte de Estacionamiento</h1>

    <a href="{{ route('Estacionamientos.index') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Regresar al Listado</a>
    <a href="{{ route('Personas.inicio') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg">Regresar al Panel</a>

    <form action="{{ route('Estacionamientos.reporte') }}" method="GET">
        <label for="fecha">Seleccionar Fecha:</label>
        <input type="date" id="fecha" name="fecha">
        <button type="submit">Generar Reporte</button>
    </form>

    <h2>Resumen</h2>
    <p>Total de cajones: {{ $totalCajones }}</p>
    <p>Cajones ocupados: {{ $cajonesOcupados }}</p>
    <p>Cajones reservados: {{ $cajonesReservados }}</p>
    <p>Porcentaje de disponibilidad: {{ $porcentajeDisponibilidad }}%</p>

    @isset($cajonMasUtilizadoInfo)
    <p>Cajón más utilizado: Zona {{ $cajonMasUtilizadoInfo->zona }}, Cajón {{ $cajonMasUtilizadoInfo->cajon }}</p>
    @endisset



</body>

</html>