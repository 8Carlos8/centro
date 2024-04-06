<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Boletos</h1>

    <div class="mb-4">
        <a href="{{ route('Boletos.create') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Obtener Boletos</a>
        <a href="{{ route('Personas.inicio') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg">Regresar al Panel</a>
    </div>

    <table class="table-auto w-full border-collapse border-gray-200">
        <thead>
            <tr>
                <th class="border-gray-300 px-4 py-2 text-gray-700">ID</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">ID Usuario</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">ID Cartelera</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Numero de boletos</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($boletos as $boleto)
            <tr>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $boleto->id }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $boleto->id_usuario }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $boleto->id_cartelera }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $boleto->noBoletos }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">
                    <a href="{{ route('Boletos.edit', $boleto->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded-lg">Editar</a>
                    <a href="{{ route('Boletos.show', $boleto->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded-lg">Visualizar</a>
                    <form action="{{ route('Boletos.destroy', $boleto) }}" method="POST" class="inline-block">
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