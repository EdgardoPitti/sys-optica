@extends('layout')

@section('title') Citas @stop

@section('contenido')
	<h2 class="titulo">Citas</h2>


	{{ Form::model($datos['cita'], $datos['form'], array('role' => 'form')) }}
  	<div class="panel panel-default">
  		<div class="panel-heading">
  			<h4 class="panel-title"><i class="fa fa-user"></i> Datos de la Cita</h4>
  		</div>
  		<div class="panel-body">
			<div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('interrogatorio', 'Interrogatorio:') }}
		      {{ Form::textarea('interrogatorio', null, array('placeholder' => 'Interrogatorio', 'class' => 'form-control', 'size' => '3x1')) }}        
		    </div>  
			<div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('exploracion_conj', 'Exploración Conj:') }}
		      {{ Form::text('exploracion_conj', null, array('placeholder' => 'Exploración Conj', 'class' => 'form-control')) }}
		    </div> 	
			<div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('cornea', 'Córnea:') }}
		      {{ Form::text('cornea', null, array('placeholder' => 'Córnea', 'class' => 'form-control')) }}
		    </div> 
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('parpados', 'Párpados:') }}		    
				{{ Form::text('parpados', null, array('placeholder' => 'Párpados', 'class' => 'form-control', 'required' => 'required')) }}
		    </div>			                       
  		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('pestagna', 'Pestañas:') }}		    
				{{ Form::text('pestagna', null, array('placeholder' => 'Pestañas', 'class' => 'form-control')) }}
		    </div>			                       
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('pupilas', 'Pupilas:') }}		    
				{{ Form::text('pupilas', null, array('placeholder' => 'Pupilas', 'class' => 'form-control', 'required' => 'required')) }}
		    </div>			                       		    
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('ref_pup', 'Ref. Pup:') }}		    
				{{ Form::text('ref_pup', null, array('placeholder' => 'Ref. Pup', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('av_sc_od_u', 'A V sc O.D Arriba:') }}		    
				{{ Form::text('av_sc_od_u', null, array('placeholder' => ' A V sc O.D', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('av_sc_od_d', 'A V sc O.D Abajo:') }}		    
				{{ Form::text('av_sc_od_d', null, array('placeholder' => ' A V sc O.D', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('av_sc_oi_u', 'A V sc O.I Arriba:') }}		    
				{{ Form::text('av_sc_oi_u', null, array('placeholder' => ' A V sc O.I', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('av_sc_oi_d', 'A V sc O.I Abajo:') }}		    
				{{ Form::text('av_sc_oi_d', null, array('placeholder' => ' A V sc O.I', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('cap_visual_od', 'Cap. Visual O.D:') }}		    
				{{ Form::text('cap_visual_od', null, array('placeholder' => 'Cap. Visual O.D', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('cap_visual_oi', 'Cap. Visual O.I:') }}		    
				{{ Form::text('cap_visual_oi', null, array('placeholder' => 'Cap. Visual O.I', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('av_cc_od', 'A V cc O.D:') }}		    
				{{ Form::text('av_cc_od', null, array('placeholder' => 'A V cc O.D', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('av_cc_od_esf', 'A V cc O.D Esf:') }}		    
				{{ Form::text('av_cc_od_esf', null, array('placeholder' => 'A V cc O.D Esf', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('av_cc_od_cil', 'A V cc O.D Cil:') }}		    
				{{ Form::text('av_cc_od_cil', null, array('placeholder' => 'A V cc O.D Cil', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('av_cc_od_add', 'A V cc O.D Add:') }}		    
				{{ Form::text('av_cc_od_add', null, array('placeholder' => 'A V cc O.D Add', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('av_cc_oi', 'A V cc O.I:') }}		    
				{{ Form::text('av_cc_oi', null, array('placeholder' => 'A V cc O.I', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('av_cc_oi_esf', 'A V cc O.I Esf:') }}		    
				{{ Form::text('av_cc_oi_esf', null, array('placeholder' => 'A V cc O.I Esf', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('av_cc_oi_cil', 'A V cc O.I Cil:') }}		    
				{{ Form::text('av_cc_oi_cil', null, array('placeholder' => 'A V cc O.I Cil', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('av_cc_oi_add', 'A V cc O.I Add:') }}		    
				{{ Form::text('av_cc_oi_add', null, array('placeholder' => 'A V cc O.I Add', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('oftalmoscopia_od', 'Oftalmoscopia O.D:') }}		    
				{{ Form::text('oftalmoscopia_od', null, array('placeholder' => 'Oftalmoscopia O.D', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('oftalmoscopia_oi', 'Oftalmoscopia O.I:') }}		    
				{{ Form::text('oftalmoscopia_oi', null, array('placeholder' => 'Oftalmoscopia O.I', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('queratrometria_od', 'Queratrometria O.D:') }}		    
				{{ Form::text('queratrometria_od', null, array('placeholder' => 'Queratrometria O.D', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('queratrometria_oi', 'Queratrometria O.I:') }}		    
				{{ Form::text('queratrometria_oi', null, array('placeholder' => 'Queratrometria O.I', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('mortilidad_ocular_od', 'Mortilidad Ocular O.D:') }}		    
				{{ Form::text('mortilidad_ocular_od', null, array('placeholder' => 'Mortilidad Ocular O.D', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('mortilidad_ocular_oi', 'Mortilidad Ocular O.I:') }}		    
				{{ Form::text('mortilidad_ocular_oi', null, array('placeholder' => 'Mortilidad Ocular O.I', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('sentido_cromatico', 'Sentido Cromático:') }}		    
				{{ Form::text('sentido_cromatico', null, array('placeholder' => 'Sentido Cromático', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('tonometria_od', 'Tonometría O.D:') }}		    
				{{ Form::text('tonometria_od', null, array('placeholder' => 'Tonometría O.D', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('tonometria_oi', 'Tonometría O.I:') }}		    
				{{ Form::text('tonometria_oi', null, array('placeholder' => 'Tonometría O.I', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('grad_od_esf', 'Graduación O.D Esf:') }}		    
				{{ Form::text('grad_od_esf', null, array('placeholder' => 'Graduación O.D Esf', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('grad_od_cil', 'Graduación O.D Cil:') }}		    
				{{ Form::text('grad_od_cil', null, array('placeholder' => 'Graduación O.D Cil', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('grad_od_eje', 'Graduación O.D Eje:') }}		    
				{{ Form::text('grad_od_eje', null, array('placeholder' => 'Graduación O.D Eje', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('grad_od_av', 'Graduación O.D AV:') }}		    
				{{ Form::text('grad_od_av', null, array('placeholder' => 'Graduación O.D AV', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('grad_oi_esf', 'Graduación O.I Esf:') }}		    
				{{ Form::text('grad_oi_esf', null, array('placeholder' => 'Graduación O.I Esf', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('grad_oi_cil', 'Graduación O.I Cil:') }}		    
				{{ Form::text('grad_oi_cil', null, array('placeholder' => 'Graduación O.I Cil', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('grad_oi_eje', 'Graduación O.I Eje:') }}		    
				{{ Form::text('grad_oi_eje', null, array('placeholder' => 'Graduación O.I Eje', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('grad_oi_av', 'Graduación O.I AV:') }}		    
				{{ Form::text('grad_oi_av', null, array('placeholder' => 'Graduación O.I AV', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('grad_di', 'Graduación D.I:') }}		    
				{{ Form::text('grad_di', null, array('placeholder' => 'Graduación D.I', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('grad_add_od', 'Graduación Add O.D:') }}		    
				{{ Form::text('grad_add_od', null, array('placeholder' => 'Graduación Add O.D', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('grad_add_oi', 'Graduación Add O.I:') }}		    
				{{ Form::text('grad_add_oi', null, array('placeholder' => 'Graduación Add O.I', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('cerca_od_esf', 'Cerca O.D Esf:') }}		    
				{{ Form::text('cerca_od_esf', null, array('placeholder' => 'Cerca O.D Esf', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('cerca_od_cil', 'Cerca O.D Cil:') }}		    
				{{ Form::text('cerca_od_cil', null, array('placeholder' => 'Cerca O.D Cil', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('cerca_od_eje', 'Cerca O.D Eje:') }}		    
				{{ Form::text('cerca_od_eje', null, array('placeholder' => 'Cerca O.D Eje', 'class' => 'form-control')) }}
		    </div>
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('cerca_oi_esf', 'Cerca O.I Esf:') }}		    
				{{ Form::text('cerca_oi_esf', null, array('placeholder' => 'Cerca O.I Esf', 'class' => 'form-control')) }}
		    </div>	
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('cerca_oi_cil', 'Cerca O.I Cil:') }}		    
				{{ Form::text('cerca_oi_cil', null, array('placeholder' => 'Cerca O.I Cil', 'class' => 'form-control')) }}
		    </div>		
		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
				{{ Form::label('cerca_oi_eje', 'Cerca O.I Eje:') }}		    
				{{ Form::text('cerca_oi_eje', null, array('placeholder' => 'Cerca O.I Eje', 'class' => 'form-control')) }}
		    </div>
			<div class="form-group col-sm-4 col-md-4 col-lg-4">
		      {{ Form::label('instrucciones', 'Instrucciones para el Paciente:') }}
		      {{ Form::textarea('instrucciones', null, array('placeholder' => 'Instrucciones para el Paciente', 'class' => 'form-control', 'size' => '3x1')) }}        
		    </div>    	    
  		</div>
  	</div>
  	<center>
		 <a href="{{ route('datos.pacientes.index') }}" class="btn btn-default">Limpiar Campos</a>
		{{ Form::button('Guardar', array('type' => 'submit', 'class' => 'btn btn-default')) }}
  	</center>
  	{{ Form::close() }}
@stop

