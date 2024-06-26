<?php

namespace App\Models;

use App\Events\BoletoCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Boleto extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_usuario',
        'id_cartelera',
        'id_cajon',
        'noBoletos',
    ];

    protected function Usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

    protected function Cartelera()
    {
        return $this->belongsTo(Cartelera::class, 'id_cartelera');
    }

    protected function Cajon()
    {
        return $this->belongsTo(Cajon::class, 'id_cajon');
    }

    protected $dispatchesEvents = [
        'created' => BoletoCreated::class,
    ];
}
