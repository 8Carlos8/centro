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

    public function estacionamientos()
    {
        return $this->hasMany(Estacionamiento::class, 'cajon_id', 'id');
    }

    protected $dispatchesEvents = [
        'created' => CajonCreated::class,
    ];
}
