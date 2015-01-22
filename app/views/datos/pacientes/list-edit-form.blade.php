@extends('layout')

@section('title') Datos de Pacientes @stop

@section('contenido')
	<h2 class="titulo">Datos de Pacientes</h2>

	{{ Form::model($datos['paciente'], $datos['form'], array('role' => 'form')) }}
  	<div class="panel panel-default">
  		<div class="panel-heading">
  			<h4 class="panel-title"><i class="fa fa-user"></i> Datos Personales</h4>
  		</div>
  		<div class="panel-body">
			<div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('cedula', 'N&uacute;mero de C&eacute;dula') }}
		      {{ Form::text('cedula', null, array('placeholder' => 'N&uacute;mero de C&eacute;dula', 'class' => 'form-control', 'required' => 'required')) }}
		    </div> 	
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('primer_nombre', 'Primer Nombre:') }}		    
				{{ Form::text('primer_nombre', null, array('placeholder' => 'Primer Nombre', 'class' => 'form-control', 'required' => 'required')) }}
		    </div>			                       
  		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('segundo_nombre', 'Segundo Nombre:') }}		    
				{{ Form::text('segundo_nombre', null, array('placeholder' => 'Segundo Nombre', 'class' => 'form-control', 'required' => 'required')) }}
		    </div>			                       
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('primer_apellido', 'Primer Apellido:') }}		    
				{{ Form::text('primer_apellido', null, array('placeholder' => 'Primer Apellido', 'class' => 'form-control', 'required' => 'required')) }}
		    </div>			                       		    
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('segundo_apellido', 'Segundo Apellido:') }}		    
				{{ Form::text('segundo_apellido', null, array('placeholder' => 'Segundo Apellido', 'class' => 'form-control', 'required' => 'required')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('sexo', 'Sexo:') }}
		      {{ Form::select('sexo',  array('0' => 'FEMENINO', '1' => 'MASCULINO'), null, array('class' => 'form-control')); }}    
		    </div>  		
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('id_tipo_sangre', 'Tipo de Sangre:') }}
		      {{ Form::select('id_tipo_sangre',  array('0' => 'SELECCIONE EL TIPO DE SANGRE') + TipoSangre::lists('tipo_sangre', 'id'), null, array('class' => 'form-control')); }}    
		    </div> 	                       		    
  		</div>
  	</div>
	<div class="panel panel-default">
  		<div class="panel-heading">
  			<h4 class="panel-title"><i class="fa fa-phone"></i> Datos de Contacto</h4>
  		</div>
  		<div class="panel-body">
  			<div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('celular', 'Celular:') }}
		      {{ Form::text('celular', null, array('placeholder' => 'Celular', 'class' => 'form-control')); }}    
		    </div>  
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('telefono', 'Teléfono:') }}
		      {{ Form::text('telefono', null, array('placeholder' => 'Teléfono', 'class' => 'form-control')); }}    
		    </div>  
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('email', 'Correo Electrónico:') }}
		      {{ Form::text('email', null, array('placeholder' => 'Correo Electrónico', 'class' => 'form-control')); }}    
		    </div>
  		</div>
  	</div>
  	<center>
		{{ Form::button('Paciente', array('type' => 'submit', 'class' => 'btn btn-primary')) }}
  	</center>
  	{{ Form::close() }}
@stop
