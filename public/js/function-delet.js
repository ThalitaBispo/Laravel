function delet(codigo){
  
  var cpf = codigo;
  //ajax
  $.ajax({
    type: 'post',
    url: 'funcional/delet.php',
    data: {cpf: cpf},
  
    success: dados => { console.log(dados) },
    error: erro => { console.log(erro) }
  }).done(function(resposta){
  //   alert = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>" +
	// 				"<strong> CEP inválido!!" +
	// 				"<button type='button' class='close' data-dismiss='alert' aria-label='Close'>" +
	// 				"<span aria-hidden='true'>&times;</span>" +
	// 				"</button>" +
	// 				"</div>";
  // document.getElementById("mostrar").innerHTML += alert; 
  

  Modal = '<div style=position:fixed;z-index:1;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgb(0,0,0);background-color:rgba(0,0,0,0.4);>' +
            '<div class="modal-dialog modal-dialog-centered" role="document">' +
            '<div class="modal-content">' +
              '<div class="modal-header">' +
                '<h5 class="modal-title" id="exampleModalLabel">Deletar Usuário</h5>' +
                '<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">' +
                  '<span aria-hidden="true">&times;</span>' +
                '</button>' +
              '</div>' +
              '<div class="modal-body">' +
                'Tem certeza que deseja deletar este usuário? Os dados serão excluídos permanentemente' +
              '</div>' +
              '<div class="modal-footer">' +
                '<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>' +
                '<button type="button" class="btn btn-primary">Deletar</button>' +
              '</div>' +
            '</div>' +
          '</div>' +
        '</div>';

    document.getElementById("mostrar").innerHTML += Modal; 

  });
}