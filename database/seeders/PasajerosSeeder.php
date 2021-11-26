<?php

namespace Database\Seeders;

use App\Models\Pasajero;
use Illuminate\Database\Seeder;

class PasajerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pasajero1 = new Pasajero;
        $pasajero1->nombre = 'Adrián';
        $pasajero1->dni = '11111111A';
        $pasajero1->edad = 21;
        $pasajero1->save();

        $pasajero2 = new Pasajero;
        $pasajero2->nombre = 'Erick';
        $pasajero2->dni = '22222222B';
        $pasajero2->edad = 20;
        $pasajero2->save();

        $pasajero3 = new Pasajero;
        $pasajero3->nombre = 'Gorka';
        $pasajero3->dni = '33333333C';
        $pasajero3->edad = 19;
        $pasajero3->save();
    }
}
