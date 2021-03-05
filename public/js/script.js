$(document).ready(() => {

	//EMPRESA
  $('#empresa').on('click', () => {

		$.post('cadastro-empresa.php', data => { 
			$('#pagina').html(data)
		})
	})
	
	$('#edita-empresa').on('click', () => {

		$.post('edita-empresa.php', data => { 
			$('#pagina').html(data)
		})
	 
	})

	//PESSOA FISICA
  $('#pessoa').on('click', () => {

		$.post('cadastro-pessoa.php', data => { 
			$('#pagina').html(data)
		})
	})

	$('#edita-pessoa').on('click', () => {

		$.post('edita-pessoa.php', data => { 
			$('#pagina').html(data)
		})
	})

	// $('#editar').on('click', () => {

	// 	$.post('teste.php', data => { 
	// 		$('#pagina').html(data)
	// 	})
	// })

	//PESQUISA DASHBOARD
	$(document).ready(function() {
		$('#rua').select2();
	});
	$(document).ready(function() {
		$('#bairro').select2();
	});

	//LOGIN
// 	$('.message a').click(function(){
// 		$('form').animate({
// 			height: "toggle", 
// 			opacity: "toggle"}, "slow"
// 			);
//  });

	
})