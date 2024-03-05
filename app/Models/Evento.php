<?php

namespace App\Models;

use App\Events\EventoCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evento extends Model
{
    use HasFactory;

    protected $fillable = ['Evento'];

    protected $dispatchesEvents = [
        'created' => EventoCreated::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
