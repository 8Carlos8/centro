<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Detalle del Usuario</h1>

    <div class="mb-4">
        <a href="{{ route('Usuarios.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg">Regresar al listado</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <label for="id_evento" class="form-label text-gray-700">ID del Usuario</label>
            <p>{{ $usuario->id }}</p>
        </div>
        <div>
            <label for="username" class="form-label text-gray-700">Username</label>
            <p>{{ $usuario->username }}</p>
        </div>
        <div>
            <label for="correo" class="form-label text-gray-700">Correo</label>
            <p>{{ $usuario->correo }}</p>
        </div>
        <div>
            <label for="Rol" class="form-label text-gray-700">Rol</label>
            <p>{{ $usuario->Rol }}</p>
        </div>
        <div>
            <label for="estado" class="form-label text-gray-700">Estado</label>
            <p>{{ $usuario->estado }}</p>
        </div>
    </div>
</div>