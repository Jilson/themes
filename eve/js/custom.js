$(document).ready(function(){
	$('.navbar-nav>li.dropdown .dropdown>a').after('<div class="arrow-down"><i class="fa fa-angle-down"></i></div>');
	$('.dropdown-menu .dropdown-menu').removeClass('dropdown-menu').addClass('inner-dropdown');
	$('.arrow-down').on('click', function() {
		 event.stopPropagation();
		$(this).next('.inner-dropdown').slideToggle(200);
	});
});	
$(document).ready(function(){
	$('section.feature').slick({
	  infinite: true,
	  slidesToShow: 1,
	  prevArrow: '<button class="slickPrev"><i class="fa fa-chevron-left"></i></button>',
	  nextArrow: '<button class="slickNext"><i class="fa fa-chevron-right"></i></button>'
	});
});	
$(document).ready(function(){
	$('button.navbar-toggle').on('click', function(){
		$('.navbar-fixed').toggleClass('open');
	});
	$(document).on('click', function(event) {
	  if (!$(event.target).closest('.navbar-wrapper').length) {
	   $('.navbar-fixed').removeClass('open');
	  }
	});
});	