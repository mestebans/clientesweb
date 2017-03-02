@extends('layouts.clientesHttpMaster')	


@section('contenido')
	<div class="espacio50"></div>
       <div class="list-group">
			<a href="{{url('clientesweb/estudiantes')}}" class="list-group-item">Obtener todos los estudiantes</a>
			<a href="{{url('clientesweb/profesores')}}" class="list-group-item">Obtener todos los Profesores</a>
			<a href="{{url('clientesweb/cursos')}}" class="list-group-item">Obtener todos los Cursos</a>
	</div>
	<div class="espacio50"></div>
     <div class="list-group">
			<a href="{{url('clientesweb/estudiante/unico')}}" class="list-group-item">Obtener un estudiante</a>
			<a href="{{url('clientesweb/profesor/unico')}}" class="list-group-item">Obtener un Profesor</a>
			<a href="{{url('clientesweb/curso/unico')}}" class="list-group-item">Obtener un Curso</a>
	</div>

	<div class="espacio50"></div>
     <div class="list-group">
			<a href="{{url('clientesweb/estudiantes/agregar')}}" class="list-group-item">Agregar un estudiante</a>
			<a href="{{url('clientesweb/profesores/agregar')}}" class="list-group-item">Agregar un Profesor</a>
			<a href="{{url('clientesweb/cursos/agregar')}}" class="list-group-item">Agregar un Curso</a>
	</div>


<!-- 
	<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on top
</button>

<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on right
</button>

<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on bottom
</button>

<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Popover on left
</button>	
 -->
@endsection