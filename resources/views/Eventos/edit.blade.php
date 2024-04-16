<head>
  <title>CC Siglo XXI - Modificar Evento</title>
  <link rel="icon" type="image/x-icon" href="../../../imagenes/CULTURA1.png">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </script>
</head>
<body style="background-image: url(../../../imagenes/teatro.jpg);background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">    
<div class="container mx-auto py-4">
    <h1 class="text-3xl font-bold mb-4 text-gray-900">Actualizar el Evento</h1>

    <form action="{{ route('Eventos.update', $evento->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_persona">ID Organizador</label>
            <select class="form-select" id="id_persona" name="id_organizador">
                <option value="">Seleccionar Organizador</option>
                @foreach($organizadores as $organizador)
                <option value="{{ $organizador->id }}">{{ $organizador->id }}</option>
                @endforeach
            </select>
        </div>


        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="id_persona">ID Estacinamiento</label>
            <select class="form-select" id="id_estacionamiento" name="id_estacionamiento">
                <option value="">Seleccionar Estacinamiento</option>
                @foreach($estacionamientos as $estacionamiento)
                <option value="{{ $estacionamiento->id }}">{{ $estacionamiento->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre del evento" class="form-input" value="{{ $evento->nombre }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="tipo">Tipo</label>
            <input type="text" id="tipo" name="tipo" placeholder="Tipo de Evento" class="form-input" value="{{ $evento->tipo }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="duracion">Duracion</label>
            <input type="date" id="duracion" name="duracion" class="form-input" value="{{ $evento->duracion }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="poster">Poster</label>
            <input type="file" id="poster" name="poster" class="form-input" value="{{ $evento->poster }}">
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="banner">Banner</label>
            <input type="file" id="banner" name="banner" class="form-input" value="{{ $evento->banner }}">
        </div>

        <div class="mb-4">
            <button type="submit" class="bg-teal-500 hover:bg-teal-600 text-white font-bold py-2 px-4 rounded-lg">Actualizar Evento</button>
        </div>
    </form>
</div>
</body>