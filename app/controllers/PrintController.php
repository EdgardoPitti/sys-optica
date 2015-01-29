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
		if(empty($parameter['paciente']->fecha_nacimiento)){
			$parameter['paciente']->edad = 0;
		}else{
			$parameter['paciente']->edad = $parameter['paciente']->edad($parameter['paciente']->fecha_nacimiento);
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
