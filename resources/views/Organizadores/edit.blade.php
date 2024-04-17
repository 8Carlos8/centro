<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Organizador</title>
    <link rel="icon" type="image/x-icon" href="../../../imagenes/CULTURA1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body style="background-image: url(../../../imagenes/teatro.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <div class="container py-2 w-50 justify-content-center">
        <div class="card">
            <h2 class="mt-4 text-black ms-5">Editar Organizador</h2>
            <form action="{{ route('Organizadores.update', $organizador->id) }}" method="POST">
                @csrf
                @method('PUT')
                <table class="table mt-4">
                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_persona">ID Persona</label>
                        </td>
                        <td class="control-label ms-2">
                            <select class="form-select" id="id_persona" name="id_persona">
                                <option value="">Seleccionar Persona</option>
                                @foreach($personas as $persona)
                                <option value="{{ $persona->id }}">{{ $persona->nombre }} {{ $persona->a_paterno }} {{ $persona->a_materno }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="razonSoc">Razón Social</label>
                        </td>
                        <td class="control-label ms-2">
                            <input type="text" id="razonSoc" name="razonSoc" placeholder="Razón Social" class="form-input" value="{{ $organizador->razonSoc }}">
                        </td>
                    </tr>

                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="direccion">Dirección</label>
                        </td>
                        <td class="control-label ms-2">
                            <input type="text" id="direccion" name="direccion" placeholder="Domicilio Fiscal" class="form-input" value="{{ $organizador->direccion }}">
                        </td>
                    </tr>

                    <input type="hidden" id="estado" name="estado" value="1">

                    <tr>
                        <td colspan="2" class="control-label ms-2">
                            <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Actualizar Organizador</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
