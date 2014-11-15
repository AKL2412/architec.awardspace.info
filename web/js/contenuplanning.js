jQuery(document).ready(function($) {
	
	var champCorrects = new Array();
	$('#continuer').hide();

	/**
	*	Draggable aux elements : professeurs,matieres et salles
	*/
	$('.data-case-move').draggable({
		revert : true,
		revertDuration: 0 
	});

	// $('.data-case').draggable({
	// 	revert : false
	// });

	$( ".case" ).droppable(
		{ 
			accept: ".data-case-move",
			 hoverClass: "drop-hover" ,
			// activate: function( event, ui ) {
			// 	alert('active')
			// },
			drop: function( event, ui ) {

				var div = $(ui.draggable[0]);
				var type = div.attr('type');
				var id = div.attr('objectId');
				
				var nom = div.text().trim();
				
				//$(this).text("ok");

				var self = $(this);

				if(self.find('.matiere').attr('etat') == 'vide' && type != 'matiere'){
					alert('Renseigner la matière en prémier lieu !!');
					return false;
				}



				if(type == 'salle'){

					var divC = self.find('.salle').show()
					.text(nom)
					.attr('etat','ok')
					.attr('objectId',id);

				}else if(type == 'matiere'){

					var divC = self.find('.matiere').show()
					.text(nom)
					.attr('etat','ok')
					.attr('objectId',id);

					var url= div.attr('url');

					recupererProf(url,nom);

				}else if(type == 'professeur'){

					var divC = self.find('.professeur').show()
					.text(nom)
					.attr('etat','ok')
					.attr('objectId',id);

				}
				//alert(type+" : "+nom+" - Id : "+id);

			}
		}
		);

	/*
	*	Initia
	*/
	$('.case .data-case').hide();

	$.each($('.case i'), function(index, val) {

		 $(val).click(function(event) {

		 	var temp = $(this).parent();
				temp.find('.data-case').attr('etat','vide').text("").hide();
				//temp.find('.matiere').attr('etat','vide');
		 });
	});


	function recupererProf(url,nom){

		$.get(url, function(data) {
			$("#lesProfesseurs").find('.panel-heading').text('Les professeurs enseignant '+nom);
			$("#lesProfesseurs").find('.panel-body').html(data);
		});
	}


	/*
	*	La verification 
	*/
	$('#verification').click(function(event) {
		$('#lesSeances .case').removeAttr('class')
		.addClass('case');
		champCorrects = new Array();
		$.each($('#lesSeances .case'), function(index, val) {
			 /* iterate through array or object alert-danger*/
			 var divCase = $(val);
			 var mat = divCase.find('.matiere');
			 if(mat.length > 0){
			 	if(mat.attr('etat') == 'vide'){
			 		divCase.addClass('alert-danger');
			 	}else{
			 		var prof = divCase.find('.professeur');
			 		var salle = divCase.find('.salle');
			 		var obj = {
							matiere : mat.attr('objectId'),
							professeur:prof.attr('objectId'),
							salle:salle.attr('objectId'),
							jour:divCase.attr('jour'),
							heure:divCase.attr('heure')
						};
			 		if(prof.attr('etat') == 'vide' || salle.attr('etat') == 'vide' ){
						divCase.addClass('alert-warning');
					}else{
						divCase.addClass('alert-success');
					}
					champCorrects.push(obj);
			 	}
			 }else{
			 	divCase.addClass('alert-danger');
			 }
		});
		if(champCorrects.length > 0)
			$('#continuer').show();
	});

	/*
	*	Actualiser la la page
	*/
	$('#refresh').click(function(event) {
		/* Act on the event */
		location.reload();
		
	});

	/*
	* Send to saving the content
	*/
	$('#continuer').click(function(event) {
		/* Act on the event */
		var compter = 0;

		var cont = createNotificationBox('p',false);
		var pbar = createProgressBar();
		cont.html(pbar);
		var pmsg = $('<div>Patientez...</div>');
		cont.append(pmsg);

		save(compter,pbar,pmsg,$(this).attr('url'));



		
	});

	function save(compter,pbar,pmsg,url){
	 
	$.post(url,champCorrects[compter], function(data) {
			if(data == 'ok'){

				updateProgressBar(pbar,parseInt(((compter+1)*100))/champCorrects.length);
				compter++;
				//pmsg.text(data);
				console.log(data);
				if(compter < champCorrects.length){
					
					save(compter,pbar,pmsg,url);
				}else{
					pmsg.html('<i class="fa fa-check-square-o"></i> Chargement terminé!');
					setTimeout(function(){
						closeNotification();
						window.location.href = window.location.href.toString()+'?action=visionner';
					},5000);
				}
			}else{
				pmsg.html('<i class="fa fa-cwarning"></i> '+data);
					setTimeout(function(){
						closeNotification()
					},10000);
				
			}
		});
}

});


function createProgressBar(){
	var bar = $('<div class="progress"><div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"><span >0%</span></div></div>');
	return bar;
}
function updateProgressBar(elt,newValue){
	elt.find('.progress-bar').attr('aria-valuenow',newValue)
	.attr('style','width:'+newValue+'%');
	elt.find('.progress-bar span').text(newValue+'%');
}