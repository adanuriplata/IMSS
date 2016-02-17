<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historial extends Model
{
    //
    protected $fillable = ['id_datos_generales','peso','peso_habitual','estatura','cintura','cadera','circunferencia','perimetro_abdominal','ejercicio'];
    public function datosgenrales(){
        return $this->belongsTo('App\DatosGenerales');
    }
}
