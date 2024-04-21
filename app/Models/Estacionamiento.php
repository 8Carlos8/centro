<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estacionamiento extends Model
{
    protected $fillable = [
        'entrada',
        'salida',
        'estado',
        'cajones',
    ];

    public function cajones()
    {
        return Cajon::whereIn('id', json_decode($this->cajones))->get();
    }
}
