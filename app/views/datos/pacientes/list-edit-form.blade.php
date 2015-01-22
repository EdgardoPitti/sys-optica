@extends('layout')

@section('title') Registro de Pacientes @stop

@section('contenido')
	<h2 class="titulo">Registro de Paciente</h2>

	{{ Form::open(array('url' => 'registro'), array('role' => 'form')) }}
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
		      {{ Form::select('sexo',  array('0' => 'FEMENINO', '1' => 'MASCULINO'), $datos['paciente'][0]->sexo, array('class' => 'form-control')); }}    
		    </div>  		
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('id_tipo_sanguineo', 'Tipo de Sangre:') }}
		      {{ Form::select('id_tipo_sanguineo',  array('0' => 'SELECCIONE EL TIPO DE SANGRE') + Tiposangre::lists('tipo_sangre', 'id_tipo_sanguineo'), $datos['paciente'][0]->id_tipo_sangre, array('class' => 'form-control')); }}    
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
		      {{ Form::select('celular', null, array('placeholder' => 'Celular', 'class' => 'form-control')); }}    
		    </div>  
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('telefono', 'Teléfono:') }}
		      {{ Form::select('telefono', null, array('placeholder' => 'Teléfono', 'class' => 'form-control')); }}    
		    </div>  
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('email', 'Correo Electrónico:') }}
		      {{ Form::select('email', null, array('placeholder' => 'Correo Electrónico', 'class' => 'form-control')); }}    
		    </div>  
  		</div>
  	</div>
  	{{ Form::close() }}
@stop