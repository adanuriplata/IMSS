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
    Route::post('/paciente/buscar/','MainController@buscar');
    Route::post('/paciente/guardar/consulta','MainController@datosHistorial');
    
    Route::get ('/github', 'pdfController@github');
    Route::post('/reporte/pdf','pdfController@reporte');

});
