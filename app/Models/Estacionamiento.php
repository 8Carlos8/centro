<?php

namespace App\Models;

use App\Events\EstacionamientoCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Estacionamiento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_cajonIni',
        'id_cajonFin',
        'entrada',
        'salida',
        'estado',
    ];

    protected function Cajon()
    {
        return $this->belongsTo(Cajon::class, 'id_cajon');
    }

    protected $dispatchesEvents = [
        'created' => EstacionamientoCreated::class,
    ];
}
