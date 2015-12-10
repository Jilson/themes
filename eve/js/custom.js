$(document).ready(function(){
	$('.navbar-nav>li.dropdown .dropdown>a').after('<div class="arrow-down"><i class="fa fa-angle-down"></i></div>');
	$('.dropdown-menu .dropdown-menu').removeClass('dropdown-menu').addClass('inner-dropdown');
	$('.arrow-down').on('click', function() {
		 event.stopPropagation();
		$(this).next('.inner-dropdown').slideToggle(200);
	});
});	
	