<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Crear nuevo Cajon</h1>

    <form action="{{ route('Cajones.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="zona">Zona</label>
            <input type="text" id="zona" name="zona" placeholder="Zona del Cajon" class="form-input">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="cajon">Cajon</label>
            <input type="text" id="cajon" name="cajon" placeholder="Numero del Cajon" class="form-input">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="estado">Estado</label>
            <input type="text" id="estado" name="estado" placeholder="Estado del Cajon" class="form-input">
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Crear Cartelera</button>
        </div>
    </form>
</div>