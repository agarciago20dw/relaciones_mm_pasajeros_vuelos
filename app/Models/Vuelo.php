<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'origen',
        'destino'
    ];

    public function pasajeros() {
        return $this->belongsToMany('App\Models\Pasajero')->withTimestamps()->withPivot('num_reserva');
    }
}
