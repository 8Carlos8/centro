<?php

namespace App\Models;

use App\Events\UsuarioCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_persona',
        'estado',
        'correo',
        'username',
        'password',
        'rol',
    ];

    protected function Persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }

    protected $dispatchesEvents = [
        'created' => UsuarioCreated::class,
    ];
}
