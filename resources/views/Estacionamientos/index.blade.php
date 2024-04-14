<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Estacionamiento</h1>

    <div class="mb-4">
        @auth
        @if (auth()->user()->rol == 1)
        <a href="{{ route('Estacionamientos.create') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Crear nueva zona</a>
        <a href="{{ route('Cajones.create') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Crear nuevo cajon</a>
        <a href="{{ route('Estacionamientos.reporte') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Reportes</a>
        @endif
        @else
        <!-- Esto se mostrará si no hay una sesión activa -->
        <p>Por favor, inicia sesión para acceder a esta página.</p>
        @endauth
        <a href="{{ route('Personas.inicio') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg">Regresar al Panel</a>
    </div>

    <table class="table-auto w-full border-collapse border-gray-200">
        <thead>
            <tr>
                <th class="border-gray-300 px-4 py-2 text-gray-700">ID</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">ID Cajon de Inicio</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">ID Cajon de Fin</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Entrada</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Salida</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Estado</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estacionamientos as $estacionamiento)
            <tr>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $estacionamiento->id }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $estacionamiento->id_cajonIni }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $estacionamiento->id_cajonFin }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $estacionamiento->entrada }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $estacionamiento->salida }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $estacionamiento->estado }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">
                    <a href="{{ route('Estacionamientos.show', $estacionamiento->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded-lg">Visualizar</a>
                    @auth
                    @if (auth()->user()->rol == 1)
                    <a href="{{ route('Estacionamientos.edit', $estacionamiento->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded-lg">Editar</a>
                    <form action="{{ route('Estacionamientos.destroy', $estacionamiento) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-lg">Eliminar</button>
                    </form>
                    @endif
                    @else
                    <!-- Esto se mostrará si no hay una sesión activa -->
                    <p>Por favor, inicia sesión para acceder a esta página.</p>
                    @endauth
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>