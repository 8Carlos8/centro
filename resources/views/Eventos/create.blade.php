<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Crear nuevo Evento</h1>

    <form action="{{ route('Eventos.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_persona">ID Persona</label>
            <select class="form-select" id="id_persona" name="id_organizador">
                <option value="">Seleccionar Organizador</option>
                @foreach($organizadores as $organizador)
                <option value="{{ $organizador->id }}">{{ $organizador->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre del evento" class="form-input">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tipo">Tipo</label>
            <input type="text" id="tipo" name="tipo" placeholder="Tipo de Evento" class="form-input">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="duracion">Duracion</label>
            <input type="date" id="duracion" name="duracion" class="form-input">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="poster">Poster</label>
            <input type="file" id="poster" name="poster" class="form-input">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="banner">Banner</label>
            <input type="file" id="banner" name="banner" class="form-input">
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Crear Evento</button>
        </div>
    </form>
</div>