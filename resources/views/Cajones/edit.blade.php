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
                            <input type="text" id="zona" name="zona" placeholder="Zona del Cajon" class="form-input" value="{{ $cajon->zona }}">
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
                            <input type="text" id="estado" name="estado" placeholder="Estado del Cajon" class="form-input" value="{{ $cajon->estado }}">
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
