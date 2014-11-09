jQuery(document).ready(function($) {
	/*
	Image de profil
	*/
	$('#new-profil-image').change(function(event) {
		/* Act on the event */
		//alert($(this).val());
		$(this).parent().submit();

	});
	//alert(123);

	/*
		changer le mot de pass
	*/
	$('.change-password form').hide();
	$('.change-password .voir-block').click(function(event) {
		/* Act on the event */
		$('.change-password form').toggle();
	});
	$('.change-password form').submit(function(event) {
		/* Act on the event */
		var pw = $(this).find('#pw').val();
		var cpw = $(this).find('#cpw').val();
		//alert(pw+' confirmation : '+cpw);
		if(pw != cpw){
			$(this).find('#cpw').parent().addClass('has-error has-feedback');
			event.preventDefault();
		}
	});
});