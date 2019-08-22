<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $fillable = array('cedula', 'nombre');
    //protected $primary_key = 'idpropiedad';
    protected $primaryKey = "cedula";
    public $incrementing = false;
}
