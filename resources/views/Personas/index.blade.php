<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Personas</h1>

    <div class="mb-4">
        <a href="{{ route('Personas.create') }}" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Crear nueva Persona</a>
        <a href="{{ route('Personas.inicio') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-lg">Regresar al Panel</a>
    </div>
    @auth
    <!-- Esto se mostrará solo si hay una sesión activa -->
    <p>Bienvenido, {{ auth()->user()->username }}</p>
    @else
    <!-- Esto se mostrará si no hay una sesión activa -->
    <p>Por favor, inicia sesión para acceder a esta página.</p>
    @endauth


    @guest
    <!-- Esto se mostrará si no hay una sesión activa -->
    <p>Por favor, inicia sesión para acceder a esta página.</p>
    @endguest


    @if (session('status'))
    <div class="bg-green-500 text-white p-4 mb-4 rounded-lg">
        {{ session('status') }}
    </div>
    @endif

    <table class="table-auto w-full border-collapse border-gray-200">
        <thead>
            <tr>
                <th class="border-gray-300 px-4 py-2 text-gray-700">ID</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Nombre</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Apellido Paterno</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Apellido Materno</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Fecha de Nacimiento</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Telefono</th>
                <th class="border-gray-300 px-4 py-2 text-gray-700">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personas as $persona)
            <tr>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $persona->id }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $persona->nombre}}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $persona->a_paterno}}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $persona->a_materno }}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $persona->fecha_nac}}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">{{ $persona->telefono}}</td>
                <td class="border-gray-300 px-4 py-2 text-gray-700">
                    <a href="{{ route('Personas.edit', $persona->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded-lg">Editar</a>
                    <a href="{{ route('Personas.show', $persona->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-1 px-2 rounded-lg">Visualizar</a>
                    <form action="{{ route('Personas.destroy', $persona) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded-lg">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if (Auth::check())
    <form action="{{ route('logout') }}" method="POST" class="inline-block">
        @csrf
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg">Cerrar Sesión</button>
    </form>
    @endif

</div>