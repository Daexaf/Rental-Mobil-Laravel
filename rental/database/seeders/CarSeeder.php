<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::create([
            'merk' => 'Toyota',
            'model' => 'Corolla',
            'no_plat' => 'B 1234 CD',
            'tarif_sewa' => 200000, // misalnya tarif sewa per hari
        ]);
    }
}
