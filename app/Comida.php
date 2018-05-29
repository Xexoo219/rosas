<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use APP\Comida;
use APP\Curso;
use APP\Ensenanza;
use APP\Estudiante;
use DB;

class Comida extends Model
{
   protected $table = 'comidas';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'estudiantes_id','created_at', 'updated_at'];


    public function estudiantes(){

    	return $this->belongsTo(estudiante::class);
    }

}
