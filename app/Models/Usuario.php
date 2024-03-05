<?php

namespace App\Models;

use App\Events\UsuarioCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Usuario extends Model
{
    use HasFactory;

    protected $fillable = ['Usuario'];

    protected $dispatchesEvents = [
        'created' => UsuarioCreated::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
