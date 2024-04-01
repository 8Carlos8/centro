<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Eventos</h1>

    <div class="mb-4">
        <a href="{{ route('Eventos.create') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Crear nuevo evento</a>
    </div>

    <table class="table-auto w-full border-collapse border-gray-200">
        <thead>
            <tr>
                <th class="border-gray-300 px-4 py-2 text-gray-700">ID</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">ID Organizador</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Nombre</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Tipo</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Duracion</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Foto</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eventos as $evento)
            <tr>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $evento->id }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $evento->id_organizador }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $evento->nombre }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $evento->tipo }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $evento->duracion }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $evento->foto }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">
                    <a href="{{ route('Eventos.edit', $evento->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded-lg">Editar</a>
                    <a href="{{ route('Eventos.show', $evento->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded-lg">Visualizar</a>
                    <form action="{{ route('Eventos.destroy', $evento) }}" method="POST" class="inline-block">
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