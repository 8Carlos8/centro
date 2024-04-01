<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Detalle del evento</h1>

    <div class="mb-4">
        <a href="{{ route('Boletos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg">Regresar al listado</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="id" class="form-label text-gray-700">ID del Boleto</label>
            <p>{{ $evento->id }}</p>
        </div>
        <div>
            <label for="id_usuario" class="form-label text-gray-700">ID del Usuario</label>
            <p>{{ $evento->id_usuario }}</p>
        </div>
        <div>
            <label for="id_cartelera" class="form-label text-gray-700">ID de la Cartelera</label>
            <p>{{ $evento->id_cartelera }}</p>
        </div>
        <div>
            <label for="noBoletos" class="form-label text-gray-700">Numero de boletos</label>
            <p>{{ $evento->noBoletos }}</p>
        </div>
    </div>
</div>