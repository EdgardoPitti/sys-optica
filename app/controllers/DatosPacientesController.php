<?php

class DatosPacientesController extends BaseController {
	public function postPacientes(){
		if(Request::ajax()) {
			$paciente = new Paciente;
			
			$search = Input::get('search');
			$limit = Input::get('limit');
			$offset = Input::get('offset');
			
			if(empty($search)){
				$datos = DB::select("SELECT * FROM pacientes WHERE id > 0 order by primer_apellido asc LIMIT ".$offset.",".$limit.";");
				$c = DB::select("SELECT count(id) as cantidad FROM pacientes WHERE id > 0");	
				$cantidad = $c[0]->cantidad;
							
			}else {
				$datos = DB::select("SELECT * FROM pacientes WHERE concat(`cedula`,' ',`primer_nombre`,' ',`primer_apellido`) LIKE '%".$search."%' order by primer_apellido asc LIMIT ".$offset.",".$limit.";");
				$c = DB::select("SELECT count(id) as cantidad FROM pacientes WHERE concat(`cedula`,' ',`primer_nombre`,' ',`primer_apellido`) LIKE '%".$search."%'");
				$cantidad = $c[0]->cantidad;
			}	
			$host = $_SERVER['HTTP_HOST'];
			$comilla = "'";
			$n = 1;
			
			$data = '{
							"total": '.$cantidad.',
							"rows": [						
							';
							
				foreach($datos as $datos_pacientes[0]){
					$num = $n + $offset;
					if($n > 1){
						$data.= ',';
					}
					$n++;
					$data.='{
					
						"num": '.$num.',
						"ced": "'.$datos_pacientes[0]->cedula.'",
						"name": "'.$datos_pacientes[0]->primer_nombre.' '.$datos_pacientes[0]->segundo_nombre.' '.$datos_pacientes[0]->primer_apellido.' '.$datos_pacientes[0]->segundo_apellido.'",
						"cel": "'.$datos_pacientes[0]->celular.'",
						"cla": "'.$datos_pacientes[0]->clasificacion.'",
						"exa": "'.$datos_pacientes[0]->examen.'",';
					$data .= '"url": "<a href='.$comilla.route('datos.citas.show', $datos_pacientes[0]->id).$comilla.' class='.$comilla.'btn btn-success btn-sm'.$comilla.' data-toggle='.$comilla.'tooltip'.$comilla.'  title='.$comilla.'Crear Cita'.$comilla.'><span class='.$comilla.'glyphicon glyphicon-list-alt'.$comilla.'></span> Cita</a> <a href='.$comilla.route('datos.pacientes.edit', $datos_pacientes[0]->id).$comilla.' class='.$comilla.'btn btn-primary btn-sm'.$comilla.' data-toggle='.$comilla.'tooltip'.$comilla.'  title='.$comilla.'Editar Paciente'.$comilla.'><span class='.$comilla.'glyphicon glyphicon-pencil'.$comilla.'></span> Editar</a>"';											
						
					$data .='
						}';
				}				
				
			$data .= ']
				}';
			return $data;
		}else {			
			App::abort(403);
		}
	}
}
