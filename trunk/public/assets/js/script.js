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
