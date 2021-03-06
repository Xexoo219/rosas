<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use APP\Curso;
use APP\Ensenanza;
use APP\Estudiante;
use DB;

class Curso extends Model
{
   protected $table = 'cursos';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'nombre_curso','created_at', 'updated_at'];


    public function estudiantes(){

    	return $this->hasMany(Estudiante::class);
    }

}
