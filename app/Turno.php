<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    protected $table = 'cat_turnos';

    protected $fillable = ['descripcion'];

    public function empleado()
    {
    	return $this->hasMany('App\Empleado', 'id_turno', 'id');
    }
}
