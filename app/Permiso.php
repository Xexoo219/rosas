<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Curso;
use App\Ensenanza;
use App\Estudiante;
use App\Permiso;
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
