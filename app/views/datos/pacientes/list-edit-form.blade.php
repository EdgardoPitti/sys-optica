@extends('layout')

@section('title') Datos de Pacientes @stop

@section('contenido')
	<h2 class="titulo">Datos de Pacientes</h2>

	<div class="row">
      <div class="col-md-12 col-sm-12 col-lg-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Lista de Pacientes</h3>
            <div class="pull-right">
              <span class="clickable filter" data-toggle="tooltip" title="Buscar Paciente" data-container="body">
                <i class="glyphicon glyphicon-filter"></i>
              </span>
            </div>
          </div>
          <div class="panel-body" style="display:none;">            
        	  <div class="overthrow" style="height:200px;">        
					<table id="pacientes">
					    <thead>
						    <tr class="info">
						        <th data-field="num" data-align="center">#</th>
						        <th data-field="ced" data-align="center">Cédula</th>
						        <th data-field="name" data-align="center">Nombre Completo</th>
						        <th data-field="cel" data-align="center">Celular</th>
						        <th data-field="cla" data-align="center">Clasificación</th>
						        <th data-field="exa" data-align="center">Examen</th>
						        <th data-field="url" data-align="center"></th>
						    </tr>
					    </thead>
					</table>	        
            </div>
            <div class="clear"></div>
        </div>
      </div>
    </div>
	</div>	
	{{ Form::model($datos['paciente'], $datos['form'], array('role' => 'form')) }}
  	<div class="panel panel-default">
  		<div class="panel-heading">
  			<h4 class="panel-title"><i class="fa fa-user"></i> Datos Personales</h4>
  		</div>
  		<div class="panel-body">
			<div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('cedula', 'N&uacute;mero de C&eacute;dula:') }}
		      {{ Form::text('cedula', null, array('placeholder' => 'N&uacute;mero de C&eacute;dula', 'class' => 'form-control', 'required' => 'required')) }}
		    </div> 	
			<div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('fecha_nacimiento', 'Fecha Nacimiento:') }}
		      {{ Form::text('fecha_nacimiento', $datos['paciente']->fecha_nacimiento, array('class' => 'form-control datepicker', 'placeholder' => 'AAAA-MM-DD', 'min' => '1950-01-01', 'max' => '2020-12-31')) }}
		    </div> 
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('primer_nombre', 'Primer Nombre:') }}		    
				{{ Form::text('primer_nombre', null, array('placeholder' => 'Primer Nombre', 'class' => 'form-control')) }}
		    </div>			                       
  		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('segundo_nombre', 'Segundo Nombre:') }}		    
				{{ Form::text('segundo_nombre', null, array('placeholder' => 'Segundo Nombre', 'class' => 'form-control')) }}
		    </div>			                       
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('primer_apellido', 'Primer Apellido:') }}		    
				{{ Form::text('primer_apellido', null, array('placeholder' => 'Primer Apellido', 'class' => 'form-control')) }}
		    </div>			                       		    
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('segundo_apellido', 'Segundo Apellido:') }}		    
				{{ Form::text('segundo_apellido', null, array('placeholder' => 'Segundo Apellido', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('sexo', 'Sexo:') }}
		      {{ Form::select('sexo',  array('0' => 'FEMENINO', '1' => 'MASCULINO'), null, array('class' => 'form-control')); }}    
		    </div>  		
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('id_tipo_sangre', 'Tipo de Sangre:') }}
		      {{ Form::select('id_tipo_sangre',  array('0' => 'SELECCIONE EL TIPO DE SANGRE') + TipoSangre::lists('tipo_sangre', 'id'), null, array('class' => 'form-control')); }}    
		    </div> 	
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('ocupacion', 'Ocupación:') }}		    
				{{ Form::text('ocupacion', null, array('placeholder' => 'Ocupacion', 'class' => 'form-control')) }}
		    </div>	
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('diabetes', 'Diabetes:') }}
		      {{ Form::select('diabetes',  array('0' => 'NO', '1' => 'SI'), null, array('class' => 'form-control')); }}    
		    </div> 
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('clasificacion', 'Clasificación:') }}		    
				{{ Form::select('clasificacion', array('PN' => 'PN', 'PA' => 'PA', 'PE' => 'PE'),null, array('class' => 'form-control')) }}
		    </div>	
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('examen', 'Exámen:') }}		    
				{{ Form::select('examen', array('EG' => 'EG', 'LC' => 'LC', 'PC' => 'PC', 'EX' => 'EX'), null, array('class' => 'form-control')) }}
		    </div>		    	
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('referido_por', 'Referido por:') }}		    
				{{ Form::text('referido_por', null, array('placeholder' => 'Referido', 'class' => 'form-control')) }}
		    </div>
			<div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('observaciones', 'Observaciones:') }}
		      {{ Form::textarea('observaciones', null, array('placeholder' => 'Observaciones', 'class' => 'form-control', 'size' => '3x1')) }}        
		    </div>  
  		</div>
  	</div>
	<div class="panel panel-default">
  		<div class="panel-heading">
  			<h4 class="panel-title"><i class="fa fa-phone"></i> Datos de Contacto</h4>
  		</div>
  		<div class="panel-body">
			<div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('direccion', 'Dirección:') }}
		      {{ Form::textarea('direccion', null, array('placeholder' => 'Dirección', 'class' => 'form-control', 'size' => '3x5')) }}        
		    </div>  
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
  	<center class="margen-bottom">
		 <a href="{{ route('datos.pacientes.index') }}" class="btn btn-default">Limpiar</a>
		{{ Form::button('Guardar', array('type' => 'submit', 'class' => 'btn btn-default')) }}
  	</center>
  	{{ Form::close() }}
@stop
