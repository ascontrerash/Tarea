<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';
    protected $fillable = array('id');
    protected $primary_key = 'id';
    public $incrementing = false;
}
