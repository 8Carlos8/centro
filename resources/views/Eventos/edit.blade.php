<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Actualizar el Evento</h1>

    <form action="{{ route('Eventos.update', $evento->id) }}" method="POST">
        @csrf
        @method('PUT')
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
            <input type="text" id="nombre" name="nombre" placeholder="Nombre del evento" class="form-input" value="{{ $evento->nombre }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tipo">Tipo</label>
            <input type="text" id="tipo" name="tipo" placeholder="Tipo de Evento" class="form-input" value="{{ $evento->tipo }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="duracion">Duracion</label>
            <input type="date" id="duracion" name="duracion" class="form-input" value="{{ $evento->duracion }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="foto">Foto</label>
            <input type="file" id="foto" name="foto" class="form-input" value="{{ $evento->foto }}">
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Actualizar Evento</button>
        </div>
    </form>
</div>