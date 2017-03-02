<?php

namespace App\Http\Controllers\clientesweb;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class estudiantesController extends Controller
{
    


    public function mostrarestudiantes($value='')
    {
    	
    	$estudiantes = $this->ObtenertodoslosEstudiantes();

    //	dd($estudiantes);



    	return View('clienteshttp.estudiantes.listaestudiantes', compact('estudiantes')); 

    }

    protected function ObtenertodoslosEstudiantes($value='')
    {
    	$respuesta = $this->realizarPeticion('GET','https://apilumen.juandmegon.com/estudiantes');
        dd($respuesta);
    	$datos = json_decode($respuesta);
    	//dd(get_resource_type($datos));
    		//data es el array del que comienza $respuesta;

    	//dd($datos);
    	$estudiantes = $datos->data;
    	return $estudiantes;
    }

    public function mostrarestudiante()
    {
    	//return 'has vuelto';
    							
    	///dd($validador);
    	return View('clienteshttp.estudiantes.mostrarestudiante'); 

    }

    public function obtenerestudiante(Request $request)
    {

    	$datos =  $request->all() ;
    	$validacion = [ 'idestudiante' => 'required|numeric'];
		$mensajes = ['required' => 'El campo :attribute es obligatorio',
    				'numeric' => 'El campo :attribute tiene que ser un numero'];


    	$validador = \Validator::make($datos,$validacion,$mensajes);
    	//dd($validador->errors());
    	if ($validador->fails()) :
    	//	echo 'pepito';

    		return redirect()->back()->withErrors($validador);
    		
    	endif;

        $idestudiante = $request->idestudiante;

     
        $estudiante = $this->obtenerUnEstudiante($idestudiante);
       // dd($estudiante);

         return View('clienteshttp.estudiantes.obtenerestudiante',compact('estudiante'));     
    }

    public function obtenerUnEstudiante($id)
    {
        $respuesta = $this->realizarPeticion('GET','https://apilumen.juandmegon.com/estudiantes/'.$id);
         $datos = json_decode($respuesta);

        $estudiante = $datos->data;
        // dd($estudiante->id);
        //  if (!$datos->data->id) :
        //     return 'ESTE ESTUDIANTE NO EXISTE';
        //  endif;
        return $estudiante;
    }

    public function agregarEstudiantes()
    {
       return view('clienteshttp.estudiantes.agregarestudiante');
    }

     public function crearEstudiantes()
    {  dump(\Request::all());
        $accessToken = 'Bearer '. $this->ObtenerAccessToken();
        dump($accessToken);
        $parametros = ['headers' => ['Authorization' => $accessToken],'form_params' => \Request::all()];
        $respuesta = json_decode($this->realizarPeticion('POST','https://apilumen.juandmegon.com/estudiantes', $parametros));
        dd($respuesta);
      //  return redirect()->to('/estudiantes');
       //  $estudiantescreados = \Request::all();
       // return response()->json($estudiantescreados);
    }
}
