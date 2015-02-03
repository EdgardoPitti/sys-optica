<?php

class PrintController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//Declarar un arreglo para devolver los resultados.
		$parameter = array();
		//Se instancian los objetos necesarios.
		
		$parameter['cita'] = Cita::find($id);
		$parameter['paciente'] = Paciente::find($parameter['cita']->id_paciente);
		$parameter['paciente']->nombre = $parameter['paciente']->primer_nombre.' '.$parameter['paciente']->segundo_nombre.' '.$parameter['paciente']->primer_apellido.' '.$parameter['paciente']->segundo_apellido;
		if(strlen($parameter['paciente']->fecha_nacimiento) <> 10){
			$parameter['paciente']->edad = 0;
		}else{
			$parameter['paciente']->edad = $parameter['paciente']->edad($parameter['paciente']->fecha_nacimiento);
		}
		if($parameter['paciente']->sexo == 1){
			$parameter['paciente']->sexo = 'Masculino';
		}else{
			$parameter['paciente']->sexo = 'Femenino';
		}
		if($parameter['cita']->endurecido == 1){
			$parameter['cita']->endurecido = 'Si';
		}else{
			$parameter['cita']->endurecido = 'No';
		}
		if($parameter['cita']->tratam_uv == 1){
			$parameter['cita']->tratam_uv = 'Si';
		}else{
			$parameter['cita']->tratam_uv = 'No';
		}
		if($parameter['cita']->tratam_anti_rayas == 1){
			$parameter['cita']->tratam_anti_rayas = 'Si';
		}else{
			$parameter['cita']->tratam_anti_rayas = 'No';
		}
		if($parameter['cita']->tratam_anti_reflejos == 1){
			$parameter['cita']->tratam_anti_reflejos = 'Si';
		}else{
			$parameter['cita']->tratam_anti_reflejos = 'No';
		}
		if($parameter['cita']->hi_index == 1){
			$parameter['cita']->hi_index = 'Si';
		}else{
			$parameter['cita']->hi_index = 'No';
		}
		if($parameter['cita']->hi_lite == 1){
			$parameter['cita']->hi_lite = 'Si';
		}else{
			$parameter['cita']->hi_lite = 'No';
		}
		if(empty($parameter['cita']->seg_bif)){
			$parameter['cita']->seg_bif = 'Sin registro.';
		}else{
			$parameter['cita']->seg_bif = $parameter['cita']->seg_bif; 
		}
		if(empty($parameter['cita']->aro)){
			$parameter['cita']->aro = 'Sin registro.';
		}else{
			$parameter['cita']->aro = $parameter['cita']->aro; 
		}



		$pdf = App::make('dompdf');
		
		$pdf = PDF::loadView('datos/citas/Print', $parameter);
		//Creo el archivo pdf y lo almaceno utilizando la cedula como el nombre del archivo.
		return $pdf->stream(''.$parameter['cita']->id.'_'.$parameter['paciente']->cedula.'.pdf');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
