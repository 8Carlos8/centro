<?php

namespace App\Models;

use App\Events\UsuarioCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'correo', 'password']; // Asumiendo que estos son los campos en tu tabla 'usuarios'

    protected $dispatchesEvents = [
        'created' => UsuarioCreated::class,
    ];
}
