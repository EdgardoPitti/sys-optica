$(function () {
 		var host = window.location.host; 
		$("#pacientes").bootstrapTable({
			method: 'get',
			url: 'http://'+host+'/sys-optica/public/getpacientes',
			height: 320,
			search: true,
			pagination: true,			
			sidePagination: "server",
			pageList: "[5,10,20,100,200,1000]"
		});
		$("#tabla-rgt").bootstrapTable();
		$("#tabla-cita").bootstrapTable();
});
