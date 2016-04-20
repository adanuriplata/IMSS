<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class pdfController extends Controller
{
    //
    public function github (){
         return \PDF::loadFile('http://localhost:8000')->stream('github.pdf');
    }
    public function reporte(Request $request){
       if($request->ajax())
       {
           $datos=array(
                'nombreCompleto'=>$request->nombreCompleto,
                'nss'=>$request->nss,
                'edad'=>$request->edad,
                'escolaridad'=>$request->escolaridad,
                'ocupacion'=>$request->ocupacion,
                'menores'=>$request->menores,
                'adultos'=>$request->adultos,
                'ejercicio'=>$request->ejercicio
           );
           //return \PDF::LoadView('formatos.formato1',$datos)->download('nombre.pdf');
           echo "hola";
       }
    }
    public function vista(){

    }
    public function formato_dos(){
        return view('formatos.formato2');
    }
}
