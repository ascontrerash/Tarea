<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $table = 'vehiculos';
    protected $fillable = array('placa', 'marca');
    //protected $primary_key = 'idpropiedad';
    protected $primaryKey = "placa";
    public $incrementing = false;
}
