@extends('layout')

@section('title') Citas @stop

@section('contenido')
	<h2 class="titulo">Citas</h2>


	{{ Form::model($datos['cita'], $datos['form'], array('role' => 'form')) }}
	<div class="row">
		<div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
	    	<div class="well profile">
	            <div class="col-sm-12">
	                <div class="col-xs-12 col-sm-8" >
	                    <h2>{{ $datos['paciente']->primer_nombre.' '.$datos['paciente']->primer_apellido }}</h2>
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
		<div class="table-responsive tabla-cita">
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
								<a href="{{ route('print.edit', $citas->id) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Imprimir Receta"><span class="glyphicon glyphicon-print"></span></a>
								<a href="{{ route('datos.citas.edit', $citas->id) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Editar Cita"><span class="glyphicon glyphicon-pencil"></span></a>
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
	<a href="{{ route('datos.citas.show', $datos['paciente']->id) }}" class="btn btn-default">Limpiar Campos</a>
	<br>
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
			      {{ Form::text('exploracion_conj', null, array('placeholder' => 'Exploración Conj', 'class' => 'form-control')) }}
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
					    		<label>Ojo Derecho (O.D):</label>
					    		<div class="input-group">
					    		  {{ Form::text('av_sc_od_u', null, array('placeholder' => 'O.D', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1')) }}				    						    		
								  <span class="input-group-addon" id="basic-addon1">/</span>
								  {{ Form::text('av_sc_od_d', null, array('placeholder' => 'O.D', 'class' => 'form-control', 'aria-describedby' => 'basic-addon1')) }} 
								</div>
								<label>Ojo Izquierdo (O.I):</label>
								<div class="input-group">
									{{ Form::text('av_sc_oi_u', null, array('placeholder' => 'O.I', 'class' => 'form-control', 'aria-describedby' => 'basic-addon2')) }}
									<span class="input-group-addon" id="basic-addon2">/</span>
									{{ Form::text('av_sc_oi_d', null, array('placeholder' => 'O.I', 'class' => 'form-control', 'aria-describedby' => 'basic-addon2')) }}
								</div>			    		
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
				    			<div class="col-sm-6 col-md-6 col-lg-6">
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
				<div class="form-group col-sm-4 col-md-4 col-lg-4">
			      {{ Form::label('instrucciones', 'Instrucciones para el Paciente:') }}
			      {{ Form::textarea('instrucciones', null, array('placeholder' => 'Instrucciones para el Paciente', 'class' => 'form-control', 'size' => '3x2')) }}        
			    </div> 
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="table-responsive overthrow"  style="width:100%;margin-top:15px;">        
						<table id="tabla-rgt">
						    <thead>
							    <tr>							
						    		<th width="4%"  data-align="center"></th>
						    		<th style="width:11px;" data-align="center">Esf.</th>
						    		<th style="width:11px;" data-align="center">Cil y Eje</th>
						    		<th style="width:11px;" data-align="center">Add.</th>
						    		<th style="width:11px;" data-align="center">D.I.</th>
						    		<th style="width:11px;" data-align="center">Prisma</th>
						    		<th style="width:11px;" data-align="center">Alt.O</th>
						    		<th style="width:11px;" data-align="center">Color Lente/Tipo</th>
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
						    		<td>Bif.{{ Form::text('oi_tipo', null, array('class' => 'form-control input-sm')) }}</td>
						    	</tr>
					    	</tbody>
					    </table>
					</div>   	
				</div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4">
			      {{ Form::label('observaciones', 'Observaciones:') }}
			      {{ Form::textarea('observaciones', null, array('placeholder' => 'Observaciones', 'class' => 'form-control', 'size' => '3x1')) }}        
			    </div>	
			    <div class="form-group col-sm-4 col-md-4 col-lg-4">
					{{ Form::label('endurecido', 'Endurecido:') }}		    
					{{ Form::checkbox('endurecido', 1, null,  array('class' => 'form-control cmn-toggle cmn-toggle-round-flat')) }}
			    </div> 
			    <div class="form-group col-sm-4 col-md-4 col-lg-4">
					{{ Form::label('tratam_uv', 'Tratamiento U.V:') }}		    
					{{ Form::checkbox('tratam_uv', 1, null,  array('class' => 'form-control cmn-toggle cmn-toggle-round-flat')) }}
			    </div>    
			    <div class="form-group col-sm-4 col-md-4 col-lg-4">
					{{ Form::label('tratam_anti_rayas', 'Tratamiento Anti Rayas:') }}		    
					{{ Form::checkbox('tratam_anti_rayas', 1, null,  array('class' => 'form-control cmn-toggle cmn-toggle-round-flat')) }}
			    </div>   
			    <div class="form-group col-sm-4 col-md-4 col-lg-4">
					{{ Form::label('tratam_anti_reflejos', 'Tratamiento Anti Reflejos:') }}		    
					{{ Form::checkbox('tratam_anti_reflejos', 1, null,  array('class' => 'form-control cmn-toggle cmn-toggle-round-flat')) }}
			    </div>
			    <div class="form-group col-sm-4 col-md-4 col-lg-4">
					{{ Form::label('hi_index', 'Hi-Index:') }}		    
					{{ Form::checkbox('hi_index', 1, null,  array('class' => 'form-control cmn-toggle cmn-toggle-round-flat')) }}
			    </div>
			    <div class="form-group col-sm-4 col-md-4 col-lg-4">
					{{ Form::label('hi_lite', 'Hi-Lite:') }}		    
					{{ Form::checkbox('hi_lite', 1, null,  array('class' => 'form-control cmn-toggle cmn-toggle-round-flat')) }}
			    </div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4">
					{{ Form::label('seg_bif', 'Seg. Bif:') }}		    
					{{ Form::text('seg_bif', null, array('placeholder' => 'Seg. Bif', 'class' => 'form-control')) }}
			    </div>
				<div class="form-group col-sm-4 col-md-4 col-lg-4">
					{{ Form::label('aro', 'Aro:') }}		    
					{{ Form::text('aro', null, array('placeholder' => 'Aro', 'class' => 'form-control')) }}
			    </div>
			    <div class="form-group col-sm-4 col-md-4 col-lg-4">
					{{ Form::label('costo_consulta', 'Costo Consulta:') }}		    
					{{ Form::text('costo_consulta', null, array('placeholder' => 'Costo Consulta', 'class' => 'form-control')) }}
			    </div>
			    <div class="form-group col-sm-4 col-md-4 col-lg-4">
					{{ Form::label('examen_realizado', 'Examen Realizado:') }}		    
					{{ Form::textarea('examen_realizado', null, array('placeholder' => 'Examen Realizado', 'class' => 'form-control', 'size' => '3x3')) }}
			    </div>
			</div>						
  		</div> 	
  	</div>
  	<center class="margen-bottom">
		 <a href="{{ route('datos.citas.show', $datos['paciente']->id) }}" class="btn btn-default">Limpiar</a>
		{{ Form::button('Guardar', array('type' => 'submit', 'class' => 'btn btn-default')) }}
  	</center>
  	{{ Form::close() }}
@stop

