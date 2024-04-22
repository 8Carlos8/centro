<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtener Boletos</title>
    <link rel="icon" type="image/x-icon" href="../../../imagenes/CULTURA1.png">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body style="background-image: url(../../../imagenes/teatro.jpg); background-repeat: no-repeat;
    background-attachment: fixed; background-size: cover;">
    <div class="container py-2 w-50 justify-content-center">
        <div class="card">
            <h2 class="mt-4 text-black ms-5">Obtener Boletos</h2>
            <form action="{{ route('Boletos.store') }}" method="POST">
                @csrf
                <table class="table mt-4">
                    <tr>
                        <td>
                            <label class="control-label ms-2" for="id_usuario">ID Usuario</label>
                            <select class="form-select" id="id_usuario" name="id_usuario">
                                <option value="">Seleccionar Usuario</option>
                                @foreach($usuarios as $usuario)
                                <option value="{{ $usuario->id }}">{{ $usuario->username }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="control-label ms-2" for="id_cartelera">ID Cartelera</label>
                            <select class="form-select" id="id_cartelera" name="id_cartelera">
                                <option value="">Seleccionar Cartelera</option>
                                @foreach($carteleras as $cartelera)
                                <option value="{{ $cartelera->id }}">{{ $cartelera->id }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="control-label ms-2" for="id_cajon">ID Cajones</label>
                            <select class="form-select" id="id_cajon" name="id_cajon">
                                <option value="">Seleccionar Cajones</option>
                                @foreach($cajones as $cajon)
                                @if($cajon->estado == 1)
                                <option value="{{ $cajon->cajon }}">Cajon Ocupado</option>
                                @elseif($cajon->estado == 2)
                                <option value="{{ $cajon->cajon }}">Cajon Reservado</option>
                                @else
                                <option value="{{ $cajon->cajon }}" {{ $cajon->estado == 2 ? 'selected' : '' }}>{{ $cajon->zona }} - {{ $cajon->cajon }}</option>
                                @endif

                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="control-label ms-2" for="noBoletos">Numero de Boletos</label>
                            <input type="text" id="noBoletos" name="noBoletos" placeholder="Boletos" class="form-input">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" id="estado" name="estado" value="2">
                            <button type="submit" class="btn btn-success"><i class="bi bi-save-fill"></i>&nbsp;Obtener Boletos</button>
                            <a href="{{ route('Boletos.index') }}" class="btn btn-danger ms-2 text-end"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar</a>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>