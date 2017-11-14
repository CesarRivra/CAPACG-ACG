<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    protected $fillable = [
        'Placa', 'Descripcion', 'Programa', 'SubPrograma', 'Color',
    ];

    public function infraestructura()
    {
    	return $this->hasOne('App\Infraestructura');
    }

    public function inmueble()
    {
    	return $this->hasOne('App\Inmueble');
    }

    public function semoviente()
    {
    	return $this->hasOne('App\Semoviente');
    }

    public function colaborador()
    {
    	return $this->belongsTo('App\Colaborador');
    }

    public function dependencia()
    {
    	return $this->belongsTo('App\Dependencia');
    }
}
