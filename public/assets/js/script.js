$(document).ready(function() {
	$('.nav-aside').scrollToFixed({
        marginTop: $('#nav').outerHeight() + 16,
        limit: $('#footer').offset().top - $('.nav-aside').outerHeight() - 500
    });
    

	// attach table filter plugin to inputs
	$('.container-fluid').on('click', '.panel-heading span.filter', function(e){
		var $this = $(this), 
		$panel = $this.parents('.panel');
		
		$panel.find('.panel-body').slideToggle();
		if($this.css('display') != 'none') {
			$panel.find('.panel-body').show();
		}
	});
	$('[data-toggle="tooltip"]').tooltip();
	
	$('input[type="checkbox"]').bootstrapToggle({
		on: 'Si',
		off: 'No'
	});
});



function show(id) {	
    var host = window.location.host; 
	$.post("http://"+host+"/sys-optica/public/getcita",            
	  { cita: id }, 
	  function(data){	    
       $("#loading").fadeIn().html('<img alt="Cita" src="http://'+host+'/sys-optica/public/imgs/loading.gif" style="width:20px;">');
		 var datos = "<h4><label>"+data.first_name+" "+data.second_name+" "+data.last_name+" "+data.last_sec_name+"</label></h4><div class='row showDatos'>";	  	 
	  	 datos += "<div class='col-md-3 col-lg-3' align='center'> <img alt='Medico' src='http://"+host+"/plagetri21/public/imgs/"+data.foto+"' class='img-rounded' style='width:80px;'> </div>";
       datos += "<div class=' col-md-9 col-lg-9 '>";
       datos += "<table class='table table-user-information'><tbody>"; 
       datos += "<tr><td>Extensi&oacute;n:</td><td><label></label>"+data.extension+"</td></tr>";  
       datos += "<tr><td>Especialidad:</td><td><label>"+data.especiality+"</label></td></tr>";    
       datos += "<tr><td>Nivel:</td><td><label>"+data.level+"</label></td></tr>";
       datos += "<tr><td>Ubicación:</td><td><label>"+data.ubicacion+"</label></td></tr>";      
       datos += "<tr><td>Observación:</td><td><label>"+data.observacion+"</label></td></tr></tbody></table></div></div>";      
       
       setTimeout(function() {
			$("#loading").fadeOut();        
		 }, 2500);
       $("#showdatos").html(datos);      
		            
	}, 'json');
}

function verificarced(){
		var host = window.location.host;
		var c = 0;
		var divParent = $('#errorCedula'); //obtiene el div padre del input		
	   $.post("http://"+host+"/sys-optica/public/verificarced",
            { ced: $('#cedula').val() }, 
            function(data){
               $.each(data, function(index,element) {
					if(c == 0){
						c = 1;
						divParent.addClass('has-error has-feedback');
						divParent.append("<span class='glyphicon glyphicon-remove form-control-feedback remove' aria-hidden='true' data-toggle='tooltip' data-placement='top' title='Cédula duplicada' onclick='clearInput();'></span> <span id='inputError' class='sr-only remove'>(error)</span>");						
						$('.remove').tooltip('show');							
					}
            });
       });
       if (c == 0) {
				divParent.removeClass('has-error has-feedback');
				$('span.remove').remove(); 	
				divParent.find('.tooltip').remove();
       }           
}  
function clearInput() {
	var divParent = $('#errorCedula');
 	$('#cedula').val('');
 	divParent.removeClass('has-error has-feedback');
	divParent.find('span.remove').remove();
	divParent.find('.tooltip').remove();
						
}
