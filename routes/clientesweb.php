<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => 'web' ], function() {
			Route::get('principal/', function () {
			    return view('clienteshttp.principal');
			});
			Route::get('/estudiantes', 'clientesweb\estudiantesController@mostrarestudiantes');
			Route::get('/profesores', 'clientesweb\profesoresController@mostrarprofesores');
			Route::get('/cursos', 'clientesweb\cursosController@mostrarcursos');

			Route::get('/estudiante/unico', 'clientesweb\estudiantesController@mostrarestudiante');
			Route::post('/estudiante/unico', 'clientesweb\estudiantesController@obtenerestudiante');
			Route::get('/profesor/unico', 'clientesweb\profesoresController@mostrarprofesor');
			Route::post('/profesor/unico', 'clientesweb\profesoresController@obtenerprofesor');
			Route::get('/curso/unico', 'clientesweb\cursosController@mostrarcurso');
			Route::post('/curso/unico', 'clientesweb\cursosController@obtenercurso');

			Route::get('estudiantes/agregar', 'clientesweb\estudiantesController@agregarEstudiantes');
			Route::post('estudiantes/agregar', 'clientesweb\estudiantesController@crearEstudiantes');
			Route::get('profesores/agregar', 'clientesweb\profesoresController@agregarprofesores');
			Route::get('cursos/agregar', 'clientesweb\cursosController@agregarcursos');




			//Route::resource('user', 'UserController');
			Route::get('mensaje', function() {
			    return 'mensaje desde ruta clientesweb';
			});

			Route::get('supertoken', 'Controller@ObtenerAccessToken');
});



//Route::get('');
// Auth::routes();

// Route::get('/home', 'HomeController@index');


//EVITA INTRODUCIR EN LA BARRA DE TAREAS.

// Route::any('clientesweb/{inexistentes}', function(){
// 	return 'App:ClientesWEB :: Esta ruta es invalida y no puedes acceder';
// });


