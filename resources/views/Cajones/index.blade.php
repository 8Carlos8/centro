<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Cajones</h1>

    <div class="mb-4">
        <a href="{{ route('Cajones.create') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Crear nuevo Cajon</a>
    </div>

    <table class="table-auto w-full border-collapse border-gray-200">
        <thead>
            <tr>
                <th class="border-gray-300 px-4 py-2 text-gray-700">ID</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Zona</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Cajon</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Estado</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cajones as $cajon)
            <tr>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $cajon->id }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $cajon->zona }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $cajon->cajon }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $cajon->estado }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">
                    <a href="{{ route('Cajones.edit', $cajon) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded-lg">Editar</a>
                    <a href="{{ route('Cajones.show', $cajon) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded-lg">Visualizar</a>
                    <form action="{{ route('Cajones.destroy', $cajon) }}" method="POST" class="inline-block">
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