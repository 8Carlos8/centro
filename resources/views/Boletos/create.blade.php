<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Obtener nuevo Boleto</h1>

    <form action="{{ route('Boletos.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_usuario">ID Usuario</label>
            <select class="form-select" id="id_usuario" name="id_usuario">
                <option value="">Seleccionar Usuario</option>
                @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->username }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_cartelera">ID Cartelera</label>
            <select class="form-select" id="id_cartelera" name="id_cartelera">
                <option value="">Seleccionar Cartelera</option>
                @foreach($carteleras as $cartelera)
                <option value="{{ $cartelera->id }}">{{ $cartelera->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="noBoletos">Numero de Boletos</label>
            <input type="text" id="noBoletos" name="noBoletos" placeholder="Boletos" class="form-input">
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Obtener Boletos</button>
        </div>
    </form>
</div>