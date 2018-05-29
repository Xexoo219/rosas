<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use APP\Curso;
use APP\Ensenanza;
use APP\Estudiante;
use APP\Permiso;
use DB;

class Permiso extends Model
{
   protected $table = 'permisos';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'nombre_permiso','created_at', 'updated_at'];


    public function estudiantes(){

    	return $this->hasMany(Estudiante::class);
    }

}
