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

class Estudiante extends Model
{
    protected $table = 'estudiantes';
    protected $primarykey = 'id';
    protected $fillable = ['id','cursos_id', 'ensenanzas_id' ,'nombres','apellidos','rut', 'domicilio','codigo_barra','entrada_especial', 'permisos_entrada_id', 'salida_especial','permisos_salida_id',
    'permisos_almuerzo_id','permisos_utp_id','created_at', 'updated_at'];

 //protected $fillable = ['product'];

    public function ensenanzas(){

        return $this->belongsTo(Ensenanza::class);
    }
    public function cursos(){

        return $this->belongsTo(Curso::class);
    }

      public function permisos(){

        return $this->belongsTo(Permiso::class);
    }



    public function scopeName($query, $name){

       // dd("scope: " . $name);

if($name != ""){



     //   $query->where('codigo_barra', $name);
        $query->where(DB::raw( "(codigo_barra)" ) , "LIKE", "%$name%") 
        ->orWhere(DB::raw( "(rut)" ) , "LIKE", "%$name%") 
         ->orWhere(\DB::raw("CONCAT(nombres, ' ', apellidos)"), "LIKE", "%$name%");



        }   

    }
    
}
