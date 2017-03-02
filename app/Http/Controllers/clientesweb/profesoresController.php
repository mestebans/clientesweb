<?php

namespace App\Http\Controllers\clientesweb;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class profesoresController extends Controller
{
    public function mostrarProfesores($value='')
    {
    	
    	$profesores = $this->ObtenertodoslosProfesores();

    //	dd($estudiantes);



    	return View('clienteshttp.profesores.listaprofesores', compact('profesores')); 

    }

    protected function ObtenertodoslosProfesores($value='')
    {
    	$respuesta = $this->realizarPeticion('GET','https://apilumen.juandmegon.com/profesores');

    	$datos = json_decode($respuesta);
    	//dd(get_resource_type($datos));
    		//data es el array del que comienza $respuesta;

    	//dd($datos);
    	$estudiantes = $datos->data;
    	return $estudiantes;
    }

    public function mostrarprofesor()
    {

         return View('clienteshttp.profesores.mostrarprofesor');   
    }

    public function obtenerprofesor(Request $request)
    {
        
        $datos =  $request->all() ;
        $validacion = [ 'idprofesor' => 'required|numeric'];
        $mensajes = ['required' => 'El campo :attribute para la pagina de profesores es obligatorio',
                    'numeric' => 'El campo :attribute para la pagina de profesores tiene que ser un numero'];


        $validador = \Validator::make($datos,$validacion,$mensajes);
        //dd($validador->errors());
        if ($validador->fails()) :
        //  echo 'pepito';

            return redirect()->back()->withErrors($validador);
            
        endif;

            
        $idprofesor = $request->idprofesor;
          //  dd($idprofesor);
        $profesor = $this->obtenerUnProfesor($idprofesor);

         return View('clienteshttp.profesores.obtenerprofesor',compact('profesor'));     
    }

     protected function obtenerUnProfesor($id)
    {

        $respuesta = $this->realizarPeticion('GET','https://apilumen.juandmegon.com/profesores/'.$id);
         $datos = json_decode($respuesta);

        $profesor = $datos->data;
      
        return $profesor;
    }
}
