<?php

class PacientesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$datos['paciente'] = new Paciente;
		$datos['form'] = array('route' => 'datos.pacientes.store', 'method' => 'POST');
		return View::make('datos/pacientes/list-edit-form')->with('datos', $datos);
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
		$data = Input::all();
		$paciente = new Paciente;
		$paciente->primer_nombre = $data['primer_nombre'];
		$paciente->segundo_nombre = $data['segundo_nombre'];
		$paciente->primer_apellido = $data['primer_apellido'];
		$paciente->segundo_apellido = $data['segundo_apellido'];
		$paciente->cedula = $data['cedula'];
		$paciente->sexo = $data['sexo'];
		$paciente->id_tipo_sangre = $data['id_tipo_sangre'];
		$paciente->telefono = $data['telefono'];
		$paciente->celular = $data['celular'];
		$paciente->email = $data['email'];
		$paciente->save();
		
		return Redirect::route('datos.pacientes.index');
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
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
