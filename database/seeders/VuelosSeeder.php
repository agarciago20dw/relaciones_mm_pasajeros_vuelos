<?php

namespace Database\Seeders;

use App\Models\Vuelo;
use Illuminate\Database\Seeder;

class VuelosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vuelo1 = new Vuelo;
        $vuelo1->nombre = 'vuelo M-L';
        $vuelo1->origen = 'Madrid';
        $vuelo1->destino = 'Londres';
        $vuelo1->save();

        $vuelo2 = new Vuelo;
        $vuelo2->nombre = 'vuelo B-NY';
        $vuelo2->origen = 'Berlín';
        $vuelo2->destino = 'Nueva York';
        $vuelo2->save();

        $vuelo3 = new Vuelo;
        $vuelo3->nombre = 'vuelo P-O';
        $vuelo3->origen = 'París';
        $vuelo3->destino = 'Oslo';
        $vuelo3->save();
    }
}
