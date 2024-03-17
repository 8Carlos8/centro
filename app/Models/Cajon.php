<?php

namespace App\Models;

use App\Events\CajonCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cajon extends Model
{
    use HasFactory;

    protected $fillable = ['Cajon'];

    protected $dispatchesEvents = [
        'created' => CajonCreated::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
