jQuery(document).ready(function($) {

	$('.panel').draggable({revert:true,
		 revertDuration: 200 });

	$('.panel' ).resize(function() {
  $(this).find('.panel-body').append( "<div>Handler for .resize() called.</div>" );
});

	$(window).scroll(function(event) {
		/* Act on the event */
		$('#scrolling').text($(window).scrollTop())
		$('#top-about').text($('#about').offset().top)
		if($('#about').offset().top <= $(window).scrollTop() ){
			$('#box-fixe').animate({left: 5}, 20)
		}else{

			$('#box-fixe').css({left: '-250px'})
			
		}
	});


	if($('#notification').length>0){

		setTimeout(function(){
			
			$('#notification').animate({
				opacity: 0},
				1000, function() {
				$('#notification').remove();
			});
		},10000)
	}

	
});