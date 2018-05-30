<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use APP\Comida;
use APP\Curso;
use APP\Ensenanza;
use APP\Estudiante;
use APP\Ingreso;
use DB;

class Ingreso extends Model
{
   protected $table = 'ingresos';
    protected $primarykey = 'id';
    protected $fillable = ['id', 'estudiantes_id', 'comentario','created_at', 'updated_at'];


    public function estudiantes(){

    	return $this->belongsTo(estudiante::class);
    }

public function scopeDate($query, $date){

       // dd("scope: " . $name);

if($date != ""){



     //   $query->where('codigo_barra', $name);
        $query->where(DB::raw( "(created_at)" ) , "to_timestamp(?)", "%$date%");
        


        }   

    }





}
