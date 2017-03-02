<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

//PERSONALIZADO
use GuzzleHttp\Client;
//use GuzzleHttp\Exception\ClientException;



class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //PERSONALIZADO
    protected function realizarPeticion($metodo, $url, $parametros = [])
    {
    	$cliente = new Client(['curl' => [CURLOPT_CAINFO => base_path('resources/certificadoscreados/cacert.pem')]]);

    	$respuesta = $cliente->request($metodo, $url, $parametros);

    	return $respuesta->getBody()->getContents();
    }

    protected function ObtenerAccessToken()
    {
    	//ACCEDEMOS AL ARCHIVO QUE ESTA EN CONFIG EN LA CARPETA QUE HEMOS CREADO
    	$clientId = config('configuracionpersonalizadaOATH.client_id');
    	$client_secret = config('configuracionpersonalizadaOATH.client_secret');
    	$grantype = config('configuracionpersonalizadaOATH.grant_type');

    	// $superarray = [$clientId,$client_secret,$grantype,1,true,1.5];


    	// foreach ($superarray as $key =>  $elemento):
    	// 		echo $key .' => ' . gettype($elemento) . ' || ';
    	// endforeach;
    	// exit;
    	$parametros = ['form_params' => ['grant_type' => $grantype, 'client_id' => $clientId, 'client_secret' => $client_secret]];
    	$respuesta = json_decode($this->realizarPeticion('POST','https://apilumen.juandmegon.com/oauth/access_token', $parametros));

    	//dd(gettype($respuesta));
    	$accesstoken2 = $respuesta->access_token;
    	return $accesstoken2;
    }
}
