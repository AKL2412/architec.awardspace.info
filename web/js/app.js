jQuery(document).ready(function($) {

	$(window).scroll(function(event) {
		/* Act on the event */
		$('#scrolling').text($(window).scrollTop())
		$('#top-about').text($('#about').offset().top)
		if($('#about').offset().top <= $(window).scrollTop() ){
			$('#box-fixe').animate({left: 5}, 100)
		}else{

			$('#box-fixe').animate({left: -250}, 50)
			alert(78)
		}
	});
});