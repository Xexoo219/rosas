<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use App\Comida;
use App\Curso;
use App\Ensenanza;
use App\Estudiante;
use App\Ingreso;
use App\Salida;
use DB;

class Salida extends Model
{
   protected $table = 'salidas';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'estudiantes_id', 'motivo','hora_salida','persona_responsable','telefono','created_at', 'updated_at'];


    public function estudiantes(){

    	return $this->belongsTo(Estudiante::class);
    }




}
