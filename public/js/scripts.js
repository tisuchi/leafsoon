$(function() {
	
	$('.add-child-campanha').click(function() {
  		$('#form-group-anunciosdacampanha').show("slow");
  		$('#form-group-add_ads').remove();
	});
	
	var el = $('.form-group');
	$(el[10]).hide();
	$(el[11]).hide();
	$(el[12]).hide();
	var c = {};
	$('.anunciosdacampanhatype').on( "click", function() {
		var check = $( ".anunciosdacampanhatype:checked" ).val();
		
		c['image'] = el[10];
		c['video'] = el[11];
		c['iframe'] = el[12];
		$(el[10]).hide(); // image
		$(el[11]).hide(); // video
		$(el[12]).hide(); // html
		$(c[check]).show();
  	 	console.log($( ".anunciosdacampanhatype:checked" ).val() + " is checked!") ;
  	 		
	});

	function typeads_Select(){
		var check = $("#form-group-type input:checked").val();
		if(check != 'iframe'){
			// check = 'id_'+check;
		}
			$("#form-group-iframe").addClass('hidden');
			$("#form-group-id_imagem").addClass('hidden');
			$("#form-group-id_video").addClass('hidden');

		$("#form-group-"+check).removeClass('hidden').show();
		// console.log('check = ' + check);		
	}
	typeads_Select(); //executar funcao quando página carrega

	$("#form-group-type input").on("click",typeads_Select); //executar função ao clicar no radio
});