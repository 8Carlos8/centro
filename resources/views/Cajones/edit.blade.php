<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Actualizar Cajon</h1>

    <form action="{{ route('Carteleras.update', $cartelera->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="zona">Zona</label>
            <input type="text" id="zona" name="zona" placeholder="Zona del Cajon" class="form-input" value="{{ $cajon->zona }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="cajon">Cajon</label>
            <input type="text" id="cajon" name="cajon" placeholder="Numero del Cajon" class="form-input" value="{{ $cajon->cajon }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="estado">Estado</label>
            <input type="text" id="estado" name="estado" placeholder="Estado del Cajon" class="form-input" value="{{ $cajon->estado }}">
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Actualizar</button>
        </div>
    </form>
</div>