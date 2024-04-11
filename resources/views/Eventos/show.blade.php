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
            <label for="id_organizador" class="form-label text-gray-700">ID del Organizador</label>
            <p>{{ $evento->id_organizador }}</p>
        </div>
        <div>
            <label for="nombre" class="form-label text-gray-700">Nombre del evento</label>
            <p>{{ $evento->nombre }}</p>
        </div>
        <div>
            <label for="tipo" class="form-label text-gray-700">Tipo de evento</label>
            <p>{{ $evento->tipo }}</p>
        </div>
        <div>
            <label for="duracion" class="form-label text-gray-700">Duracion del Evento</label>
            <p>{{ $evento->duracion }}</p>
        </div>
        <div>
            <label for="poster" class="form-label text-gray-700">Poster del Evento</label>
            <p>{{ $evento->poster }}</p>
        </div>
        <div>
            <label for="banner" class="form-label text-gray-700">Banner del Evento</label>
            <p>{{ $evento->banner }}</p>
        </div>
    </div>
</div>