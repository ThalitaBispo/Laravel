
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

  <?php include_once('mask.php'); ?>

<div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="container border mt-5">
          <div class="row">
            <div class="col">

              <h4 class="mt-5">Editar Pessoa Física</h4>
              <hr>
                
                <?php include_once("funcional/select-pessoa.php"); ?>
                <?php while($row = $stmt->fetch()){ ?>

                <form class="mt-4 mb-5" method="POST" action="funcional/update-pessoa.php">
                  <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" value="<?php echo $row['nm_nome']; ?>" placeholder="Nome">
                  </div>

                  <div class="form-group">
                    <label>CPF</label>
                    <input type="text"  name="cpf"class="form-control" value="<?php echo Mask("###.###.###-##", $row['cd_cpf']); ?>" minlength="14" maxlength="14" placeholder="00.000.000/0000-00" onkeypress="$(this).mask('000.000.000-00')">
                    <br>
                    <input data-toggle="modal" data-target="#ModalAtualizarCPF" type="button" value="Atualizar CPF" class="btn btn-dark">
                  </div>

                  <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" name="telefone" class="form-control" value="<?php echo Mask("(##) #####-####", $row['cd_telefone']); ?>" minlength="11" maxlength="12" placeholder="(00) 00000-0000" onkeypress="$(this).mask('(00) 00000-0000')">
                  </div>

                  <div class="form-group">
                    <label>CEP</label>
                    <input type="text" name="cep" class="form-control" id="cep" value="<?php echo Mask("##.###-###", $row['cd_cep']); ?>" placeholder="00.000-000" onkeyup='return event.charCode >= 48 && event.charCode <= 57' onkeypress="$(this).mask('00.000-000')">
                    <br>
                    <input type="button" value="Buscar" class="btn btn-dark" onclick="pesquisacep(cep.value);"> 
                  </div>

                  <p id="mostrar"></p>

                  <div class="form-group mt-2">
                    <label>Logradouro</label>
                    <input type="text" name="logradouro" class="form-control" id="rua" value="<?php echo $row['nm_logradouro']; ?>" placeholder="Logradouro">
                  </div>

                  <div class="form-group row">
                    <div class="col">
                      <label>N°</label>
                      <input type="number"name="numero"  class="form-control" value="<?php echo $row['cd_numero']; ?>" placeholder="00000">
                    </div>
                    
                    <div class="col">
                      <label>Qd.</label>
                      <input type="number"name="quadra" class="form-control" value="<?php echo $row['cd_quadra']; ?>" placeholder="00000">
                    </div>

                    <div class="col">
                      <label>Lt.</label>
                      <input type="number" name="lote" class="form-control" value="<?php echo $row['cd_lote']; ?>" placeholder="00000">
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Bairro</label>
                    <input type="text" name="bairro" class="form-control" id="bairro" value="<?php echo $row['nm_bairro']; ?>" placeholder="Bairro">
                  </div>

                  <div class="form-group">
                    <label>Cidade</label>
                    <input type="text" name="cidade" class="form-control" id="cidade" value="<?php echo $row['nm_cidade']; ?>" placeholder="Cidade">
                  </div>

                  <div class="form-group">
                    <label>Estado</label>
                    <input type="text" name="estado" class="form-control" id="uf" value="<?php echo $row['nm_estado']; ?>" placeholder="Estado">
                  </div>

                  <div class="form-group row">
                    <div class="col">
                      <label>Dia para pagamento</label>
                      <input type="text" name="diapagamento" class="form-control" value="<?php echo $row['dd_pagamento']; ?>" maxlength="2" placeholder="00">
                    </div>
                    
                    <div class="col">
                      <label>Valor</label>
                      <input type="text" name="valor" class="form-control" value="<?php echo $row['vl_pagamento']; ?>" placeholder="R$ 0,00" onkeypress="$(this).mask('R$ #.##0,00', {reverse: true});">
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Vendedor</label>
                    <input type="text" name="vendedor" class="form-control" value="<?php echo $row['nm_vendedor']; ?>" placeholder="Vendedor">
                  </div>

                  <button type="submit" class="btn btn-dark mt-4">Salvar</button>

                </form>

                <!-- Modal -->
              <div class="modal fade" id="ModalAtualizarCPF" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Atualizar CPF</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>

                    <form method="POST" action="funcional/updatecpf.php?nome=<?php echo $row['nm_nome'] ?>">
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Novo CPF:</label>
                        <input type="text" name="novocpf" class="form-control" id="recipient-name" onkeypress="$(this).mask('000.000.000-00')">
                      </div>
                  </div>
                    
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
                      <button type="submit" class="btn btn-dark">Atualizar</button>
                    </div>
                    </form>

                  </div>
                </div>
              </div>

              <?php } ?>
              
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
