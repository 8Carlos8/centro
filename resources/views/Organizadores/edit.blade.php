<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Actualizar Organizador</h1>

    <form action="{{ route('Organizadores.update', $organizador->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_persona">ID Persona</label>
            <select class="form-select" id="id_persona" name="id_persona">
                <option value="">Seleccionar Persona</option>
                @foreach($personas as $persona)
                <option value="{{ $persona->id }}">{{ $persona->nombre }} {{ $persona->a_paterno }} {{ $persona->a_materno }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="razonSoc">Razón Social</label>
            <input type="text" id="razonSoc" name="razonSoc" placeholder="Razón Social" class="form-input" value="{{ $organizador->razonSoc}}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="direccion">Dirección</label>
            <input type="text" id="direccion" name="direccion" placeholder="Domicilio Fiscal" class="form-input" value="{{ $organizador->direccion}}">
        </div>

        <input type="hidden" id="estado" name="estado" value="1">

        <div class="mb-4">
            <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Actualizar Organizador</button>
        </div>
    </form>
</div>