<?php

namespace App\Models;

use App\Events\CarteleraCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cartelera extends Model
{
    use HasFactory;


    protected $fillable = [
        'id_evento',
        'id_sala',
        'estado',
        'inicio',
        'fin',
        'lugares',
    ];

    protected function Evento()
    {
        return $this->belongsTo(Evento::class, 'id_evento');
    }

    protected function Sala()
    {
        return $this->belongsTo(Sala::class, 'id_sala');
    }

    protected $dispatchesEvents = [
        'created' => CarteleraCreated::class,
    ];
}
