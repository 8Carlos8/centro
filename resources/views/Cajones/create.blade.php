<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CC Siglo XXI - Agregar Cajones</title>
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
            <h2 class="mt-4 text-black ms-5">Crear nuevo Cajon</h2>
            <form action="{{ route('Cajones.store') }}" method="POST">
                @csrf
                <table class="table mt-4">
                    <tr>
                        <td class="mb-4">
                            <label class="control-label ms-2" for="zona">Zona</label>
                            <select class="form-select @error('zona') is-invalid @enderror" aria-label="Zona del cajon" id="zona" name="zona" required>
                                <option value="">Seleccione Zona</option>
                                <option value="A">Zona A</option>
                                <option value="B">Zona B</option>
                                <option value="C">Zona C</option>
                                <option value="D">Zona D</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="mb-4">
                            <label class="control-label ms-2" for="cajon">Cajon</label>
                            <input type="text" id="cajon" name="cajon" placeholder="Numero del Cajon" class="form-input">
                        </td>
                    </tr>
                    <tr>
                        <td class="mb-4">
                            <label class="control-label ms-2" for="estado">Estado</label>
                            <input type="text" id="estado" name="estado" placeholder="Estado del Cajon" class="form-input">
                        </td>
                    </tr>
                    <tr>
                        <td class="mb-4">
                            <button type="submit"class="btn btn-success"><i class="bi bi-save-fill"></i>&nbsp;Crear Cajones</button>
                                <a href="{{ route('Cajones.index') }}" class="btn btn-danger ms-2 text-end"><i class="bi bi-arrow-return-left"></i>&nbsp;Regresar</a>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>
