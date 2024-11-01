(function($){
	
	$(window).scroll(function(){

		if($(window).scrollTop() > 100 ) {
			
			$('.cb-scroll').show(500);					
		}
		else {
			$('.cb-scroll').removeAttr('style');
		}
	});
	 $('.cb-scroll').click(function(){						
		$('html, body').animate({'scrollTop':'0'}, 1500);	
		
		return false;
	});	

	
})(jQuery);