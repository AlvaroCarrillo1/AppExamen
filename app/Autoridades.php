<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autoridades extends Model
{
    protected $table = 'autoridades';
    protected $fillable = ['cargo', 'name', 'primer_apellido', 'segundo_apellido', 'fecha_nacimiento', 'email', 'uuid', 'dependencia_id'];


     public function scopeName($query, $name){
        if(trim($name) !=''){
            $query->where(\DB::raw("CONCAT( name, '', primer_apellido)"),"LIKE","%$name%");
        }
    }
       
       public function dependencias()
    {
        return $this->belongsTo('App\Dependencias');
    }
}
