<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtener Boletos</title>
    <link rel="icon" type="image/x-icon" href="../../../imagenes/CULTURA1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body style="background-image: url(../../../imagenes/teatro.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <div class="container py-2 w-50 justify-content-center">
        <div class="card">
            <h2 class="mt-4 text-black ms-5">Obtener Boletos</h2>
            <form action="{{ route('Boletos.update', $boleto->id) }}" method="POST">
                @csrf
                @method('PUT')
                <table class="table mt-4">
                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_usuario">ID Usuario</label>
                        </td>
                        <td class="control-label ms-2">
                            <select class="form-select" id="id_usuario" name="id_usuario">
                                <option value="">Seleccionar Usuario</option>
                                @foreach($usuarios as $usuario)
                                <option value="{{ $usuario->id }}">{{ $usuario->username }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_cartelera">ID Cartelera</label>
                        </td>
                        <td class="control-label ms-2">
                            <select class="form-select" id="id_cartelera" name="id_cartelera">
                                <option value="">Seleccionar Cartelera</option>
                                @foreach($carteleras as $cartelera)
                                <option value="{{ $cartelera->id }}">{{ $cartelera->id }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_cajon">ID Cajones</label>
                        </td>
                        <td class="control-label ms-2">
                            <select class="form-select" id="id_cajon" name="id_cajon">
                                <option value="">Seleccionar Cajones</option>
                                @foreach($cajones as $cajon)
                                <option value="{{ $cajon->id }}">{{ $cajon->id }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="noBoletos">Numero de Boletos</label>
                        </td>
                        <td class="control-label ms-2">
                            <input type="text" id="noBoletos" name="noBoletos" placeholder="Boletos" class="form-input" value="{{ $boleto->noBoletos }}">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <button type="submit" class="btn btn-success"><i class="bi bi-save-fill"></i>&nbsp;Editar </button>
                            <a href="{{ route('Boletos.index') }}" class="btn btn-danger ms-2 text-end"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
