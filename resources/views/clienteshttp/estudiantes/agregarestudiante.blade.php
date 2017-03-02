@extends('layouts.clientesHttpMaster')	


@section('contenido')
<div class="espacio50"></div>
	<h1>CREAR ESTUDIANTE</h1>
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

	<form action="{{url('clientesweb/estudiantes/agregar')}}" method ="POST">
	{{-- Form::open(['url' => 'clientesweb/estudiantes/agregar','method' => 'POST']) --}}
		<fieldset class="form-group">
			{!! Form::label('', 'Nombre', []) !!}
			{!! Form::text('nombre','', ['class' => 'form-control', 'placeholder' => 'Introduce el nombre del estudiante']) !!}
	
		</fieldset>

		<fieldset class="form-group">
			{!! Form::label('', 'Direccion', []) !!}
			{!! Form::text('direccion','', ['class' => 'form-control', 'placeholder' => 'Introduce la direccion del estudiante']) !!}
	
		</fieldset>

		<fieldset class="form-group">
			{!! Form::label('', 'Telefono', []) !!}
			{!! Form::text('telefono','', ['class' => 'form-control', 'placeholder' => 'Introduce el telefono del estudiante']) !!}
	
		</fieldset>

		<fieldset class="form-group">
			{{-- Form::label('', 'Carrera', []) --}}
			{{-- Form::select('carrera', ['matematicas' => 'Matematicas', 'fisica'  => 'Fisica','ingenieria'  => 'Ingenieria'], '', ['class' => 'form-control', 'placeholder' => 'Introduce la carrera del estudiante']) --}}
			
	
		</fieldset>

			<fieldset class="form-group">
			<label for="">Carrera</label>
			<select name="carrera" id="inputCarrera" class="form-control" required="required">
				<option selected="selected" value="">Introduce la carrera del estudiante</option>
				<option value="matematicas">Matematicas</option>
				<option value="fisica">Fisica</option>
				<option value="ingenieria">Ingenieria</option>

			</select>
		</fieldset>

	
	

	{!! Form::submit('CREAR ESTUDIANTE', ['class' => 'btn btn-info']) !!}
</form>
	{{-- Form::close() --}}


@endsection