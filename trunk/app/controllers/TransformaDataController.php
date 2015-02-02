<?php

class TransformaDataController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	 
	public function DatosGenerales(){
		
		$antiguaTabla = DB::table('GRALES')->where('nombre', '<>', '')->skip(0)->take(1000)->get();
		foreach($antiguaTabla as $datos){
			$NuevaTabla = new Paciente;
			$PrimerNombre = '';
			$SegundoNombre = '';
			$PrimerApellido = '';
			$SegundoApellido = '';
			$nombres = explode(" ", $datos->nombre);
			$x = 1;
			foreach($nombres as  $nombre){
				if($x == 1){
					$PrimerNombre = $nombre.' ';
					$x = 0;
				}else{
					$SegundoNombre .= $nombre.' ';
				}
			}
			$apellidos = explode(" ", $datos->apellido);
			$x = 1;
			foreach($apellidos as  $apellido){
				if($x == 1){
					$PrimerApellido = $apellido.' ';
					$x = 0;
				}else{
					$SegundoApellido .= $apellido.' ';
				}
			}
			$NuevaTabla->primer_nombre = $PrimerNombre;
			$NuevaTabla->segundo_nombre = $SegundoNombre;
			$NuevaTabla->primer_apellido = $PrimerApellido;
			$NuevaTabla->segundo_apellido = $SegundoApellido;
			$NuevaTabla->cedula = $datos->ced;
			$NuevaTabla->id_tipo_sangre = 1;
			if($datos->sexo == 'F'){
				$NuevaTabla->sexo = 0;
			}else{
				$NuevaTabla->sexo = 1;
			}
			$NuevaTabla->celular = $datos->tel;
			$NuevaTabla->telefono = $datos->tel2;
			$NuevaTabla->email = $datos->tel3;
			$NuevaTabla->fecha_nacimiento = $datos->fech_cump;
			$NuevaTabla->ocupacion = $datos->ocup;
			$NuevaTabla->direccion = $datos->direc;
			$NuevaTabla->examen = $datos->eg;
			$dataFicha = Ficha::where('ced', $datos->ced)->first();
			$diabetes = 0;
			if(!empty($dataFicha)){
				if($dataFicha->diab == 'SI'){
					$diabetes = 1;
				}
			}
			$NuevaTabla->diabetes = $diabetes;
			$NuevaTabla->referido_por = $datos->ref;
			$NuevaTabla->observaciones = '';
			$NuevaTabla->clasificacion = $datos->clasif;
			$NuevaTabla->save();
			
		}
	
	}
	
	
	public function DatosCitas(){
		
		$antiguaTabla = DB::table('HISTORIA')->where('ced', '<>', '')->skip(0)->take(1000)->get();
		foreach($antiguaTabla as $datos){
			$nuevaTabla = new Cita;
			$nuevaTabla->id_paciente = ;
			$nuevaTabla->interrogatorio = ;
			$nuevaTabla->exploracion_conj = ;
			$nuevaTabla->esclerotica = ;
			$nuevaTabla->cornea = ;
			$nuevaTabla->parpados = ;
			$nuevaTabla->pestagna = ;
			$nuevaTabla->pupilas = ;
			$nuevaTabla->ref_pup = ;
			$nuevaTabla->av_sc_od_u = ;
			$nuevaTabla->av_sc_od_d = ;
			$nuevaTabla->av_sc_oi_u = ;
			$nuevaTabla->av_sc_oi_d = ;
			$nuevaTabla->av_cc_od = ;
			$nuevaTabla->av_cc_oi = ;
			$nuevaTabla->av_cc_od_esf = ;
			$nuevaTabla->av_cc_od_cil = ;
			$nuevaTabla->av_cc_od_add = ;
			$nuevaTabla->av_cc_oi_esf = ;
			$nuevaTabla->av_cc_oi_cil = ;
			$nuevaTabla->av_cc_oi_add = ;
			$nuevaTabla->oftalmoscopia_od = ;
			$nuevaTabla->oftalmoscopia_oi = ;
			$nuevaTabla->queratometria_od = ;
			$nuevaTabla->queratometria_oi = ;
			$nuevaTabla->motilidad_ocular_od = ;
			$nuevaTabla->motilidad_ocular_oi = ;
			$nuevaTabla->sentido_cromatico = ;
			$nuevaTabla->tonometria_od = ;
			$nuevaTabla->tonometria_oi = ;
			$nuevaTabla->grad_od_esf = ;
			$nuevaTabla->cap_visual_od = ;
			$nuevaTabla->cap_visual_oi = ;
			$nuevaTabla->grad_od_cil = ;
			$nuevaTabla->grad_od_eje = ;
			$nuevaTabla->grad_od_av = ;
			$nuevaTabla->grad_oi_esf = ;
			$nuevaTabla->grad_oi_cil = ;
			$nuevaTabla->grad_oi_eje = ;
			$nuevaTabla->grad_oi_av = ;
			$nuevaTabla->grad_di = ;
			$nuevaTabla->grad_add_od = ;
			$nuevaTabla->grad_add_oi = ;
			$nuevaTabla->cerca_od_esf = ;
			$nuevaTabla->cerca_od_cil = ;
			$nuevaTabla->cerca_od_eje = ;
			$nuevaTabla->cerca_oi_esf = ;
			$nuevaTabla->cerca_oi_cil = ;
			$nuevaTabla->cerca_oi_eje = ;
			$nuevaTabla->instrucciones = ;
			$nuevaTabla->od_esf = ;
			$nuevaTabla->od_cil_eje = ;
			$nuevaTabla->od_add = ;
			$nuevaTabla->od_di = ;
			$nuevaTabla->od_prisma = ;
			$nuevaTabla->od_alt = ;
			$nuevaTabla->od_color = ;
			$nuevaTabla->oi_esf = ;
			$nuevaTabla->oi_cil_eje = ;
			$nuevaTabla->oi_add = ;
			$nuevaTabla->oi_di = ;
			$nuevaTabla->oi_prisma = ;
			$nuevaTabla->oi_alt = ;
			$nuevaTabla->oi_tipo = ;
			$nuevaTabla->observaciones = ;
			$nuevaTabla->save();
			
		}
		
	
	
	
	}
	
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
