jQuery(document).ready(function($) {
	
});

function createNotificationBox(type,close){
	var box = $('<div id="notificationBox"><div class="back"></div></div>')
	var main = null;
	var closeO = '';
	if(close)
		closeO = '<i class="fa fa-times" title="fermer"></i>';
    if(type == 'p')
    	main = $('<div class="main-p">'+closeO+'<div class="contenu"></div></div>');
    else
    	main = $('<div class="main-g">'+closeO+'<div class="contenu"></div></div>');

    if(main.find('i').length > 0){
    	main.find('i').click(function(event) {
    		box.remove();
    		$('body').css('overflow', 'auto');
    	});
    	box.find('.back').click(function(event) {
    		box.remove();
    		$('body').css('overflow', 'auto');
    	});
    }

    box.append(main);

    $('body')
    .css('overflow', 'hidden')
    .prepend(box);

    return main.find('.contenu');
}

function closeNotification(){
	$('#notificationBox').remove();
}