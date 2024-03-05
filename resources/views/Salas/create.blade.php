<x-app-layout>
    <div class="container mx-auto py-4">
        <h1 class="text-3xl font-bold mb-4 text-gray-900">Crear nuevo evento</h1>

        <form action="{{ route('eventos.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="id_evento" class="form-label text-gray-700">ID del evento</label>
                <input type="text" class="form-control @error('id_evento') is-invalid @enderror" id="id_evento" name="id_evento" required>
                @error('id_evento')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="id_sala" class="form-label text-gray-700">ID de la sala</label>
                <input type="text" class="form-control @error('id_sala') is-invalid @enderror" id="id_sala" name="id_sala" required>
                @error('id_sala')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="estado" class="form-label text-gray-700">Estado del evento</label>
                <select class="form-select @error('estado') is-invalid @enderror" aria-label="Estado del evento" id="estado" name="estado" required>
                    <option value="">Seleccione...</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="En curso">En curso</option>
                    <option value="Finalizado">Finalizado</option>
                </select>
                @error('estado')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inicio" class="form-label text-gray-700">Fecha de inicio</label>
                <input type="date" class="form-control @error('inicio') is-invalid @enderror" id="inicio" name="inicio" required>
                @error('inicio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="fin" class="form-label text-gray-700">Fecha de finalización</label>
                <input type="date" class="form-control @error('fin') is-invalid @enderror" id="fin" name="fin" required>
                @error('fin')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Crear evento</button>
        </form>
    </div>
</x-app-layout>