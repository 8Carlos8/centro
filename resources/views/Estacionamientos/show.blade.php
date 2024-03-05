<x-app-layout>
    <div class="container mx-auto py-4">
        <h1 class="text-3xl font-bold mb-4 text-gray-900">Detalle del evento</h1>

        @if (session('status'))
        <div class="bg-green-500 text-white p-4 mb-4 rounded-lg">
            {{ session('status') }}
        </div>
        @endif

        <div class="mb-4">
            <a href="{{ route('eventos.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg">Regresar al listado</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label for="id_evento" class="form-label text-gray-700">ID del evento</label>
                <p>{{ $evento->id }}</p>
            </div>
            <div>
                <label for="id_sala" class="form-label text-gray-700">ID de la sala</label>
                <p>{{ $evento->id_sala }}</p>
            </div>
            <div>
                <label for="estado" class="form-label text-gray-700">Estado del evento</label>
                <p>{{ $evento->estado }}</p>
            </div>
            <div>
                <label for="inicio" class="form-label text-gray-700">Fecha de inicio</label>
                <p>{{ $evento->inicio }}</p>
            </div>
            <div>
                <label for="fin" class="form-label text-gray-700">Fecha de finalización</label>
                <p>{{ $evento->fin }}</p>
            </div>
        </div>
    </div>
</x-app-layout>