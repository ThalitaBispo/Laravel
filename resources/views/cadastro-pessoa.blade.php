
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

<div class="container">
    <div class="row">
      <div class="col-md-9">
        <div class="container border mt-5">
          <div class="row">
            <div class="col">

              <h4 class="mt-5">Cadastro Pessoa Física</h4>
              <hr>
                
                <form class="mt-4 mb-5" method="post" action="funcional/insert-pessoa.php">
                  <div class="form-group">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control" placeholder="Razão Social">
                  </div>

                  <div class="form-group">
                    <label>CPF</label>
                    <input type="text" name="cpf" class="form-control" minlength="14" maxlength="14" placeholder="000.000.000-00" onkeypress="$(this).mask('000.000.000-00')">
                  </div>

                  <div class="form-group">
                    <label>Telefone</label>
                    <input type="text" name="telefone" class="form-control" minlength="11" maxlength="12" placeholder="(00) 00000-0000" onkeypress="$(this).mask('(00) 00000-0000')">
                  </div>

                  <div class="form-group">
                    <label>CEP</label>
                    <input type="text" name="cep" class="form-control" id="cep" placeholder="00.000-000" onkeyup='return event.charCode >= 48 && event.charCode <= 57' onkeypress="$(this).mask('00.000-000')">
                    <br>
                    <input type="button" value="Buscar" class="btn btn-dark" onclick="pesquisacep(cep.value);"> 
                  </div>

                  <p id="mostrar"></p>

                  <div class="form-group mt-2">
                    <label>Logradouro</label>
                    <input type="text" name="logradouro" class="form-control" id="rua" placeholder="Logradouro">
                  </div>

                  <div class="form-group row">
                    <div class="col">
                      <label>N°</label>
                      <input type="number" name="numero" class="form-control" placeholder="00000">
                    </div>
                    
                    <div class="col">
                      <label>Qd.</label>
                      <input type="number" name="quadra" class="form-control" placeholder="00000">
                    </div>

                    <div class="col">
                      <label>Lt.</label>
                      <input type="number" name="lote" class="form-control" placeholder="00000">
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Bairro</label>
                    <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro">
                  </div>

                  <div class="form-group">
                    <label>Cidade</label>
                    <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade">
                  </div>

                  <div class="form-group">
                    <label>Estado</label>
                    <input type="text" name="estado" class="form-control" id="uf" placeholder="Estado">
                  </div>

                  <div class="form-group row">
                    <div class="col">
                      <label>Dia para pagamento</label>
                      <input type="text" name="diapagamento" class="form-control" maxlength="2" placeholder="00">
                    </div>
                    
                    <div class="col">
                      <label>Valor</label>
                      <input type="text" name="valor" class="form-control" placeholder="R$ 0,00" onkeypress="$(this).mask('R$ #.##0,00', {reverse: true});">
                    </div>
                  </div>

                  <div class="form-group">
                    <label>Vendedor</label>
                    <input type="text" name="vendedor" class="form-control" placeholder="Vendedor">
                  </div>

                  <button type="submit" class="btn btn-dark mt-4">Salvar</button>

                </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
