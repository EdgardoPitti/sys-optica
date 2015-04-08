@extends('layout')

@section('title') Citas @stop

@section('contenido')
	<h2 class="titulo">Citas</h2>


	{{ Form::model($datos['cita'], $datos['form'] + array('id' => 'formulario'), array('role' => 'form')) }}
	<a href="{{{URL::route('datos.pacientes.index')}}}" class="pull-left btn btn-primary" title="Retornar al Menú Pacientes"><i class="fa fa-arrow-left fa-1x" > Volver</i></a> 
	<div class="row">
		<div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
	    	<div class="well profile">
	            <div class="col-sm-12">
	                <div class="col-xs-12 col-sm-8" >
	                    <h2>{{ $datos['paciente']->primer_nombre.' '.$datos['paciente']->segundo_nombre.' '.$datos['paciente']->primer_apellido }}</h2>
	                    <p><strong>Código: </strong> {{ $datos['paciente']->cedula }} </p>
	                    <p><strong>Edad: </strong> {{ $datos['edad'] }} Años </p>
	                    <p><strong>Fecha de la Consulta: </strong>
	                        {{ Form::text('fecha_consulta', $datos['cita']->fecha_consulta, array('class' => 'form-control datepicker', 'placeholder' => 'AAAA-MM-DD')) }}
	                    </p>
	                </div>             
	                <div class="col-xs-12 col-sm-4 text-center">
	                    <div class="avatar">
	                        <img src="{{URL::to('img/avatar.png')}}" alt="" class="img-circle img-responsive">
	                    </div>
	                </div>
	            </div>    
	        </div>    
		</div>
	</div>
	{{--*/$x=1;/*--}}
		@if(!empty(Cita::where('id_paciente', $datos['paciente']->id)->first()->id))
		<div class="table-responsive tabla-cita" style="max-height:175px;">
			<table class="table table-bordered" id="tabla-cita" cellpadding="0" cellspacing="0">
				
					<tr class="info">
						<th data-align="center">#</th>
						<th data-align="center">Fecha de Cita</th>
						<th data-align="center">Instrucciones</th>
						<th data-align="center">Observaciones</th>
						<th data-align="center"></th>
					</tr>
					@foreach(Cita::where('id_paciente', $datos['paciente']->id)->orderBy('fecha_consulta', 'desc')->get() as $citas)
						<tr class="white">
							<td>{{ $x++ }}.</td>
							<td>{{ $citas->fecha_consulta }}</td>
							<td>{{ $citas->instrucciones }}</td>
							<td>{{ $citas->observaciones }}</td>
							<td>
								<a href="{{ route('datos.citas.edit', $citas->id) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Editar Cita"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
								<a href="{{ route('print.edit', $citas->id) }}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Imprimir Receta" target="_blank"><span class="glyphicon glyphicon-print"></span> Imprimir</a>
							</td>
						</tr>
					@endforeach
				
			</table>
		</div>
		@else
			<center>
				<div class="alert alert-danger" role="alert">
					<strong>
						Este Paciente no tiene Citas.
					</strong>			
				</div>
			</center>		
		@endif
		<div class="row" style="margin-bottom:15px;">
			<div class="col-xs-12">
				<a href="{{ route('datos.citas.show', $datos['paciente']->id) }}" class="btn btn-default pull-right"><span class="glyphicon glyphicon-trash"></span> Limpiar Campos</a>
			</div>
		</div>
  	<div class="panel panel-default">
  		<div class="panel-heading">
  			<h4 class="panel-title"><i class="fa fa-book"></i> Datos de la Cita</h4>
  		</div>
  		<div class="panel-body">
  			<div class="row">
				{{ Form::text('id_paciente', $datos['paciente']->id, array('style' => 'display:none')) }}
				<div class="form-group col-sm-12 col-md-12 col-lg-12">
			      {{ Form::label('interrogatorio', 'Interrogatorio:') }}
			      {{ Form::textarea('interrogatorio', null, array('placeholder' => 'Interrogatorio', 'class' => 'form-control', 'size' => '3x2')) }}        
			    </div> 				
				<div class="form-group col-sm-4 col-md-4 col-lg-4">
			      {{ Form::label('exploracion_conj', 'Exploración Conj:') }}
			      {{ Form::text('exploracion_conj', null, array('placeholder' => 'Exploración Conj', 'class' => 'form-control', 'required' => 'required')) }}
			    </div>
			    <div class="form-group col-sm-4 col-md-4 col-lg-4">
			      {{ Form::label('esclerotica', 'Esclerótica:') }}
			      {{ Form::text('esclerotica', null, array('placeholder' => 'Esclerótica', 'class' => 'form-control')) }}
			    </div>  	
				<div class="form-group col-sm-4 col-md-4 col-lg-4">
			      {{ Form::label('cornea', 'Córnea:') }}
			      {{ Form::text('cornea', null, array('placeholder' => 'Córnea', 'class' => 'form-control')) }}
			    </div> 
			    <div class="form-group col-sm-4 col-md-4 col-lg-4">
					{{ Form::label('parpados', 'Párpados:') }}		    
					{{ Form::text('parpados', null, array('placeholder' => 'Párpados', 'class' => 'form-control')) }}
			    </div>			                       
	  		    <div class="form-group col-sm-4 col-md-4 col-lg-4">
					{{ Form::label('pestagna', 'Pestañas:') }}		    
					{{ Form::text('pestagna', null, array('placeholder' => 'Pestañas', 'class' => 'form-control')) }}
			    </div>			                       
			    <div class="form-group col-sm-4 col-md-4 col-lg-4">
					{{ Form::label('pupilas', 'Pupilas:') }}		    
					{{ Form::text('pupilas', null, array('placeholder' => 'Pupilas', 'class' => 'form-control')) }}
			    </div>			                       		    
			    <div class="form-group col-sm-4 col-md-4 col-lg-4">
					{{ Form::label('ref_pup', 'Ref. Pup:') }}		    
					{{ Form::text('ref_pup', null, array('placeholder' => 'Ref. Pup', 'class' => 'form-control')) }}
			    </div>
			    <div class="col-sm-12 col-md-12 col-lg-12" style="padding-right:0px;padding-left:0px;">
				    <div class="col-sm-6 col-md-6 col-lg-6">
					    <div class="panel panel-default">
					    	<div class="panel-heading">
					    		<h4 class="panel-title">A V sc</h4>	
					    	</div>
							<div class="panel-body">
					    		{{ Form::label('av_sc_od', 'Ojo Derecho (O.D):') }}		    
								{{ Form::text('av_sc_od', null, array('placeholder' => 'O.D', 'class' => 'form-control', 'required' => 'required')) }}
					    		{{ Form::label('av_sc_oi', 'Ojo Izquierdo (O.I):') }}		    
								{{ Form::text('av_sc_oi', null, array('placeholder' => 'O.I', 'class' => 'form-control', 'required' => 'required')) }}
					    	</div>		    		
					    </div>
				    </div>
				    <div class="col-sm-6 col-md-6 col-lg-6">
					    <div class="panel panel-default">
					    	<div class="panel-heading">
					    		<h4 class="panel-title">Cap. Visual</h4>	
					    	</div>
					    	<div class="panel-body">
					    		{{ Form::label('cap_visual_od', 'Ojo Derecho (O.D):') }}		    
								{{ Form::text('cap_visual_od', null, array('placeholder' => 'O.D', 'class' => 'form-control')) }}
					    		{{ Form::label('cap_visual_oi', 'Ojo Izquierdo (O.I):') }}		    
								{{ Form::text('cap_visual_oi', null, array('placeholder' => 'O.I', 'class' => 'form-control')) }}
					    	</div>
					    </div>
					</div>
			    </div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="panel panel-default">
				    	<div class="panel-heading">
				    		<h4 class="panel-title">A V cc</h4>			    		
				    	</div>
				    	<div class="panel-body">
				    		<div class="row">
				    			<div class="col-sm-12 col-md-12 col-lg-12">
					    			<label>Ojo Derecho</label>
				    			</div>
					    		<div class="form-group col-sm-3 col-md-3 col-lg-3">
					    			{{ Form::label('av_cc_od', 'O.D:') }}		    
									{{ Form::text('av_cc_od', null, array('placeholder' => 'O.D', 'class' => 'form-control input-sm')) }}
					    		</div>	
					    		<div class="form-group col-sm-3 col-md-3 col-lg-3">
					    			{{ Form::label('av_cc_od_esf', 'Esf:') }}		    
									{{ Form::text('av_cc_od_esf', null, array('placeholder' => 'Esf', 'class' => 'form-control input-sm')) }}
					    		</div>	
					    		<div class="form-group col-sm-3 col-md-3 col-lg-3">
					    			{{ Form::label('av_cc_od_cil', 'Cil:') }}		    
									{{ Form::text('av_cc_od_cil', null, array('placeholder' => 'Cil', 'class' => 'form-control input-sm')) }}
					    		</div>	
					    		<div class="form-group col-sm-3 col-md-3 col-lg-3">
					    			{{ Form::label('av_cc_od_add', 'Add:') }}		    
									{{ Form::text('av_cc_od_add', null, array('placeholder' => 'Add', 'class' => 'form-control input-sm')) }}
					    		</div>					    		
				    			<div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:8px;">
					    			<label>Ojo Izquierdo</label>
				    			</div>
					    		<div class="form-group col-sm-3 col-md-3 col-lg-3">
					    			{{ Form::label('av_cc_oi', 'O.I:') }}		    
									{{ Form::text('av_cc_oi', null, array('placeholder' => 'O.I', 'class' => 'form-control input-sm')) }}
					    		</div>
					    		<div class="form-group col-sm-3 col-md-3 col-lg-3">
					    			{{ Form::label('av_cc_oi_esf', 'Esf:') }}		    
									{{ Form::text('av_cc_oi_esf', null, array('placeholder' => 'Esf', 'class' => 'form-control input-sm')) }}
					    		</div>
					    		<div class="form-group col-sm-3 col-md-3 col-lg-3">
					    			{{ Form::label('av_cc_oi_cil', 'Cil:') }}		    
									{{ Form::text('av_cc_oi_cil', null, array('placeholder' => 'Cil', 'class' => 'form-control input-sm')) }}
					    		</div>
					    		<div class="form-group col-sm-3 col-md-3 col-lg-3">
							    	{{ Form::label('av_cc_oi_add', 'Add:') }}		    
									{{ Form::text('av_cc_oi_add', null, array('placeholder' => 'Add', 'class' => 'form-control input-sm')) }}
					    		</div>
				    		</div>
				    	</div>
				    </div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
				    <div class="panel panel-default">
				    	<div class="panel-heading">
				    		<h4 class="panel-title">Oftalmoscopía</h4>	
				    	</div>
				    	<div class="panel-body">
				    		{{ Form::label('oftalmoscopia_od', 'Ojo Derecho:') }}		    
							{{ Form::text('oftalmoscopia_od', null, array('placeholder' => 'O.D', 'class' => 'form-control')) }}
							{{ Form::label('oftalmoscopia_oi', 'Ojo Izquierdo:') }}		    
							{{ Form::text('oftalmoscopia_oi', null, array('placeholder' => 'O.I', 'class' => 'form-control')) }}
				    	</div>
				    </div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
				    <div class="panel panel-default">
				    	<div class="panel-heading">
				    		<h4 class="panel-title">Queratrometria</h4>	
				    	</div>
				    	<div class="panel-body">
				    		{{ Form::label('queratometria_od', 'Ojo Derecho:') }}		    
							{{ Form::text('queratometria_od', null, array('placeholder' => 'O.D', 'class' => 'form-control')) }}
							{{ Form::label('queratometria_oi', 'Ojo Izquierdo:') }}		    
							{{ Form::text('queratometria_oi', null, array('placeholder' => 'O.I', 'class' => 'form-control')) }}
				    	</div>
				    </div>
				</div>
			    <div class="col-sm-6 col-md-6 col-lg-6">
				    <div class="panel panel-default">
				    	<div class="panel-heading">
				    		<h4 class="panel-title">Motilidad Ocular</h4>	
				    	</div>
				    	<div class="panel-body">
				    		{{ Form::label('motilidad_ocular_od', 'Ojo Derecho:') }}		    
							{{ Form::text('motilidad_ocular_od', null, array('placeholder' => 'O.D', 'class' => 'form-control')) }}
							{{ Form::label('motilidad_ocular_oi', 'Ojo Izquierdo:') }}		    
							{{ Form::text('motilidad_ocular_oi', null, array('placeholder' => 'O.I', 'class' => 'form-control')) }}
				    	</div>
				    </div>
				</div>
				<div class="form-group col-sm-6 col-md-6 col-lg-6">
					{{ Form::label('sentido_cromatico', 'Sentido Cromático:') }}		    
					{{ Form::textarea('sentido_cromatico', null, array('placeholder' => 'Sentido Cromático', 'class' => 'form-control', 'size' => '3x4')) }}
				</div>
				
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
				    <div class="panel panel-default">
				    	<div class="panel-heading">
				    		<h4 class="panel-title">Tonometría</h4>	
				    	</div>
				    	<div class="panel-body">
				    		<div class="form-group col-sm-6 col-md-6 col-lg-6">
					    		{{ Form::label('tonometria_od', 'Ojo Derecho (O.D):') }}		    
								{{ Form::text('tonometria_od', null, array('placeholder' => 'O.D', 'class' => 'form-control')) }}
				    		</div>
				    		<div class="form-group col-sm-6 col-md-6 col-lg-6">
								{{ Form::label('tonometria_oi', 'Ojo Izquierdo(O.I):') }}		    
								{{ Form::text('tonometria_oi', null, array('placeholder' => 'O.I', 'class' => 'form-control')) }}
				    		</div>
				    	</div>
				    </div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
				    <div class="panel panel-default">
				    	<div class="panel-heading">
				    		<h4 class="panel-title">Graduación</h4>	
				    	</div>
				    	<div class="panel-body">
				    		<div class="row">
				    			<div class="col-sm-12 col-md-12 col-lg-12">
					    			<label>Ojo Derecho</label>
				    			</div>
				    			<div class="form-group col-sm-3 col-md-3 col-lg-3">
				    				{{ Form::label('grad_od_esf', 'Esf:') }}		    
									{{ Form::text('grad_od_esf', null, array('placeholder' => 'Esf', 'class' => 'form-control input-sm')) }}
				    			</div>
				    			<div class="form-group col-sm-3 col-md-3 col-lg-3">
				    				{{ Form::label('grad_od_cil', 'Cil:') }}		    
									{{ Form::text('grad_od_cil', null, array('placeholder' => 'Cil', 'class' => 'form-control input-sm')) }}
				    			</div>
				    			<div class="form-group col-sm-3 col-md-3 col-lg-3">
				    				{{ Form::label('grad_od_eje', 'Eje:') }}		    
									{{ Form::text('grad_od_eje', null, array('placeholder' => 'Eje', 'class' => 'form-control input-sm')) }}
								</div>
				    			<div class="form-group col-sm-3 col-md-3 col-lg-3">
				    				{{ Form::label('grad_od_av', 'AV:') }}		    
									{{ Form::text('grad_od_av', null, array('placeholder' => 'AV', 'class' => 'form-control input-sm')) }}
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12">
					    			<label>Ojo Izquierdo</label>
				    			</div>
				    			<div class="form-group col-sm-3 col-md-3 col-lg-3">
				    				{{ Form::label('grad_oi_esf', 'Esf:') }}		    
									{{ Form::text('grad_oi_esf', null, array('placeholder' => 'Esf', 'class' => 'form-control input-sm')) }}	
				    			</div>
				    			<div class="form-group col-sm-3 col-md-3 col-lg-3">
				    				{{ Form::label('grad_oi_cil', 'Cil:') }}		    
									{{ Form::text('grad_oi_cil', null, array('placeholder' => 'Cil', 'class' => 'form-control input-sm')) }}
				    			</div>
				    			<div class="form-group col-sm-3 col-md-3 col-lg-3">
				    				{{ Form::label('grad_oi_eje', 'Eje:') }}		    
									{{ Form::text('grad_oi_eje', null, array('placeholder' => 'Eje', 'class' => 'form-control input-sm')) }}
				    			</div>
				    			<div class="form-group col-sm-3 col-md-3 col-lg-3">
				    				{{ Form::label('grad_oi_av', 'AV:') }}		    
									{{ Form::text('grad_oi_av', null, array('placeholder' => 'AV', 'class' => 'form-control input-sm')) }}
				    			</div>				    			
				    			<div class="form-group col-sm-3 col-md-3 col-lg-3">
				    				{{ Form::label('grad_di', 'D.I:') }}		    
									{{ Form::text('grad_di', null, array('placeholder' => 'D.I', 'class' => 'form-control input-sm col-lg-3')) }}
				    			</div>
				    			<div class="col-sm-12 col-md-12 col-lg-12">
				    				<div class="panel panel-default">
								    	<div class="panel-heading">
								    		<h4 class="panel-title">Add</h4>	
								    	</div>
								    	<div class="panel-body">
								    		<div class="form-group col-sm-6 col-md-6 col-lg-6">
									    		{{ Form::label('grad_add_od', 'Ojo Derecho:') }}		    
												{{ Form::text('grad_add_od', null, array('placeholder' => 'O.D', 'class' => 'form-control input-sm')) }}
								    		</div>
								    		<div class="form-group col-sm-6 col-md-6 col-lg-6">
												{{ Form::label('grad_add_oi', 'Ojo Izquierdo:') }}		    
												{{ Form::text('grad_add_oi', null, array('placeholder' => 'O.I', 'class' => 'form-control input-sm')) }}
								    		</div>
								    	</div>
								    </div>								    
				    			</div>
				    		</div>
				    	</div>
				    </div>
				</div>
			    <div class="col-sm-12 col-md-12 col-lg-12">
				    <div class="panel panel-default">
				    	<div class="panel-heading">
				    		<h4 class="panel-title">Cerca</h4>	
				    	</div>
				    	<div class="panel-body">
				    		<div class="row">
				    			<div class="col-sm-12 col-md-12 col-lg-12">
				    				<label>Ojo Derecho</label>
				    			</div>
				    			<div class="form-group col-sm-4 col-md-4 col-lg-4">
				    				{{ Form::label('cerca_od_esf', 'Esf:') }}		    
									{{ Form::text('cerca_od_esf', null, array('placeholder' => 'Esf', 'class' => 'form-control input-sm')) }}
				    			</div>
				    			<div class="form-group col-sm-4 col-md-4 col-lg-4">
				    				{{ Form::label('cerca_od_cil', 'Cil:') }}		    
									{{ Form::text('cerca_od_cil', null, array('placeholder' => 'Cil', 'class' => 'form-control input-sm')) }}
				    			</div>
				    			<div class="form-group col-sm-4 col-md-4 col-lg-4">
				    				{{ Form::label('cerca_od_eje', 'Eje:') }}		    
									{{ Form::text('cerca_od_eje', null, array('placeholder' => 'Eje', 'class' => 'form-control input-sm')) }}	
				    			</div>
				    			<div class="col-sm-12 col-md-12 col-lg-12">
				    				<label>Ojo Izquierda</label>
				    			</div>
				    			<div class="form-group col-sm-4 col-md-4 col-lg-4">
				    				{{ Form::label('cerca_oi_esf', 'Esf:') }}		    
									{{ Form::text('cerca_oi_esf', null, array('placeholder' => 'Esf', 'class' => 'form-control input-sm')) }}
				    			</div>
				    			<div class="form-group col-sm-4 col-md-4 col-lg-4">
				    				{{ Form::label('cerca_oi_cil', 'Cil:') }}		    
									{{ Form::text('cerca_oi_cil', null, array('placeholder' => 'Cil', 'class' => 'form-control input-sm')) }}
				    			</div>
				    			<div class="form-group col-sm-4 col-md-4 col-lg-4">
				    				{{ Form::label('cerca_oi_eje', 'Eje:') }}		    
									{{ Form::text('cerca_oi_eje', null, array('placeholder' => 'Eje', 'class' => 'form-control input-sm')) }}	
				    			</div>
				    		</div>
				    	</div>
				    </div>
				</div>
				<div class="form-group col-sm-12 col-md-12 col-lg-12">
			      {{ Form::label('instrucciones', 'Instrucciones para el Paciente:') }}
			      {{ Form::textarea('instrucciones', null, array('placeholder' => 'Instrucciones para el Paciente', 'class' => 'form-control', 'size' => '3x4')) }}        
			    </div> 
			</div>
			
			@if($datos['paciente']->examen == 'LC')
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">Lentes de Contacto</h4>
						</div>
						<div class="panel-body">
							<table class="table table-bordered">
								<tr>
									<th rowspan="2" style="vertical-align:middle;text-align: center;"> K = </th>
									<th style="border-bottom:1px solid #393939; text-align:center;"><br>OD</th>
									<td style="border-bottom:1px solid #393939;">{{Form::text('kod', $datos['lc']->kod, array('placeholder' => 'Lentes de Contacto OD', 'class' => 'form-control'))}}</td>
								</tr>
								<tr>
									<th style="text-align:center;">OI</th>
									<td>{{Form::text('koi', $datos['lc']->koi, array('placeholder' => 'Lentes de Contacto OD', 'class' => 'form-control'))}}</td>
								</tr>	
							</table>
							<div class="form-group col-sm-4 col-md-4 col-lg-4">
			    				{{ Form::label('diam_dhiv', 'Diam Dhiv:') }}		    
								{{ Form::text('diam_dhiv', $datos['lc']->diam_dhiv, array('placeholder' => 'Diam Dhiv', 'class' => 'form-control'))}}
			    			</div>
			    			<div class="form-group col-sm-4 col-md-4 col-lg-4">
			    				{{ Form::label('ap', 'AP:') }}		    
								{{ Form::text('ap', $datos['lc']->ap, array('placeholder' => 'AP', 'class' => 'form-control'))}}
			    			</div>
			    			<div class="form-group col-sm-4 col-md-4 col-lg-4">
			    				{{ Form::label('l_parpado', 'Parpados:') }}		    
								{{ Form::text('l_parpado', $datos['lc']->parpados, array('placeholder' => 'Parpados', 'class' => 'form-control'))}}
			    			</div>
			    			<div class="form-group col-sm-4 col-md-4 col-lg-4">
			    				{{ Form::label('esclera', 'Esclera:') }}		    
								{{ Form::text('esclera', $datos['lc']->esclera, array('placeholder' => 'Esclera', 'class' => 'form-control'))}}
			    			</div>
			    			<div class="form-group col-sm-4 col-md-4 col-lg-4">
			    				{{ Form::label('conjuntiva', 'Conjuntiva:') }}		    
								{{ Form::text('conjuntiva', $datos['lc']->conjuntiva, array('placeholder' => 'Conjuntiva', 'class' => 'form-control'))}}
			    			</div>
			    			<div class="form-group col-sm-4 col-md-4 col-lg-4">
			    				{{ Form::label('iris', 'Iris:') }}		    
								{{ Form::text('iris', $datos['lc']->iris, array('placeholder' => 'Iris', 'class' => 'form-control'))}}
			    			</div>
			    			<div class="form-group col-sm-4 col-md-4 col-lg-4">
			    				{{ Form::label('cornea', 'Cornea:') }}		    
								{{ Form::text('cornea', $datos['lc']->cornea, array('placeholder' => 'Cornea', 'class' => 'form-control'))}}
			    			</div>
			    			<div class="form-group col-sm-12 col-md-12 col-lg-12">
			    				<label>Tipo (LC):</label>
			    				<div class="form-group">
			    					{{Form::label('pmma', 'a. PMMA', array('class' => 'col-sm-3 control-label'))}}
			    					<div class="col-sm-9">
			    						{{Form::text('pmma', $datos['lc']->pmma, array('placeholder' => 'PMMA', 'class' => 'form-control'))}}
			    					</div>							   
							    </div>
							    <div class="form-group">
			    					{{Form::label('hema', 'b. HEMA', array('class' => 'col-sm-3 control-label'))}}
			    					<div class="col-sm-9">
			    						{{Form::text('hema',  $datos['lc']->hema, array('placeholder' => 'HEMA', 'class' => 'form-control'))}}
			    					</div>							   
							    </div>
							    <div class="form-group">
			    					{{Form::label('permeable', 'c. PERMEABLE', array('class' => 'col-sm-3 control-label'))}}
			    					<div class="col-sm-9">
			    						{{Form::text('permeable',  $datos['lc']->permeable, array('placeholder' => 'PERMEABLE', 'class' => 'form-control'))}}
			    					</div>							   
							    </div>
			    			</div><br>
			    			<div class="form-group col-sm-4 col-md-4 col-lg-4">
			    				{{ Form::label('proveedor', 'Proveedor:') }}		    
								{{ Form::text('proveedor', $datos['lc']->proveedor, array('placeholder' => 'Proveedor', 'class' => 'form-control')) }}
			    			</div>
			    			<div class="form-group col-sm-8 col-md-8 col-lg-8">
			    				{{ Form::label('soluciones', 'Soluciones:') }}		    
								{{ Form::textarea('soluciones', $datos['lc']->soluciones, array('placeholder' => 'Soluciones', 'class' => 'form-control', 'size' => '3x1')) }}
			    			</div>
			    			<div class="form-group col-sm-12 col-md-12 col-lg-12">
			    				{{ Form::label('datos_lc', 'Datos de Lentes de Contacto:') }}		    
								{{ Form::textarea('datos_lc', $datos['lc']->datos_lc, array('placeholder' => 'Observaciones', 'class' => 'form-control', 'size' => '3x6')) }}
			    			</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">Receta para Lentes de Contacto</h4>
						</div>
						<div class="panel-body">
							<div class="form-group col-sm-4 col-md-4 col-lg-4">
		    					{{Form::label('l_od', 'O.D.')}}
		    					{{ Form::text('l_od', $datos['lc']->r_od, array('placeholder' => 'O.D.', 'class' => 'form-control'))}}			   
						    </div>
						    <div class="form-group col-sm-4 col-md-4 col-lg-4">
		    					{{Form::label('l_oi', 'O.I.')}}
		    					{{ Form::text('l_oi', $datos['lc']->r_oi, array('placeholder' => 'O.I.', 'class' => 'form-control'))}}
		    											   
						    </div>
						    <div class="form-group col-sm-4 col-md-4 col-lg-4">
		    					{{Form::label('l_tipo', 'Tipo')}}
		    					{{ Form::text('l_tipo', $datos['lc']->tipo, array('placeholder' => 'Tipo', 'class' => 'form-control'))}}						   
						    </div>
						    <div class="form-group col-sm-8 col-md-8 col-lg-8">
		    					{{Form::label('l_soluciones', 'Soluciones')}}		    				
		    					{{ Form::textarea('l_soluciones', $datos['lc']->soluciones, array('placeholder' => 'Soluciones', 'class' => 'form-control','size' => '3x4'))}}					   
						    </div>
						    <div class="form-group col-sm-12 col-md-12 col-lg-12">
		    					{{Form::label('l_costo', 'Costo ($)')}}
		    					{{ Form::text('l_costo', $datos['lc']->r_costo, array('placeholder' => 'Costo ($)', 'class' => 'form-control'))}}		   
						    </div>
						    <div class="form-group col-sm-12 col-md-12 col-lg-12">
		    					{{Form::label('l_observaciones', 'Observaciones')}}
		    					{{ Form::textarea('l_observaciones', $datos['lc']->r_observaciones, array('placeholder' => 'Observaciones', 'class' => 'form-control', 'size' => '3x4'))}}		    											 
						    </div>
						</div>
					</div>
				</div>
			</div>

			@endif

			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="table-responsive overthrow"  style="width:100%;margin:15px 0px;">        
						<table id="tabla-rgt">
						    <thead>
							    <tr>							
						    		<th width="4%"  data-align="center"></th>
						    		<th width="12.5%" data-align="center">Esf.</th>
						    		<th width="12.5%" data-align="center">Cil y Eje</th>
						    		<th width="12.5%" data-align="center">Add.</th>
						    		<th width="12.5%" data-align="center">D.I.</th>
						    		<th width="12.5%" data-align="center">Prisma</th>
						    		<th width="12.5%" data-align="center">Alt.O</th>
						    		<th width="12.5%"  data-align="center">Color Lente/Tipo</th>
						    	</tr>
					    	</thead> 
					    	<tbody>
						    	<tr>
						    		<td>O.D.</td>
						    		<td>{{ Form::text('od_esf', null, array('class' => 'form-control input-sm')) }}</td>
						    		<td>{{ Form::text('od_cil_eje', null, array('class' => 'form-control input-sm')) }}</td>
						    		<td>{{ Form::text('od_add', null, array('class' => 'form-control input-sm')) }}</td>
						    		<td>{{ Form::text('od_di', null, array('class' => 'form-control input-sm')) }}</td>
						    		<td>{{ Form::text('od_prisma', null, array('class' => 'form-control input-sm')) }}</td>
						    		<td>{{ Form::text('od_alt', null, array('class' => 'form-control input-sm')) }}</td>
						    		<td>{{ Form::text('od_color', null, array('class' => 'form-control input-sm')) }}</td>
						    	</tr>
						    	<tr>
						    		<td>O.I.</td>
						    		<td>{{ Form::text('oi_esf', null, array('class' => 'form-control input-sm')) }}</td>
						    		<td>{{ Form::text('oi_cil_eje', null, array('class' => 'form-control input-sm')) }}</td>
						    		<td>{{ Form::text('oi_add', null, array('class' => 'form-control input-sm')) }}</td>
						    		<td>{{ Form::text('oi_di', null, array('class' => 'form-control input-sm')) }}</td>
						    		<td>{{ Form::text('oi_prisma', null, array('class' => 'form-control input-sm')) }}</td>
						    		<td>{{ Form::text('oi_alt', null, array('class' => 'form-control input-sm')) }}</td>
						    		<td>
							    		<p> <b style="padding-top:3px;">Bif.</b> {{ Form::text('oi_tipo', null, array('class' => 'form-control input-sm', 'style' => 'width: 130px;display: inline;')) }}
										  </p>
						    		</td>
						    	</tr>
					    	</tbody>
					    </table>
					</div>   	
				</div>
				<div class="form-group col-sm-12 col-md-12 col-lg-12">
				     {{ Form::label('observaciones', 'Observaciones:') }}
				     {{ Form::textarea('observaciones', null, array('placeholder' => 'Observaciones', 'class' => 'form-control', 'size' => '3x1')) }}
			   </div>
			   <div class="container-fluid">
				   <div class="form-group col-xs-6 col-sm-6 col-md-6  col-lg-2">
						    	{{ Form::label('endurecido', 'Endurecido:') }}		    
				   </div>
				   <div class="form-group col-xs-6 col-sm-6 col-md-6  col-lg-2">
								{{ Form::checkbox('endurecido', 1, null,  array('class' => 'form-control')) }}
				   </div>	
				   <div class="form-group col-xs-6 col-sm-6 col-md-6  col-lg-2">
						    	{{ Form::label('tratam_uv', 'Tratamiento U.V:') }}		    
				   </div>
				   <div class="form-group col-xs-6 col-sm-6 col-md-6  col-lg-2">
								{{ Form::checkbox('tratam_uv', 1, null,  array('class' => 'form-control')) }}
				   </div>	
				   <div class="form-group col-xs-6 col-sm-6 col-md-6  col-lg-2">
						   	{{ Form::label('tratam_anti_rayas', 'Tratamiento Anti Rayas:') }}		    
				   </div>
				   <div class="form-group col-xs-6 col-sm-6 col-md-6  col-lg-2">
								{{ Form::checkbox('tratam_anti_rayas', 1, null,  array('class' => 'form-control')) }}
				   </div>				   
			   </div>
			   <div class="container-fluid">
	  			   <div class="form-group col-xs-6 col-sm-6 col-md-6  col-lg-2">
						   	{{ Form::label('tratam_anti_reflejos', 'Tratamiento Anti Reflejos:') }}		  	    
				   </div>
				   <div class="form-group col-xs-6 col-sm-6 col-md-6  col-lg-2">
								{{ Form::checkbox('tratam_anti_reflejos', 1, null,  array('class' => 'form-control')) }}
				   </div>	
				   <div class="form-group col-xs-6 col-sm-6 col-md-6  col-lg-2">
						   	{{ Form::label('hi_index', 'Hi-Index:') }}		  	    
				   </div>
				   <div class="form-group col-xs-6 col-sm-6 col-md-6  col-lg-2">
								{{ Form::checkbox('hi_index', 1, null,  array('class' => 'form-control')) }}
				   </div>
				   <div class="form-group col-xs-6 col-sm-6 col-md-6  col-lg-2">
						   	{{ Form::label('hi_lite', 'Hi-Lite:') }}		    	  	    
				   </div>
				   <div class="form-group col-xs-6 col-sm-6 col-md-6  col-lg-2">
								{{ Form::checkbox('hi_lite', 1, null,  array('class' => 'form-control')) }}
				   </div>
			   </div>
			   
				<div class="form-group col-sm-6 col-md-6 col-lg-6">					 
						{{ Form::label('seg_bif', 'Seg. Bif:') }}		    
						{{ Form::text('seg_bif', null, array('placeholder' => 'Seg. Bif', 'class' => 'form-control')) }} 						
			    </div>
				<div class="form-group col-sm-6 col-md-6 col-lg-6">					
					{{ Form::label('aro', 'Aro:') }}		    
					{{ Form::text('aro', null, array('placeholder' => 'Aro', 'class' => 'form-control')) }}
			    </div>
			    <div class="form-group col-sm-4 col-md-4 col-lg-4">
					{{ Form::label('costo_consulta', 'Costo Consulta:') }}		    
					{{ Form::text('costo_consulta', null, array('placeholder' => 'Costo Consulta', 'class' => 'form-control')) }}
			    </div>
			    <div class="form-group col-sm-8 col-md-8 col-lg-8">
					{{ Form::label('examen_realizado', 'Examen Realizado:') }}		    
					{{ Form::textarea('examen_realizado', null, array('placeholder' => 'Examen Realizado', 'class' => 'form-control', 'size' => '3x3')) }}
			    </div>
			</div>						
  		</div> 	
  	</div>
  	<center class="margen-bottom">
		 <a href="{{ route('datos.citas.show', $datos['paciente']->id) }}" class="btn btn-default"><span class="glyphicon glyphicon-trash"></span> Limpiar</a>
		{{ Form::button('Guardar', array('type' => 'submit', 'class' => 'btn btn-default')) }}
  	</center>
  	{{ Form::close() }}
@stop


