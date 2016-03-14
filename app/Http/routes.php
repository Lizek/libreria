<?php


Route::get('/', function () {
    //return view('welcome');
    return view('website.index');
    //return "Usando Git";
});

Route::get('/tienda', function(){
	return view('website.tienda');
});

Route::post('/form', 'ambientesController@store');
//COntroladores
Route::get('/controller', 'ambientesController@index'); //Nombre del controlador y método
