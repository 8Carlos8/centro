<?php

namespace App\Models;

use App\Events\EstacionamientoCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Estacionamiento extends Model
{
    use HasFactory;

    protected $fillable = ['Estacionamiento'];

    protected $dispatchesEvents = [
        'created' => EstacionamientoCreated::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
