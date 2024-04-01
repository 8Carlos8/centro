<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Detalle del evento</h1>

    <div class="mb-4">
        <a href="{{ route('Eventos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg">Regresar al listado</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="id_evento" class="form-label text-gray-700">ID del evento</label>
            <p>{{ $evento->id }}</p>
        </div>
        <div>
            <label for="id_sala" class="form-label text-gray-700">ID del Organizador</label>
            <p>{{ $evento->id_organizador }}</p>
        </div>
        <div>
            <label for="estado" class="form-label text-gray-700">Nombre del evento</label>
            <p>{{ $evento->nombre }}</p>
        </div>
        <div>
            <label for="inicio" class="form-label text-gray-700">Tipo de evento</label>
            <p>{{ $evento->tipo }}</p>
        </div>
        <div>
            <label for="fin" class="form-label text-gray-700">Duracion del Evento</label>
            <p>{{ $evento->duracion }}</p>
        </div>
        <div>
            <label for="fin" class="form-label text-gray-700">Foto del Evento</label>
            <p>{{ $evento->foto }}</p>
        </div>
    </div>
</div>