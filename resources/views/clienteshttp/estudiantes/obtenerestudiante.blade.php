@extends('layouts.clientesHttpMaster')	


@section('contenido')
<div class="espacio50"></div>
	<h1>ESTUDIANTE {{$estudiante->nombre}}</h1>
<div class="espacio50"></div>	

	

	@if(count($estudiante) > 0)
		<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Id</th>

				<th>Nombre</th>
			
				<th>Direccion</th>
			
				<th>Telefono</th>
			
				<th>Carrera</th>

				<th>Creado</th>

				<th>Actualizado</th>
			</tr>
		</thead>
		<tbody>

	
			<tr>
				<td>{{$estudiante->id}}</td>

				<td>{{$estudiante->nombre}}</td>
			
				<td>{{$estudiante->direccion}}</td>
			
				<td>{{$estudiante->telefono}}</td>
			
				<td class="text-capitalize">{{$estudiante->carrera}}</td>

				<td>{{$estudiante->created_at}}</td>

				<td>{{$estudiante->updated_at}}</td>
			</tr>
	
		</tbody>
		</table>

	@else	

		<div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>NO HAY ESTUDIANTES</strong> 
		</div>
	@endif
	


	
@endsection