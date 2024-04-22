<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CC Siglo XXI - Editar Cajones</title>
    <link rel="icon" type="image/x-icon" href="../../../imagenes/CULTURA1.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body style="background-image: url(../../../imagenes/teatro.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
    <div class="container py-2 w-50 justify-content-center">
        <div class="card">
            <h2 class="mt-4 text-black ms-5">Editar Cajon</h2>
            <form action="{{ route('Cajones.update', $cajon->id) }}" method="POST">
                @csrf
                @method('PUT')
                <table class="table mt-4">
                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="zona">Zona</label>
                        </td>
                        <td class="control-label ms-2">
                            <select class="form-select @error('zona') is-invalid @enderror" aria-label="Zona del cajon" id="zona" name="zona" required>
                                <option value="">Seleccionar Zona</option>
                                <option value="A" {{ $cajon->zona == 'A' ? 'selected' : ''}}>Zona A</option>
                                <option value="B" {{ $cajon->zona == 'B' ? 'selected' : ''}}>Zona B</option>
                                <option value="C" {{ $cajon->zona == 'C' ? 'selected' : ''}}>Zona C</option>
                                <option value="D" {{ $cajon->zona == 'D' ? 'selected' : ''}}>Zona D</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="cajon">Cajon</label>
                        </td>
                        <td class="control-label ms-2">
                            <input type="text" id="cajon" name="cajon" placeholder="Numero del Cajon" class="form-input" value="{{ $cajon->cajon }}">
                        </td>
                    </tr>

                    <tr>
                        <td class="control-label ms-2">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="estado">Estado</label>
                        </td>
                        <td class="control-label ms-2">
                            <select class="form-select @error('estado') is-invalid @enderror" aria-label="Estado del cajon" id="estado" name="estado" required>
                                <option value="0">Disponible</option>
                                <option value="1">Ocupado</option>
                                <option value="2">Reservado</option>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2" class="control-label ms-2">
                            <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Actualizar</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>