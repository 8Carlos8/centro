<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Salas</h1>

    <div class="mb-4">
        <a href="{{ route('Salas.create') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Crear nueva Sala</a>
    </div>

    <table class="table-auto w-full border-collapse border-gray-200">
        <thead>
            <tr>
                <th class="border-gray-300 px-4 py-2 text-gray-700">ID</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Estado</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Nombre</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Asientos</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($salas as $sala)
            <tr>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $evento->id }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $evento->estado }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $evento->nombre }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $evento->asientos }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">
                    <a href="{{ route('eventos.edit', $evento) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded-lg">Editar</a>
                    <form action="{{ route('eventos.destroy', $evento) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-lg">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>