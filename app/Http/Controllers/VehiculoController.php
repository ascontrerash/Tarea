<?php

namespace App\Http\Controllers;

use App\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function listar(){
        $vehiculos = Vehiculo::all();
        return $vehiculos;


    }
    public function registrarvehiculo(){
        $data = request()->validate([
            'placa' => ['required'],
            'marca' => ['required'],
        ], [
            'placa.required' => 'Se deben llenar todos los campos',
            'marca.required' => 'Se deben llenar todos los campos'
        ]);
        Vehiculo::create([
            'placa'=>$data['placa'],
            'marca'=>$data['marca'],
            ]);
        return redirect('welcome');

    }

    public function crearvehiculo(){
        return view('crearvehiculo');
    }
}
