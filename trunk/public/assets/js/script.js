$(document).ready(function() {
	$('.nav-aside').scrollToFixed({
        marginTop: $('#nav').outerHeight() + 16,
        limit: $('#footer').offset().top - $('.nav-aside').outerHeight() - 500
    });
});