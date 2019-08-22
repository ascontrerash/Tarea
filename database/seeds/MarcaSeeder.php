<?php

use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Marca::create([
            'id'=>'Toyota',
        ]);
        \App\Marca::create([
            'id'=>'Chevrolet',
        ]);
        \App\Marca::create([
            'id'=>'Mazda',
        ]);
    }
}
