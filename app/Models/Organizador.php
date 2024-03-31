<?php

namespace App\Models;

use App\Events\OrganizadorCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizador extends Model
{

    protected $table = 'organizadors';
    use HasFactory;

    protected $fillable = [
        'id_persona',
        'estado',
        'razonSoc',
        'direccion'
    ];

    public function Persona()
    {
        return $this->belongsTo(Persona::class, 'id_persona');
    }

    protected $dispatchesEvents = [
        'created' => OrganizadorCreated::class,
    ];
}
