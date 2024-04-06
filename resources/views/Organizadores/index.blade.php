<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Organizadores</h1>

    <div class="mb-4">
        <a href="{{ route('Organizadores.create') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Crear nuevo organizador</a>
        <a href="{{ route('Personas.inicio') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg">Regresar al Panel</a>
    </div>

    <table class="table-auto w-full border-collapse border-gray-200">
        <thead>
            <tr>
                <th class="border-gray-300 px-4 py-2 text-gray-700">ID</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">ID Persona</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Estado</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Razon Social</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Direccion</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($organizadores as $organizador)
            <tr>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $organizador->id }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $organizador->id_persona }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $organizador->estado }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $organizador->razonSoc }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $organizador->direccion }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">
                    <a href="{{ route('Organizadores.edit', $organizador->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded-lg">Editar</a>
                    <a href="{{ route('Organizadores.show', $organizador->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded-lg">Visualizar</a>
                    <form action="{{ route('Organizadores.destroy', $organizador->id) }}" method="POST" class="inline-block">
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