function edita(codigo){
  
  var cpf = codigo;
        //ajax
        $.ajax({
          type: 'post',
          url: 'edita.php',
          data: {cpf: cpf},
        
          success: dados => { console.log(dados) },
          error: erro => { console.log(erro) }
        }).done(function(resposta){

          $.post('edita.php', data => { 
            $('#pagina').html(resposta)
          })
        }) 				
  }