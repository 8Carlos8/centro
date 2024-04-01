<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Detalle del Organizador</h1>

    <div class="mb-4">
        <a href="{{ route('Organizadores.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg">Regresar al listado</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="id_organizador" class="form-label text-gray-700">ID del Organizador</label>
            <p>{{ $organizador->id }}</p>
        </div>
        <div>
            <label for="id_persona" class="form-label text-gray-700">ID de Personas</label>
            <p>{{ $organizador->id_persona }}</p>
        </div>
        <div>
            <label for="estado" class="form-label text-gray-700">Estado</label>
            <p>{{ $organizador->estado }}</p>
        </div>
        <div>
            <label for="razonSoc" class="form-label text-gray-700">Razon Social</label>
            <p>{{ $organizador->razonSoc }}</p>
        </div>
        <div>
            <label for="direccion" class="form-label text-gray-700">Direccion</label>
            <p>{{ $organizador->direccion }}</p>
        </div>
    </div>
</div>