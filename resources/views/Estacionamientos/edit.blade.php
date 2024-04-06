<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Actualizar Estacionamiento</h1>

    <form action="{{ route('Estacionamientos.update', $estacionamiento->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="id_cajon" class="form-label text-gray-700">ID del Cajon</label>
            <select class="form-select" id="id_cajon" name="id_cajon">
                <option value="">Seleccionar Cajon</option>
                @foreach($cajones as $cajon)
                <option value="{{ $cajon->id }}">{{ $cajon->cajon }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="entrada" class="form-label text-gray-700">Entrada</label>
            <input type="date" class="form-control @error('entrada') is-invalid @enderror" id="entrada" name="entrada" value="{{ $estacionamiento->entrada }}" required>
        </div>

        <div class="mb-3">
            <label for="salida" class="form-label text-gray-700">Salida</label>
            <input type="date" class="form-control @error('salida') is-invalid @enderror" id="salida" name="salida" value="{{ $estacionamiento->salida }}" required>
        </div>

        <div class="mb-3">
            <label for="estado" class="form-label text-gray-700">Estado</label>
            <input type="text" class="form-control @error('estado') is-invalid @enderror" id="estado" name="estado" placeholder="Estado del Estacionamiento" value="{{ $estacionamiento->estado }}" required>
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Actualizar</button>
        </div>
    </form>
</div>