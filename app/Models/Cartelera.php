<?php

namespace App\Models;

use App\Events\CarteleraCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cartelera extends Model
{
    use HasFactory;


    protected $fillable = ['Cartelera'];

    protected $dispatchesEvents = [
        'created' => CarteleraCreated::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
