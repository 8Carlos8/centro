    <div class="container mx-auto py-4">
        <h1 class="text-3xl font-bold mb-4 text-gray-900">Detalle del Cajon</h1>

        <div class="mb-4">
            <a href="{{ route('Cajones.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg">Regresar al listado</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="id" class="form-label text-gray-700">ID del Cajon</label>
                <p>{{ $cajon->id }}</p>
            </div>
            <div>
                <label for="zona" class="form-label text-gray-700">Zona del Cajon</label>
                <p>{{ $cajon->zona }}</p>
            </div>
            <div>
                <label for="cajon" class="form-label text-gray-700">Cajon</label>
                <p>{{ $cajon->cajon }}</p>
            </div>
            <div>
                <label for="estado" class="form-label text-gray-700">Estado del Cajon</label>
                <p>{{ $cajon->estado }}</p>
            </div>
        </div>
    </div>