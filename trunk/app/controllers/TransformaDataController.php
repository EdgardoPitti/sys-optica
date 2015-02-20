<?php

class TransformaDataController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	 
	 
	public function DatosGenerales(){
		
		$antiguaTabla = DB::table('GRALES')->where('ced', '<>', '')->get();
		//$antiguaTabla = DB::table('GRALES')->where('', '4-807-2005')->get();
		$x = 0;
		foreach($antiguaTabla as $datos){
			$x++;
			$NuevaTabla = new Paciente;
			$PrimerNombre = '';
			$SegundoNombre = '';
			$PrimerApellido = '';
			$SegundoApellido = '';
			$nombres = explode(" ", $datos->nombre);
			$x = 1;
			foreach($nombres as  $nombre){
				if($x == 1){
					$PrimerNombre = $nombre;
					$x = 0;
				}else{
					$SegundoNombre .= $nombre.' ';
				}
			}
			$apellidos = explode(" ", $datos->apellido);
			$x = 1;
			foreach($apellidos as  $apellido){
				if($x == 1){
					$PrimerApellido = $apellido;
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
				$NuevaTabla->observaciones = $dataFicha->obs1.$dataFicha->obs2;
			}
			$NuevaTabla->diabetes = $diabetes;
			$NuevaTabla->referido_por = $datos->ref;
			$NuevaTabla->clasificacion = $datos->clasif;
			$NuevaTabla->save();
			
		}
		echo 'Pacientes Nuevos: '.$x.'';
	}
	
	
	public function DatosCitas(){
		
		$x = 0;
		$y = 0;
		$antiguaTabla = DB::table('HISTORIA')->where('ced','<>', '')->get();
			foreach($antiguaTabla as $datos){
				$nuevaTabla = new Cita;
				$paciente = Paciente::where('cedula', $datos->ced)->first();
				if(!empty($paciente)){
					$x++;
					$nuevaTabla->id_paciente = $paciente->id;
					$nuevaTabla->interrogatorio = $datos->l1.$datos->l2.$datos->l3;
					$nuevaTabla->exploracion_conj = $datos->econj;
					$nuevaTabla->esclerotica = $datos->escle;
					$nuevaTabla->cornea = $datos->cornea;
					$nuevaTabla->parpados = $datos->parpado;
					$nuevaTabla->pestagna = $datos->pestana;
					$nuevaTabla->pupilas = $datos->pupilas;
					$nuevaTabla->ref_pup = $datos->reflpup;
					$nuevaTabla->av_sc_od = $datos->scod;
					$nuevaTabla->av_sc_oi = $datos->scoi;
					$nuevaTabla->av_cc_od = $datos->ccod;
					$nuevaTabla->av_cc_oi = $datos->ccoi;
					$nuevaTabla->av_cc_od_esf = $datos->odest;
					$nuevaTabla->av_cc_od_cil = $datos->odecil;
					$nuevaTabla->av_cc_od_add = $datos->odeadd;
					$nuevaTabla->av_cc_oi_esf = $datos->oiest;
					$nuevaTabla->av_cc_oi_cil = $datos->oicil;
					$nuevaTabla->av_cc_oi_add = $datos->oiadd;
					$nuevaTabla->oftalmoscopia_od = $datos->oftoi1.$datos->oftoi3;
					$nuevaTabla->oftalmoscopia_oi = $datos->oftoi2.$datos->oftoi4;
					$nuevaTabla->queratometria_od = $datos->querod;
					$nuevaTabla->queratometria_oi = $datos->queroi;
					$nuevaTabla->motilidad_ocular_od = $datos->mod;
					$nuevaTabla->motilidad_ocular_oi = $datos->mo_oi;
					$nuevaTabla->sentido_cromatico = $datos->scrom;
					$nuevaTabla->tonometria_od = $datos->to_od;
					$nuevaTabla->tonometria_oi = $datos->to_oi;
					$nuevaTabla->grad_od_esf = $datos->godest;
					$nuevaTabla->cap_visual_od = $datos->capvisual;
					$nuevaTabla->cap_visual_oi = $datos->oi;
					$nuevaTabla->grad_od_cil = $datos->godcil;
					$nuevaTabla->grad_od_eje = $datos->godeje;
					$nuevaTabla->grad_od_av = $datos->godav;
					$nuevaTabla->grad_oi_esf = $datos->goiest;
					$nuevaTabla->grad_oi_cil = $datos->goicil;
					$nuevaTabla->grad_oi_eje = $datos->goieje;
					$nuevaTabla->grad_oi_av = $datos->goiav;
					$nuevaTabla->grad_di = $datos->gdi;
					$nuevaTabla->grad_add_od = $datos->gaddod;
					$nuevaTabla->grad_add_oi = $datos->gaddoi;
					$nuevaTabla->cerca_od_esf = $datos->codest;
					$nuevaTabla->cerca_od_cil = $datos->codcil;
					$nuevaTabla->cerca_od_eje = $datos->codeje;
					$nuevaTabla->cerca_oi_esf = $datos->coiest;
					$nuevaTabla->cerca_oi_cil = $datos->coicil;
					$nuevaTabla->cerca_oi_eje = $datos->coieje;
					$nuevaTabla->instrucciones = $datos->inst1.$datos->inst2.$datos->inst3.$datos->inst4;
					
					$ficha = Ficha::where('ced', $datos->ced)->where('fecha', $datos->fecha)->first();
					if(!empty($ficha)){
					
						$nuevaTabla->od_esf = $ficha->od_esf;
						$nuevaTabla->od_cil_eje = $ficha->odce;
						$nuevaTabla->od_add = $ficha->oda;
						$nuevaTabla->od_di = $ficha->di;
						$nuevaTabla->od_prisma = $ficha->prisma;
						$nuevaTabla->od_alt = $ficha->alto;
						$nuevaTabla->od_color = $ficha->odcc;
						$nuevaTabla->oi_esf = $ficha->oi_esf;
						$nuevaTabla->oi_cil_eje = $ficha->oice;
						$nuevaTabla->oi_add = $ficha->oia;
						$nuevaTabla->oi_di = $ficha->oi_di2;
						$nuevaTabla->oi_prisma = $ficha->oipris;
						$nuevaTabla->oi_alt = $ficha->oialto;
						$nuevaTabla->oi_tipo = $ficha->oibit;
						$nuevaTabla->observaciones = $ficha->comen1.$ficha->comen2;
						
						$var = 0;
						if($ficha->endur == 'SI'){
							$var = 1;
						}
						$nuevaTabla->endurecido = $var;
						$var = 0;
						if($ficha->tratauv == 'SI'){
							$var = 1;
						}
						$nuevaTabla->tratam_uv = $var;
						$var = 0;
						if($ficha->tratary == 'SI'){
							$var = 1;
						}
						$nuevaTabla->tratam_anti_rayas = $var;
						$var = 0;
						if($ficha->tratarf == 'SI'){
							$var = 1;
						}
						$nuevaTabla->tratam_anti_reflejos = $var;
						$var = 0;
						if($ficha->hiidx == 'SI'){
							$var = 1;
						}
						$nuevaTabla->hi_index = $var;
						$var = 0;
						if($ficha->hilite == 'SI'){
							$var = 1;
						}
						$nuevaTabla->hi_lite = $var;
						$nuevaTabla->seg_bif = $ficha->segbif;
						$nuevaTabla->aro = $ficha->aro;
					}
					$observa = Observa::where('ced', $datos->ced)->where('fecha', $datos->fecha)->first();
					if(!empty($observa)){
						$nuevaTabla->costo_consulta = $observa->costo;
						$nuevaTabla->examen_realizado = $observa->lin1.$observa->lin2.$observa->lin3.$observa->lin4.$observa->lin5.$observa->lin6.$observa->lin7.$observa->lin8.$observa->lin9.$observa->lin10;
					}
					$nuevaTabla->fecha_consulta = $datos->fecha;
					$nuevaTabla->save();
					
					$id_Cita = DB::table('citas')->max('id');
					
					$LCA = LentCont::where('cedula', $paciente->cedula)->where('fecha', $datos->fecha)->first();
					if(!empty($LCA)){
						$y++;
						$LC = new LenteContacto;
						$LC->id_cita = $id_Cita;
						$LC->kod = $LCA->k1;
						$LC->koi = $LCA->k2;
						$LC->diam_dhiv = $LCA->dhiv;
						$LC->ap = $LCA->ap;
						$LC->parpados = $LCA->parp;
						$LC->esclera = $LCA->es;
						$LC->conjuntiva = $LCA->con;
						$LC->iris = $LCA->ir;
						$LC->cornea = $LCA->corn;
						$LC->pmma = $LCA->pmma;
						$LC->hema = $LCA->perm;
						$LC->permeable = $LCA->hema;
						$LC->proveedor = $LCA->prov;
						$LC->soluciones = $LCA->l5.$LCA->l6.$LCA->L7;
						$LC->datos_lc = $LCA->datoslc.$LCA->datoslc1.$LCA->datoslc2.$LCA->datoslc3.$LCA->datoslc4.$LCA->datoslc5.$LCA->datoslc6.$LCA->datoslc7.$LCA->datoslc8.$LCA->datoslc9.$LCA->datoslc10.$LCA->datoslc11.$LCA->datoslc12.$LCA->datoslc13.$LCA->datoslc14.$LCA->datoslc15.$LCA->datoslc16.$LCA->datoslc17.$LCA->datoslc18.$LCA->datoslc19.$LCA->datoslc20;
						$LC->r_od = $LCA->od;
						$LC->r_oi = $LCA->oi;
						$LC->r_tipo = $LCA->tipo;
						$LC->r_soluciones = $LCA->soluc1.$LCA->soluc2.$LCA->soluc3.$LCA->soluc4;
						$LC->r_costo = $LCA->costo;
						$LC->r_observaciones = $LCA->observ1.$LCA->observ2.$LCA->observ3.$LCA->observ4;
						$LC->save();
					}
				}
				
			}
	
		echo 'Citas: '.$x.' y LC: '.$y.'<br>';
	
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
