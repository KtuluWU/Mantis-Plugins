jQuery(document).ready(function($){

	var show = 100, //la distance en px par rapport en haut de la page à partir de laquelle le bouton s'affiche.
		translucency = 100, //le bouton est translucide
		duration = 350, // la durée pour retourner au top du page (ms)
		$back_to_top = $('.cd-top');

	$(window).scroll(function(){
		if( $(this).scrollTop() > show ) {
			$back_to_top.addClass('cd-is-visible');
		}
		else {
			$back_to_top.removeClass('cd-is-visible cd-translucency');
		}

		if( $(this).scrollTop() > translucency ) { 
			$back_to_top.addClass('cd-translucency');
		}
	});

	$back_to_top.on('click', function(go){
		go.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, duration
		);
	});

});