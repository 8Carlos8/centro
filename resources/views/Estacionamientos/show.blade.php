<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Detalle del Estacionamiento</h1>

    @if (session('status'))
    <div class="bg-green-500 text-white p-4 mb-4 rounded-lg">
        {{ session('status') }}
    </div>
    @endif

    <div class="mb-4">
        <a href="{{ route('Estacionamientos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg">Regresar al listado</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="id" class="form-label text-gray-700">ID del Estacionamiento</label>
            <p>{{ $estacionamiento->id }}</p>
        </div>
        <div>
            <label for="id_cajonIni" class="form-label text-gray-700">ID Cajon Inicio</label>
            <p>{{ $estacionamiento->id_cajonIni }}</p>
        </div>
        <div>
            <label for="id_cajonFin" class="form-label text-gray-700">ID Cajon Fin</label>
            <p>{{ $estacionamiento->id_cajonFin }}</p>
        </div>
        <div>
            <label for="entrada" class="form-label text-gray-700">Entrada</label>
            <p>{{ $estacionamiento->entrada }}</p>
        </div>
        <div>
            <label for="salida" class="form-label text-gray-700">Salida</label>
            <p>{{ $estacionamiento->salida }}</p>
        </div>
        <div>
            <label for="estado" class="form-label text-gray-700">Estado</label>
            <p>{{ $estacionamiento->estado }}</p>
        </div>
    </div>
</div>