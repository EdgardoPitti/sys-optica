$(function () {
 		var host = window.location.host; 
	
		$("#pacientes").bootstrapTable({
			method: 'get',
			url: 'http://'+host+'/sys-optica/public/getpacientes',
			height: 320,
			search: true,
			sidePagination: 'server',
			pagination: true
		});
		$("#tabla-rgt").bootstrapTable();
});
