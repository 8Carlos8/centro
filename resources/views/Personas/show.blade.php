<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Detalle de la persona</h1>

    <div class="mb-4">
        <a href="{{ route('Personas.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg">Regresar al listado</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="id_evento" class="form-label text-gray-700">ID de la Persona</label>
            <p>{{ $persona->id }}</p>
        </div>
        <div>
            <label for="id_sala" class="form-label text-gray-700">Nombre</label>
            <p>{{ $persona->nombre }}</p>
        </div>
        <div>
            <label for="estado" class="form-label text-gray-700">Apellido Paterno</label>
            <p>{{ $persona->a_paterno }}</p>
        </div>
        <div>
            <label for="inicio" class="form-label text-gray-700">Apellido Materno</label>
            <p>{{ $persona->a_materno }}</p>
        </div>
        <div>
            <label for="fin" class="form-label text-gray-700">Fecha de Nacimiento</label>
            <p>{{ $persona->fecha_nac }}</p>
        </div>
        <div>
            <label for="fin" class="form-label text-gray-700">Telefono</label>
            <p>{{ $persona->telefono }}</p>
        </div>
    </div>
</div>