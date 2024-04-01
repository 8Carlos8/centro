<?php

namespace App\Models;

use App\Events\EventoCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_organizador',
        'nombre',
        'tipo',
        'duracion',
        'foto',
    ];

    protected function Organizador()
    {
        return $this->belongsTo(Organizador::class, 'id_organizador');
    }

    protected $dispatchesEvents = [
        'created' => EventoCreated::class,
    ];
}
