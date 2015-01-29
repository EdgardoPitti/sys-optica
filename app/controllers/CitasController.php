<?php

class CitasController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$datos['cita'] = new Cita;
		$datos['form'] = array('route' => 'datos.citas.store', 'method' => 'POST');
		return View::make('datos/citas/list-edit-form')->with('datos', $datos);
		
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
		$cita = new Cita;
		$cita->id_paciente = $data['id_paciente'];
		$cita->interrogatorio = $data['interrogatorio'];
		$cita->exploracion_conj = $data['exploracion_conj'];
		$cita->esclerotica = $data['esclerotica'];
		$cita->cornea = $data['cornea'];
		$cita->parpados = $data['parpados'];
		$cita->pestagna = $data['pestagna'];
		$cita->pupilas = $data['pupilas'];
		$cita->ref_pup = $data['ref_pup'];
		$cita->av_sc_od_u = $data['av_sc_od_u'];
		$cita->av_sc_od_d = $data['av_sc_od_d'];
		$cita->av_sc_oi_u = $data['av_sc_oi_u'];
		$cita->av_sc_oi_d = $data['av_sc_oi_d'];
		$cita->av_cc_od = $data['av_cc_od'];
		$cita->av_cc_oi = $data['av_cc_oi'];
		$cita->av_cc_od_esf = $data['av_cc_od_esf'];
		$cita->av_cc_od_cil = $data['av_cc_od_cil'];
		$cita->av_cc_od_add = $data['av_cc_od_add'];
		$cita->av_cc_oi_esf = $data['av_cc_oi_esf'];
		$cita->av_cc_oi_cil = $data['av_cc_oi_cil'];
		$cita->av_cc_oi_add = $data['av_cc_oi_add'];
		$cita->oftalmoscopia_od = $data['oftalmoscopia_od'];
		$cita->oftalmoscopia_oi = $data['oftalmoscopia_oi'];
		$cita->queratometria_od = $data['queratometria_od'];
		$cita->queratometria_oi = $data['queratometria_oi'];
		$cita->motilidad_ocular_od = $data['motilidad_ocular_od'];
		$cita->motilidad_ocular_oi = $data['motilidad_ocular_oi'];
		$cita->sentido_cromatico = $data['sentido_cromatico'];
		$cita->tonometria_od = $data['tonometria_od'];
		$cita->tonometria_oi = $data['tonometria_oi'];
		$cita->grad_od_esf = $data['grad_od_esf'];
		$cita->grad_od_cil = $data['grad_od_cil'];
		$cita->grad_od_eje = $data['grad_od_eje'];
		$cita->grad_od_av = $data['grad_od_av'];		
		$cita->grad_oi_esf = $data['grad_oi_esf'];
		$cita->grad_oi_cil = $data['grad_oi_cil'];
		$cita->grad_oi_eje = $data['grad_oi_eje'];
		$cita->cap_visual_od = $data['cap_visual_od'];
		$cita->cap_visual_oi = $data['cap_visual_oi'];
		$cita->grad_oi_av = $data['grad_oi_av'];
		$cita->grad_di = $data['grad_di'];
		$cita->grad_add_od = $data['grad_add_od'];
		$cita->grad_add_oi = $data['grad_add_oi'];
		$cita->cerca_od_esf = $data['cerca_od_esf'];
		$cita->cerca_od_cil = $data['cerca_od_cil'];
		$cita->cerca_od_eje = $data['cerca_od_eje'];
		$cita->cerca_oi_esf = $data['cerca_oi_esf'];
		$cita->cerca_oi_cil = $data['cerca_oi_cil'];
		$cita->cerca_oi_eje = $data['cerca_oi_eje'];
		$cita->instrucciones = $data['instrucciones'];
		$cita->od_esf = $data['od_esf'];
		$cita->od_cil_eje = $data['od_cil_eje'];
		$cita->od_add = $data['od_add'];
		$cita->od_di = $data['od_di'];
		$cita->od_prisma = $data['od_prisma'];
		$cita->od_alt = $data['od_alt'];
		$cita->od_color = $data['od_color'];
		$cita->oi_esf = $data['oi_esf'];
		$cita->oi_cil_eje = $data['oi_cil_eje'];
		$cita->oi_add = $data['oi_add'];
		$cita->oi_di = $data['oi_di'];
		$cita->oi_prisma = $data['oi_prisma'];
		$cita->oi_alt = $data['oi_alt'];
		$cita->oi_tipo = $data['oi_tipo'];
		$cita->observaciones = $data['observaciones'];
		$cita->endurecido = $data['endurecido'];
		$cita->tratam_uv = $data['tratam_uv'];
		$cita->tratam_anti_rayas = $data['tratam_anti_rayas'];
		$cita->tratam_anti_reflejos = $data['tratam_anti_reflejos'];
		$cita->hi_index = $data['hi_index'];
		$cita->hi_lite = $data['hi_lite'];
		$cita->seg_bif = $data['seg_bif'];
		$cita->aro = $data['aro'];
		$cita->costo_consulta = $data['costo_consulta'];
		$cita->examen_realizado = $data['examen_realizado'];
		$cita->fecha_consulta = $data['fecha_consulta'];
		$cita->save();

		$datos['cita'] = new Cita;
		$datos['form'] = array('route' => 'datos.citas.store', 'method' => 'POST');
		$datos['paciente'] = Paciente::find($data['id_paciente']);
		$datos['edad'] = $datos['paciente']->edad($datos['paciente']->fecha_nacimiento);
		return View::make('datos/citas/list-edit-form')->with('datos', $datos);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$paciente = Paciente::find($id);
		$datos['paciente'] = $paciente;
		if(!empty($paciente->fecha_nacimiento)){
			$datos['edad'] = $paciente->edad($paciente->fecha_nacimiento);
		}else{
			$datos['edad'] = 0;
		}
		
		$datos['cita'] = new Cita;
		$datos['cita']->fecha_consulta = date("Y-m-d");                         
		$datos['form'] = array('route' => 'datos.citas.store', 'method' => 'POST');
		return View::make('datos/citas/list-edit-form')->with('datos', $datos);
		
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$datos['cita'] = Cita::find($id);
		$datos['form'] = array('route' => array('datos.citas.update', $id), 'method' => 'PATCH');
		$datos['paciente'] = Paciente::find($datos['cita']->id_paciente);
		$datos['edad'] = $datos['paciente']->edad($datos['paciente']->fecha_nacimiento);
		return View::make('datos/citas/list-edit-form')->with('datos', $datos);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$data = Input::all();
		$cita = Cita::find($id);
		$cita->id_paciente = $data['id_paciente'];
		$cita->interrogatorio = $data['interrogatorio'];
		$cita->exploracion_conj = $data['exploracion_conj'];
		$cita->esclerotica = $data['esclerotica'];
		$cita->cornea = $data['cornea'];
		$cita->parpados = $data['parpados'];
		$cita->pestagna = $data['pestagna'];
		$cita->pupilas = $data['pupilas'];
		$cita->ref_pup = $data['ref_pup'];
		$cita->av_sc_od_u = $data['av_sc_od_u'];
		$cita->av_sc_od_d = $data['av_sc_od_d'];
		$cita->av_sc_oi_u = $data['av_sc_oi_u'];
		$cita->av_sc_oi_d = $data['av_sc_oi_d'];
		$cita->av_cc_od = $data['av_cc_od'];
		$cita->av_cc_oi = $data['av_cc_oi'];
		$cita->av_cc_od_esf = $data['av_cc_od_esf'];
		$cita->av_cc_od_cil = $data['av_cc_od_cil'];
		$cita->av_cc_od_add = $data['av_cc_od_add'];
		$cita->av_cc_oi_esf = $data['av_cc_oi_esf'];
		$cita->av_cc_oi_cil = $data['av_cc_oi_cil'];
		$cita->av_cc_oi_add = $data['av_cc_oi_add'];
		$cita->oftalmoscopia_od = $data['oftalmoscopia_od'];
		$cita->oftalmoscopia_oi = $data['oftalmoscopia_oi'];
		$cita->queratometria_od = $data['queratometria_od'];
		$cita->queratometria_oi = $data['queratometria_oi'];
		$cita->motilidad_ocular_od = $data['motilidad_ocular_od'];
		$cita->motilidad_ocular_oi = $data['motilidad_ocular_oi'];
		$cita->sentido_cromatico = $data['sentido_cromatico'];
		$cita->tonometria_od = $data['tonometria_od'];
		$cita->tonometria_oi = $data['tonometria_oi'];
		$cita->grad_od_esf = $data['grad_od_esf'];
		$cita->cap_visual_od = $data['cap_visual_od'];
		$cita->cap_visual_oi = $data['cap_visual_oi'];
		$cita->grad_od_cil = $data['grad_od_cil'];
		$cita->grad_od_eje = $data['grad_od_eje'];
		$cita->grad_od_av = $data['grad_od_av'];
		$cita->grad_oi_esf = $data['grad_oi_esf'];
		$cita->grad_oi_cil = $data['grad_oi_cil'];
		$cita->grad_oi_eje = $data['grad_oi_eje'];
		$cita->grad_oi_av = $data['grad_oi_av'];
		$cita->grad_di = $data['grad_di'];
		$cita->grad_add_od = $data['grad_add_od'];
		$cita->grad_add_oi = $data['grad_add_oi'];
		$cita->cerca_od_esf = $data['cerca_od_esf'];
		$cita->cerca_od_cil = $data['cerca_od_cil'];
		$cita->cerca_od_eje = $data['cerca_od_eje'];
		$cita->cerca_oi_esf = $data['cerca_oi_esf'];
		$cita->cerca_oi_cil = $data['cerca_oi_cil'];
		$cita->cerca_oi_eje = $data['cerca_oi_eje'];
		$cita->instrucciones = $data['instrucciones'];
		$cita->od_esf = $data['od_esf'];
		$cita->od_cil_eje = $data['od_cil_eje'];
		$cita->od_add = $data['od_add'];
		$cita->od_di = $data['od_di'];
		$cita->od_prisma = $data['od_prisma'];
		$cita->od_alt = $data['od_alt'];
		$cita->od_color = $data['od_color'];
		$cita->oi_esf = $data['oi_esf'];
		$cita->oi_cil_eje = $data['oi_cil_eje'];
		$cita->oi_add = $data['oi_add'];
		$cita->oi_di = $data['oi_di'];
		$cita->oi_prisma = $data['oi_prisma'];
		$cita->oi_alt = $data['oi_alt'];
		$cita->oi_tipo = $data['oi_tipo'];
		$cita->observaciones = $data['observaciones'];
		$cita->endurecido = $data['endurecido'];
		$cita->tratam_uv = $data['tratam_uv'];
		$cita->tratam_anti_rayas = $data['tratam_anti_rayas'];
		$cita->tratam_anti_reflejos = $data['tratam_anti_reflejos'];
		$cita->hi_index = $data['hi_index'];
		$cita->hi_lite = $data['hi_lite'];
		$cita->seg_bif = $data['seg_bif'];
		$cita->aro = $data['aro'];
		$cita->costo_consulta = $data['costo_consulta'];
		$cita->examen_realizado = $data['examen_realizado'];
		$cita->fecha_consulta = $data['fecha_consulta'];
		$cita->save();

		$datos['cita'] = new Cita;
		$datos['form'] = array('route' => 'datos.citas.store', 'method' => 'POST');
		$datos['paciente'] = Paciente::find($data['id_paciente']);
		$datos['cita']->fecha_consulta = date("Y-m-d");                         
		$datos['edad'] = $datos['paciente']->edad($datos['paciente']->fecha_nacimiento);
		return View::make('datos/citas/list-edit-form')->with('datos', $datos);
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
