$(document).ready(function(){
	$('.clicavel').click(function(){
		$('.modal').removeClass('escondido');
	})

	$('.fechar').click(function(){
		$('.modal').addClass('escondido');
	})


	$('.login').click(function(){
		$('.form_login').toggleClass('escondido');
	})
})