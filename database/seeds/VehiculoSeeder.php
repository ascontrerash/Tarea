<?php

use Illuminate\Database\Seeder;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Vehiculo::create([
            'placa'=>'abc-123',
            'marca'=>'Toyota',
        ]);
        \App\Vehiculo::create([
            'placa'=>'def-123',
            'marca'=>'Toyota',
        ]);
        \App\Vehiculo::create([
            'placa'=>'ghi-123',
            'marca'=>'Mazda',
        ]);
        \App\Vehiculo::create([
            'placa'=>'jkl-123',
            'marca'=>'Chevrolet',
        ]);
    }
}
