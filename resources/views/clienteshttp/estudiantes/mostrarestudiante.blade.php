@extends('layouts.clientesHttpMaster')	


@section('contenido')
<div class="espacio50"></div>
	<h1>ESTUDIANTE ID</h1>
<div class="espacio50"></div>

		@if (count($errors) > 0)
		
    <div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Ha habido un error(es)</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
        </ul>
    </div>
	@endif


	{!! Form::open(['url' => 'clientesweb/estudiante/unico','method' => 'POST']) !!}
		<fieldset class="form-group">
			{!! Form::label('', 'ID ESTUDIANTE', []) !!}
			{!! Form::number('idestudiante','', ['class' => 'form-control']) !!}
	
		</fieldset>
	

	{!! Form::submit('OBTENER ESTUDIANTE', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}


	
		<!-- <div class="alert alert-info">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>NO HAY ESTUDIANTES</strong> 
		</div>
 -->
	


	
@endsection