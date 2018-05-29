<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use APP\Curso;
use APP\Ensenanza;
use APP\Estudiante;
use DB;

class Ensenanza extends Model
{
   protected $table = 'ensenanzas';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'nombre_ensenanza','created_at', 'updated_at'];


    public function estudiantes(){

    	return $this->hasMany(Estudiante::class);
    }

}
