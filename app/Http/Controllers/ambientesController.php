<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ambientesController extends Controller
{
    //
    public function index(){
    	return "ambientresController";
    }

    public function show(Request $request){
    	return $request->all(); //retornar todo lo que llega a la variable request
    	//return $request->nombre; //retorna el valor de nombre nada más
    	

    }
    public function store(Request $request)
    {
    	//return $request->all();
    	$usuario= \DB::table('usuario')->insert([
    		'nombre' => $request->nombre,
    		'nick'	 =>$request->nick,
    		'email'	 =>$request->email,
    		'password'=>$request->password,
    		'telefono'=>$request->telefono
    		]);
    	//return $request->all();
        return "Registro INSERTADO";
    
    }

}
