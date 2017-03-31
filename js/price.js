$( document ).ready(function() {
	$.easing.def = easeInOutQuad;
		$('tr.pricecell').click(function(e){
			var dropDown = $(this).parent().next();
			$('.priceinfo').not(dropDown).slideUp('slow');
			dropDown.slideToggle('slow');
			e.preventDefault();
})
});