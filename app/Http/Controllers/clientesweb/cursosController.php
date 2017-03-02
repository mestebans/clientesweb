<?php

namespace App\Http\Controllers\clientesweb;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class cursosController extends Controller
{
     public function mostrarcursos($value='')
    {
    	
    	$cursos = $this->ObtenertodoslosCursos();

    	//dd($cursos);



    	return View('clienteshttp.cursos.listacursos', compact('cursos')); 

    }

    protected function Obtenertodosloscursos($value='')
    {
    	$respuesta = $this->realizarPeticion('GET','https://apilumen.juandmegon.com/cursos');

    	$datos = json_decode($respuesta);
    	//dd(get_resource_type($datos));
    		//data es el array del que comienza $respuesta;

    	//dd($datos);
    	$estudiantes = $datos->data;
    	return $estudiantes;
    }

    public function mostrarcurso()
    {
      return View('clienteshttp.cursos.mostrarcurso');
    }

    public function obtenercurso(Request $request)
    {
         $datos = $request->all();
        $validaciones = [ 'idcurso' => 'required|numeric'];
        $mensajes = ['required' => 'El campo :attribute es obligatorio para este formulario',
                    'numeric' => 'El campo :attribute tiene que ser un numero para este formulario'];

         $validador = \Validator::make($datos, $validaciones, $mensajes);   

         if ($validador->fails()) :
            return redirect()->back()->withErrors($validador)->withInput($datos);                     
        endif;
                                 



        $idcurso = $request->get('idcurso');
        $curso = $this->ObtenerunCurso($idcurso);
       return View('clienteshttp.cursos.obtenercurso', compact('curso'));
    }

    protected function ObtenerunCurso($id)
    {
          $respuesta = $this->realizarPeticion('GET','https://apilumen.juandmegon.com/cursos/'.$id);
         $datos = json_decode($respuesta);

        $curso = $datos->data;
        // dd($estudiante->id);
        //  if (!$datos->data->id) :
        //     return 'ESTE ESTUDIANTE NO EXISTE';
        //  endif;
        return $curso;



    }


}
