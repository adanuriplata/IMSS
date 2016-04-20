<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/nuevo-usuario', 'MainController@index');

    Route::post('/historial/guardar','MainController@historial');
    Route::get('/','MainController@busqueda');
    Route::get('/paciente/nueva-consulta/','MainController@consulta');
    Route::get("/prueba/{nss}",function($nss) {
        $paciente=DB::table('datos_generales')->select('*')->where('nss',"=",$nss)->get();
        return view('home.paciente',['paciente'=>$paciente]);
    });
    Route::post('/paciente/buscar/','MainController@buscar');
    Route::post('/paciente/guardar/consulta','MainController@datosHistorial');
    
    Route::get ('/github', 'pdfController@github');
    Route::post('/reporte/pdf','pdfController@reporte');
    Route::get('/impresion/formato_dos','pdfController@impresion_formato');
    Route::get('/revision/formato_dos','pdfController@formato_dos');

    Route::get('imprimir/formato',function(){
        return view('layout-formato');
    });
});
