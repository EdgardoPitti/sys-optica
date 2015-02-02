<?php

class DatosPacientesController extends BaseController {
	public function postPacientes(){
		$paciente = new Paciente;
		
		$search = Input::get('search');
		$limit = Input::get('limit');
		$offset = Input::get('offset');
		
		if(empty($search)){
			$datos = DB::select("SELECT * FROM pacientes WHERE id > 0 LIMIT ".$offset.",".$limit.";");
			$cantidad = Paciente::all()->count();				
		}else {
			$datos = DB::select("SELECT * FROM pacientes WHERE concat(`primer_nombre`,' ',`segundo_nombre`,' ',`primer_apellido`,' ',`segundo_apellido`) LIKE '%".$search."%'");
			$c = DB::select("SELECT count(id) as cantidad FROM pacientes WHERE concat(`primer_nombre`,' ',`segundo_nombre`,' ',`primer_apellido`,' ',`segundo_apellido`) LIKE '%".$search."%'");
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
					"name": "'.$datos_pacientes[0]->primer_nombre.' '.$datos_pacientes[0]->segundo_nombre.' '.$datos_pacientes[0]->primer_apellido.' '.$datos_pacientes[0]->segundo_apellido.'",
					"cel": "'.$datos_pacientes[0]->celular.'",
					"tel": "'.$datos_pacientes[0]->telefono.'",
					"email": "'.$datos_pacientes[0]->email.'",';
				$data .= '"url": "<a href='.$comilla.'http://'.$host.'/sys-optica/public/datos/citas/'.$datos_pacientes[0]->id.''.$comilla.' class='.$comilla.'btn btn-primary btn-sm'.$comilla.' data-toggle='.$comilla.'tooltip'.$comilla.'  title='.$comilla.'Crear Cita'.$comilla.'><span class='.$comilla.'glyphicon glyphicon-list-alt'.$comilla.'></span></a> <a href='.$comilla.URL::to('datos/pacientes/'.$datos_pacientes[0]->id.'/edit').$comilla.' class='.$comilla.'btn btn-primary btn-sm'.$comilla.' data-toggle='.$comilla.'tooltip'.$comilla.'  title='.$comilla.'Editar Paciente'.$comilla.'><span class='.$comilla.'glyphicon glyphicon-pencil'.$comilla.'></span></a>"';											
					
				$data .='
					}';
			}				
			
		$data .= ']
			}';
		return $data;
	}
}
