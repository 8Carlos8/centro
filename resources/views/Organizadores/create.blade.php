<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nuevo Organizador</title>
    <link rel="icon" type="image/x-icon" href="../../../imagenes/CULTURA1.png">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
        crossorigin="anonymous">
</head>
<body style="background-image: url(../../../imagenes/teatro.jpg); background-repeat: no-repeat;
    background-attachment: fixed; background-size: cover;">
    <div class="container py-2 w-50 justify-content-center">
        <div class="card">
            <h2 class="mt-4 text-black ms-5">Crear nuevo Organizador</h2>
            <form action="{{ route('Organizadores.store') }}" method="POST">
                @csrf
                <table class="table mt-4">
                    <tr>
                        <td>
                            <label class="control-label ms-2" for="id_persona">ID Persona</label>
                            <select class="form-select" id="id_persona" name="id_persona">
                                <option value="">Seleccionar Persona</option>
                                @foreach($personas as $persona)
                                <option value="{{ $persona->id }}">{{ $persona->nombre }} {{ $persona->a_paterno }} {{ $persona->a_materno }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="control-label ms-2" for="razonSoc">Razón Social</label>
                            <input type="text" id="razonSoc" name="razonSoc" placeholder="Razón Social" class="form-input">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="control-label ms-2" for="direccion">Dirección</label>
                            <input type="text" id="direccion" name="direccion" placeholder="Domicilio Fiscal" class="form-input">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" id="estado" name="estado" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="submit" class="btn btn-success"><i class="bi bi-save-fill"></i>&nbsp;Crear Organizador</button>
                                <a href="{{ route('Boletos.index') }}" class="btn btn-danger ms-2 text-end"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
