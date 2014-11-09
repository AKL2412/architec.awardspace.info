jQuery(document).ready(function($) {
	
	/**
	*	Draggable aux elements : professeurs,matieres et salles
	*/
	$('.data-case-move').draggable({
		revert : true,
		revertDuration: 0 
	});

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
					.text(nom);

				}else if(type == 'matiere'){

					var divC = self.find('.matiere').show()
					.text(nom)
					.attr('etat','ok');

				}else if(type == 'professeur'){

					var divC = self.find('.professeur').show()
					.text(nom);

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
				temp.find('.data-case').text("").hide();
				temp.find('.matiere').attr('etat','vide');
		 });
	});
});