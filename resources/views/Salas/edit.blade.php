<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Actualizar Organizador</h1>

    <form action="{{ route('Salas.update', $sala->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_persona">Estado</label>
            <input type="text" id="estado" name="estado" placeholder="Estado de la Sala" class="form-input" value="{{ $sala->id }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="razonSoc">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre de la Sala" class="form-input" value="{{ $sala->nombre }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="direccion">Asientos</label>
            <input type="text" id="asientos" name="asientos" placeholder="Asientos que hay en la Sala" class="form-input" value="{{ $sala->asientos }}">
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Actualizar Sala</button>
        </div>
    </form>
</div>