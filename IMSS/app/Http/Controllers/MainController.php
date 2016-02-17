<?php

namespace App\Http\Controllers;

use App\DatosGenerales;
use App\historial;
use App\MiembrosAmputados;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    //
    public function index(){
        $miembrosAmp=MiembrosAmputados::all();
        return view('home.index',['miembrosAmp'=>$miembrosAmp]);

    }
    public function busqueda(){
        return view('home.busqueda');
    }
    public function buscar(Request $request){
        $this->validate($request,[
            'nss'=>'required'
        ]);
        $paciente=DB::table('datos_generales')->select('*')->where('nss',"=",$request->input('nss'))->get();
        if($paciente){
            return view('home.paciente',['paciente'=>$paciente]);
        }else{
            $noexiste="El paciente con el numero de seguro social: ".$request->input('nss')." "."no existe";
            return view('home.busqueda',["noexiste"=>$noexiste]);
        }

    }
    public function datosHistorial(Request $request){
        $this->validate($request,[
            'PesoActual'=>'required',
            'PesoHabitual'=>'required',
            'Estatura'=>'required',
            'Cintura'=>'required',
            'Cadera'=>'required',
            'PerimetroAbdominal'=>'required',
            'CircunferenciaMuneca'=>'required',
        ]);
        historial::create([
            'id_datos_generales'=>$request->input('id'),
            'peso'=>$request->input('PesoActual'),
            'peso_habitual'=>$request->input('PesoHabitual'),
            'estatura'=>$request->input('Estatura'),
            'cintura'=>$request->input('Cintura'),
            'cadera'=>$request->input('Cadera'),
            'circunferencia'=>$request->input('CircunferenciaMuneca'),
            'perimetro_abdominal'=>$request->input('PerimetroAbdominal'),
            'ejercicio'=>$request->input('ejercicio'),

        ]);

    }
    /**
     * @param Request $request
     * @return $this
     */
    public function historial(Request $request){

        $this->validate($request,[
            'Nombre'=>'required',
            'Paterno'=>'required',
            'Materno'=>'required',
            'Nss'=>'required|unique:datos_generales,nss',
            //'FechaNacimiento'=>'required',
            'Genero'=>'required',
            'PesoActual'=>'required',
            'PesoHabitual'=>'required',
            'Estatura'=>'required',
            'Cintura'=>'required',
            'Cadera'=>'required',
            'PerimetroAbdominal'=>'required',
            'CircunferenciaMuneca'=>'required',
            'Escolaridad'=>'required',
            'Ocupacion'=>'required'


        ]);

        DatosGenerales::create([
            'nombre'=>$request->input('Nombre'),
            'paterno'=>$request->input('Paterno'),
            'materno'=>$request->input('Materno'),
            'nss'=>$request->input('Nss'),
            'fecha_nacimiento'=>$request->input('dia')."/".$request->input('mes')."/".$request->input('anio'),
            'sexo'=>$request->input('Genero'),
            'escolaridad'=>$request->input('Escolaridad'),
            'ocupacion'=>$request->input('Ocupacion'),
            'num_familia_adultos'=>$request->input('adultos'),
            'num_familia_ninios'=>$request->input('ninios'),
        ]);
        $query=DB::table('datos_generales')->select('id')->where('nss','=',$request->input('Nss'))->get();
        if($query){
            foreach($query as $q)
            {
                $id=$q->id;
            }
            historial::create([
                'id_datos_generales'=>$id,
                'peso'=>$request->input('PesoActual'),
                'peso_habitual'=>$request->input('PesoHabitual'),
                'estatura'=>$request->input('Estatura'),
                'cintura'=>$request->input('Cintura'),
                'cadera'=>$request->input('Cadera'),
                'circunferencia'=>$request->input('CircunferenciaMuneca'),
                'perimetro_abdominal'=>$request->input('PerimetroAbdominal'),
                'ejercicio'=>$request->input('ejercicio'),

            ]);

        }

        return "lo hizo compa :,v";




    }

}
