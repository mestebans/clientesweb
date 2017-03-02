@extends('layouts.clientesHttpMaster')	


@section('contenido')
<div class="espacio50"></div>
	<h1>PROFESOR {{$profesor->nombre}}</h1>
<div class="espacio50"></div>	
	
	@if(count($profesor) > 0)
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
				<td>{{$profesor->id}}</td>

				<td>{{$profesor->nombre}}</td>
			
				<td>{{$profesor->direccion}}</td>
			
				<td>{{$profesor->telefono}}</td>
			
				<td class="text-capitalize">{{$profesor->profesion}}</td>

				<td>{{$profesor->created_at}}</td>

				<td>{{$profesor->updated_at}}</td>
			</tr>
		
		</tbody>
		</table>

	@else	

		<div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>NO HAY PROFESORES</strong> 
		</div>
	@endif
	


	
@endsection