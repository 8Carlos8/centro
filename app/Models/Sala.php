<?php

namespace App\Models;

use App\Events\SalaCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sala extends Model
{
    use HasFactory;

    protected $fillable = ['Sala'];

    protected $dispatchesEvents = [
        'created' => SalaCreated::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
