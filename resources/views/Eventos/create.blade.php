<h1>Crear un nuevo evento</h1>

<form action="{{ route('Eventos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="id_organizador">ID del organizador</label>
        <input type="number" name="id_organizador" id="id_organizador" class="form-control" value="{{ old('id_organizador') }}">
    </div>

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}">
    </div>

    <div class="form-group">
        <label for="tipo">Tipo</label>
        <input type="text" name="tipo" id="tipo" class="form-control" value="{{ old('tipo') }}">
    </div>

    <div class="form-group">
        <label for="duracion">Duración</label>
        <input type="date" name="duracion" id="duracion" class="form-control" value="{{ old('duracion') }}">
    </div>

    <div class="form-group">
        <label for="foto">Foto</label>
        <input type="file" name="foto" id="foto" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Crear evento</button>
</form>