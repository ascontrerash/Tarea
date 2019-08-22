<?php

use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Persona::create([
            'cedula'=>'1234567890',
            'nombre'=>'Kermit',
        ]);
        \App\Persona::create([
            'cedula'=>'2345678901',
            'nombre'=>'Piggy',
        ]);
        \App\Persona::create([
            'cedula'=>'3456789012',
            'nombre'=>'Gonzo',
        ]);
        \App\Persona::create([
            'cedula'=>'4567890123',
            'nombre'=>'Fozzie',
        ]);
    }
}
