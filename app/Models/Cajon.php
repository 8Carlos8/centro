<?php

namespace App\Models;

use App\Events\CajonCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cajon extends Model
{
    use HasFactory;

    protected $fillable = [
        'zona',
        'cajon',
        'estado',
    ];

    protected $dispatchesEvents = [
        'created' => CajonCreated::class,
    ];
}
