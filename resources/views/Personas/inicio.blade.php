<div class="d-flex w-100 justify-content-center">
    <p class="mt-5 fs-3 fw-bold"> Panel de Control </p>
</div>
<div class="container-fluid p-5">
    <div class="row w-100 justify-content-center column-gap-2">
        <div class="col col-xxl-6">
            <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Usuarios.index') }}" ROLe="button">Usuario</a><br>
            <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Organizadores.index') }}" ROLe="button">Organizador</a><br>
        </div>
        <div class="col col-xxl-6">
            <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Salas.index') }}" ROLe="button">Sala</a><br>
            <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Estacionamientos.index') }}" ROLe="button">Estacionamiento</a><br>
            <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Eventos.index') }}" ROLe="button">Evento</a><br>
            <a class="btn btn-danger w-100 btn-lg mt-2 mb-0" href="{{ route('Carteleras.index') }}" ROLe="button">Cartelera</a><br>
        </div>
    </div>
    @if (Auth::check())
    <form action="{{ route('logout') }}" method="POST" class="inline-block">
        @csrf
        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg">Cerrar Sesión</button>
    </form>
    @endif
</div>