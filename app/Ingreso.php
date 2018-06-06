<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Comida;
use App\Curso;
use App\Ingreso;
use App\Ensenanza;
use App\Estudiante;

use DB;

class Ingreso extends Model
{
   protected $table = 'ingresos';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'estudiantes_id', 'comentario','created_at', 'updated_at'];


    public function estudiantes(){

    	return $this->belongsTo(Estudiante::class);
    }




}
