<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function registrarpersona(){
        $data = request()->validate([
            'cedula' => ['required'],
            'nombre' => ['required'],
        ]);
            //[
            //'cedula.required' => 'Se deben llenar todos los campos',
            //'nombre.required' => 'Se deben llenar todos los campos'
        //]);
        Persona::create([
            'cedula'=>$data['cedula'],
            'nombre'=>$data['nombre'],
        ]);
        return redirect('welcome');

    }


}
