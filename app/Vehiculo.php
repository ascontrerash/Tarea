<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $fillable = array('placa', 'marca');
    protected $primaryKey = "placa";
    public $incrementing = false;
}
