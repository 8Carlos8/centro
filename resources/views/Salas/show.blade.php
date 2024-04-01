<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Detalle de la Sala</h1>

    <div class="mb-4">
        <a href="{{ route('Salas.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg">Regresar al listado</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="id" class="form-label text-gray-700">ID de la Sala</label>
            <p>{{ $sala->id }}</p>
        </div>
        <div>
            <label for="estado" class="form-label text-gray-700">Estado de la Sala</label>
            <p>{{ $sala->estado }}</p>
        </div>
        <div>
            <label for="nombre" class="form-label text-gray-700">Nombre</label>
            <p>{{ $sala->nombre }}</p>
        </div>
        <div>
            <label for="asientos" class="form-label text-gray-700">Asientos de la Sala</label>
            <p>{{ $sala->asientos }}</p>
        </div>
    </div>
</div>