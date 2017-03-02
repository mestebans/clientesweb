@extends('layouts.clientesHttpMaster')	


@section('contenido')
<div class="espacio50"></div>
	<h1>CURSO {{$curso->titulo}}</h1>
<div class="espacio50"></div>	
	
	@if(count($curso) > 0)
		<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th>Id</th>

				<th>Titulo</th>
			
				<th>Descripcion</th>
			
				<th>Valor</th>
			
				<th>Profesor_Id</th>

				<th>Creado</th>

				<th>Actualizado</th>
			</tr>
		</thead>
		<tbody>

		
			<tr>
				<td>{{$curso->id}}</td>

				<td>{{$curso->titulo}}</td>
			
				<td>{{$curso->descripcion}}</td>
			
				<td>{{$curso->valor}}</td>
			
				<td class="text-capitalize">{{$curso->profesor_id}}</td>

				<td>{{$curso->created_at}}</td>

				<td>{{$curso->updated_at}}</td>
			</tr>
	
		</tbody>
		</table>

	@else	

		<div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>NO HAY CURSOS</strong> 
		</div>
	@endif
	


	
@endsection