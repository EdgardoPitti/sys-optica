@extends('layout')

@section('title') Listado de Pacientes @stop

@section('contenido')
	<h2 class="titulo">Listado de Pacientes</h2>

		  <div class="overthrow" style="height:100px;">        
					<table id="pacientes">
					    <thead>
						    <tr class="info">
						        <th data-field="num" data-align="center">#</th>
						        <th data-field="name" data-align="center">Nombre Completo</th>
						        <th data-field="cel" data-align="center">Celular</th>
						        <th data-field="tel" data-align="center">Teléfono</th>
						        <th data-field="email" data-align="center">E-mail</th>
						        <th data-field="url" data-align="center"></th>
						    </tr>
					    </thead>
					</table>	        
            </div>
    
	
@stop
