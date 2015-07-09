<?php

class Paciente extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	*/
	protected $table = 'pacientes';

	function edad($fecha)
	{
		$fecha_actual = getdate();
        $edad = 0;
        $fecha = explode("-", $fecha);
        if (!checkdate($fecha[1],$fecha[2],$fecha[0])){
                $edad = 'Fecha Inválida';
        }else{
                if($fecha[0] < $fecha_actual['year']){
                        if($fecha[1] < $fecha_actual['mon']){
                                $edad = $fecha_actual['year'] - $fecha[0];
                        }else{
                                $edad = $fecha_actual['year'] - $fecha[0];
                                $edad--;
                        }                              
                }
        }
        return $edad;
    }
}

?>
