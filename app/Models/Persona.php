<?php

namespace App\Models;

use App\Events\PersonaCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Persona extends Model
{
    use HasFactory;

    protected $fillable = ['Persona'];

    protected $dispatchesEvents = [
        'created' => PersonaCreated::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
