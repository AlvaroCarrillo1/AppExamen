<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencias extends Model
{
    //
    protected $table = 'dependencias';

	protected $fillable = ['nombre','uuid'];

	public $timestamps = false;

    
    
    public function autoridades()
    {
        return $this->hasMany('App\Autoridades');
    }
}
