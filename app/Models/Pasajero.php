<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasajero extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'dni',
        'edad'
    ];

    public function vuelos() {
        return $this->belongsToMany('App\Models\Vuelo')->withTimestamps()->withPivot('num_reserva');
    }
}
