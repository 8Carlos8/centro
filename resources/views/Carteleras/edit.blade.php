<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Actualizar la Cartelera</h1>

    <form action="{{ route('Carteleras.update', $cartelera->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_evento">ID Evento</label>
            <select class="form-select" id="id_evento" name="id_evento">
                <option value="">Seleccionar Evento</option>
                @foreach($eventos as $evento)
                <option value="{{ $evento->id }}">{{ $evento->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_sala">ID Sala</label>
            <select class="form-select" id="id_sala" name="id_sala">
                <option value="">Seleccionar Sala</option>
                @foreach($salas as $sala)
                <option value="{{ $sala->id }}">{{ $sala->nombre }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="estado">Estado</label>
            <input type="text" id="estado" name="estado" placeholder="Estado de la Cartelera" class="form-input" value="{{ $cartelera->estado }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="inicio">Inicio</label>
            <input type="date" id="inicio" name="inicio" class="form-input" value="{{ $cartelera->inicio }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="fin">Fin</label>
            <input type="date" id="fin" name="fin" class="form-input" value="{{ $cartelera->fin }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="lugares">Lugares</label>
            <input type="number" id="lugares" name="lugares" class="form-input" value="{{ $cartelera->lugares }}">
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Actualizar Cartelera</button>
        </div>
    </form>
</div>