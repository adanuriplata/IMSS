<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosGenerales extends Model
{
    //
    protected $table='datos_generales';
    protected $fillable = ['nombre','paterno','materno','nss','fecha_nacimiento','sexo','escolaridad','ocupacion','num_familia_adultos','num_familia_ninios'];
    public function historial(){
        return $this->hasMany('App\historial');
    }
}
