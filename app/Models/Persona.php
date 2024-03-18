<?php

namespace App\Models;

use App\Events\PersonaCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'a_paterno', 'a_materno', 'fecha_nac', 'telefono'];

    protected $dispatchesEvents = [
        'created' => PersonaCreated::class,
    ];
}
