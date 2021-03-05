<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<title>Grupo Lions</title>

		<!-- estilos -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<!-- script -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" src="js/cep.js"></script>
		<script type="text/javascript" src="js/function.js"></script>
		<script type="text/javascript" src="js/function-delet.js"></script>

		<!-- Select -->
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
		
	</head>

	<body>

	<?php include_once('mask.php'); ?>

		<!-- menu -->
		<div class="nav-side-menu">
		    <div class="brand mt-4 mb-4"> <img src="img/_grupo lions.png" width="200px"> </div>
		    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
		  
		        <div class="menu-list">
		  
		            <ul id="menu-content" class="menu-content collapse out">
		                <li>
		                  <a href="dashboard.php"><i class="material-icons sidebar-icon">dashboard</i> Dashboard</a>
		                </li>
		                
		                <li  data-toggle="collapse" data-target="#ajuda" class="collapsed">
		                    <a href="#"><i class="material-icons sidebar-icon">group_add</i> Cadastro <span class="arrow"><i class="fa fa-angle-down"></i></span></a>
		                </li>
		                <ul class="sub-menu collapse" id="ajuda">
		                    <li><a href="#" id="empresa"><i class="fa fa-angle-right"></i> Cadastro empresa </a></li>
		                    <li><a href="#" id="pessoa"><i class="fa fa-angle-right"></i> Cadastro pessoa física<small><i class="fa fa-external-link"></i></small></a></li>
		                </ul>

						<li>
		                  <a href="index.php"><i class="material-icons sidebar-icon">exit_to_app</i> Sair </a>
		                </li>

		            </ul>
		     </div>
		</div>

		<!-- paginas -->
		<div class="main" id="pagina">
		    
		    <div class="container">

		    	<div class="row">
		    		<div class="col">
						
						<form>
							<div class="form-group row">
								<label class="col-sm-9 col-form-label">Dashboard:</label>
							</div>
						</form>

						<hr />

		    		</div>
		    	</div>

				  <form method="post" action="">
		    	
							<div class="row mb-3">
								<div class="col-md-4">
									<div class="card-header">
										<label for="">Bairro:</label>
											<select id="bairro" style="width:280px;">
													<option></option>
													<option value="AC"></option>
											</select>
									</div>
								</div>

								<input type="submit" name="Buscar">

								<div class="col-md-4">
									<div class="card-header">
									<label for="">Rua:</label>
											<select id="rua" style="width:280px;">
													<option></option>
													<option value="AC"></option>
											</select>
									</div>
								</div>
								
							</div>

						<div class="table-overflow">

							<table class="table table-striped">
								<thead class="thead-dark">
									<tr>
										<th class="" style="width: 1%"></th>
										<th class="" style="width: 30%">Nome/Razão Social</th>
										<th class="" style="width: 20%">Bairro</th>
										<th class="" style="width: 20%">Telefone</th>
										<th class="" style="width: 20%">Ações:</th>
										<th class="" style="width: 20%"></th>
									</tr>
							</thead>

								<tbody>
								
								     <?php include_once('funcional/select.php');
								      while($row = $stmt->fetch()){ ?>

									<tr>
										<td></td>
										<td> <?php echo $row['nm_nome'], $row['nm_razaosocial']; ?> </td>
										<td> <?php echo $row['nm_bairro']; ?> </td>
										<td> <?php echo Mask("(##) #####-####", $row['cd_telefone']); ?> </td>
																				
										<td  style="width: 40%">

											<a style="cursor:pointer" onclick="edita(<?php echo $row['cd_cpf'], $row['cd_cnpj'] ?>)">
												<i class="material-icons sidebar-icon" title="Editar">edit</i>
											</a>
										
											<a href="funcional/pdf/gerar_pdf.php?cd=<?php echo $row['cd_cpf'], $row['cd_cnpj'] ?>" target="_blanck" style="cursor:pointer;color:black;text-decoration:none">
												<i class="material-icons sidebar-icon ml-4" title="Recibo">insert_drive_file</i>
											</a>

											<a href="funcional/pdf/pdf-ordem.php?cd=<?php echo $row['cd_cpf'], $row['cd_cnpj'] ?>" target="_blanck" style="cursor:pointer;color:black;text-decoration:none">
												<i class="material-icons sidebar-icon ml-4" title="Proposta de Serviço">descriptioni</i>
											</a>

											<a style="cursor:pointer" onclick="delet(<?php echo $row['cd_cpf'], $row['cd_cnpj'] ?>)" title="Deletar">
												<i class="material-icons sidebar-icon ml-2">delete</i>
											</a>

											<!-- data-toggle="modal" data-target="#exampleModal" -->

									    </td>
										 </td>
									</tr>

									<?php } ?>

								</tbody>
							</table>

						</div>

					</form>
					
					<div style=display:none;position:fixed;z-index:1;left:0;top:0;width:100%;height:100%;overflow:auto;background-color:rgb(0,0,0);background-color:rgba(0,0,0,0.4);>
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Deletar Usuário</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									Tem certeza que deseja deletar este usuário? Os dados serãp excluídos permanentemente
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
									<button type="button" onclick="location.href='http://localhost/projetos/lions/funcional/delet.php'" class="btn btn-primary">Deletar</button>
								</div>
							</div>
						</div>
					</div>
					
					<p id="mostrar"></p>

		    </div>

		</div>

	</body>

</html>