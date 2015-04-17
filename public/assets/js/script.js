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