(function($) {

	function find_page_number( element ) {
		element.find('span.current').remove();
		return parseInt( element.html() );
	}

	$(document).on( 'click', '.paginate a.page-numbers', function( event ) {
		event.preventDefault();

		// get url parameters for search ajax
		var getUrlParameter = function getUrlParameter(sParam) {
	    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
	        sURLVariables = sPageURL.split('&'),
	        sParameterName,
	        i;

	    for (i = 0; i < sURLVariables.length; i++) {
	        sParameterName = sURLVariables[i].split('=');

		        if (sParameterName[0] === sParam) {
		            return sParameterName[1] === undefined ? true : sParameterName[1];
		        }
		    }
		};
		var search = getUrlParameter('s');
		//  end get url parameters for search ajax

		// Get category or author for cat and author ajax
		var cat = $('.catID').html();
		var auth = $('.curAuth').html();
		// end Get category or author for cat and author ajax
		
		page = find_page_number( $(this).clone() );

		$.ajax({
			url: ajaxpagination.ajaxurl,
			type: 'post',
			data: {
				action: 'ajax_pagination',
				query_vars: ajaxpagination.query_vars,
				page: page,
				search: search,
				cat: cat,
				auth: auth
			},
			beforeSend: function() {
				$('.loop-container').find( 'article' ).remove();
				$('.loop-container .paginate').remove();
				$(document).scrollTop();
				$('.loop-container').append( '<div id="loader">Loading New Posts...</div>' );
			},
			success: function( html ) {
				$('.loop-container #loader').remove();
				$('.loop-container').append( html );
			}
		})
	})
})(jQuery);