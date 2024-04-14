<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Crear nueva Zona</h1>

    <form action="{{ route('Estacionamientos.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="id_cajon" class="form-label text-gray-700">ID del Cajon inicio</label>
            <select class="form-select" id="id_cajonIni" name="id_cajonIni">
                <option value="">Seleccionar Cajon</option>
                @foreach($cajones as $cajon)
                <option value="{{ $cajon->id }}">Zona: {{ $cajon->zona }} - Cajón: {{ $cajon->cajon }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="id_cajon" class="form-label text-gray-700">ID del Cajon final</label>
            <select class="form-select" id="id_cajonFin" name="id_cajonFin">
                <option value="">Seleccionar Cajon</option>
                @foreach($cajones as $cajon)
                <option value="{{ $cajon->id }}">Zona: {{ $cajon->zona }} - Cajón: {{ $cajon->cajon }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="entrada" class="form-label text-gray-700">Entrada</label>
            <input type="date" class="form-control @error('entrada') is-invalid @enderror" id="entrada" name="entrada" required>
        </div>

        <div class="mb-3">
            <label for="salida" class="form-label text-gray-700">Salida</label>
            <input type="date" class="form-control @error('salida') is-invalid @enderror" id="salida" name="salida" required>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label text-gray-700">Estado</label>
            <input type="text" class="form-control @error('estado') is-invalid @enderror" id="estado" name="estado" placeholder="Estado del Estacionamiento" required>
        </div>

        <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Crear Zona</button>
    </form>
</div>