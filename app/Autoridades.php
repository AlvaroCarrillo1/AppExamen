<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autoridades extends Model
{
    protected $table = 'autoridades';
    protected $fillable = ['cargo', 'nombre', 'primer_apellido', 'segundo_apellido', 'fecha_nacimiento', 'uuid', 'dependencia_id'];
       
       public function dependencias()
    {
        return $this->belongsTo('App\Dependencias');
    }
}
