<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencias extends Model
{
    //
    protected $table = 'dependencias';

	protected $fillable = ['name','uuid'];

	public $timestamps = false;

    

     public function scopeName($query, $name){
        if(trim($name) !=''){
            $query->where(\DB::raw("CONCAT( name, '', uuid)"),"LIKE","%$name%");
        }
    }
       
    
    public function autoridades()
    {
        return $this->hasMany('App\Autoridades');
    }
}
