<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class ubicacionController extends Controller
{
    public function index()
    {
        return view('ubicacion');
    }

    public function show($id)
    {
        $response = Http::get('https://minitechsolutions.shop/ccsxxitest/api/cartelera.php', [
            'id' => $id,
        ]);

        return $response->json();
    }

    public function indexP()
    {
        $cartelera = DB::table('cartelera')
            ->join('evento', 'cartelera.ID_EVENTO', '=', 'evento.ID')
            ->join('sala', 'cartelera.ID_SALA', '=', 'sala.ID')
            ->select('cartelera.ID', 'cartelera.INICIO', 'cartelera.FIN', 'evento.NOMBRE AS NOMBRE_EVENTO', 'sala.NOMBRE AS NOMBRE_SALA')
            ->where('cartelera.ESTADO', '=', 1)
            ->orderByDesc('cartelera.INICIO')
            ->limit(6)
            ->get();

        dd($cartelera);

        if ($cartelera->count() > 0) {
            $status = true;
            $carteleraData = $cartelera->toArray();
            $answer = array("cartelera" => $carteleraData);
            return response()->json($answer, 200);
        } else {
            $status = false;
            $answer = array("error" => "Algo salió mal");
            return response()->json($answer, 403);
        }
        return view('Publi.CarP');
    }
}
