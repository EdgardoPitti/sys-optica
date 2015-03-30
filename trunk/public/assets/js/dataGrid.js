$(function () {
	var host = window.location.host; 
	var $paciente = $("#pacientes");
	
	$paciente.bootstrapTable({
		method: 'get',
		url: 'http://'+host+'/sys-optica/public/getpacientes',
		height: 340,
		queryParams: function (p) {
			return { 
				search: $('#searchPatient').val(), //obtiene el valor del input en la vista paciente
				order: p.order,				
				limit: p.limit,
            offset: p.offset,	 
			};
		},  
		pagination: true,			
		sidePagination: "server",
		pageList: "[5,10,20,100,200,1000]",
      cache: false,	
	});
	//Al clickear el boton o presionar enter buscara el paciente	
	$('#buscarPaciente').submit(function (event) {	
		$paciente.bootstrapTable('refresh');		
		event.preventDefault();//evita que refresque la pagina
	});
	//refresca la tabla y envia search vacio
	$('#refresh').click(function () {
		$paciente.bootstrapTable('refresh',{query: {search: ''}});
	});
	$("#tabla-rgt").bootstrapTable();
	$("#tabla-cita").bootstrapTable();
});