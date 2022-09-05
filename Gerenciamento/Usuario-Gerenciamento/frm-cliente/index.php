<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>formulário de clientes</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="input.css">
	<link rel="stylesheet" href="style.css">

</head>

<body class="fundo">

	<?php

	include_once("cliente_pesquisar.php");



	?>

<section class="top-nav">
    <div>
      <img class="imgUni" src="img/amare12.png" alt="">
    </div>
    <input id="menu-toggle" type="checkbox" />
    <label class='menu-button-container' for="menu-toggle">
      <div class='menu-button'></div>
    </label>
    <ul class="menu">
      <li><a class="link-re" href="../../../p_LoginCliente/">Login</a></li>
    </ul>
  </section>

	<div class="container">

		<h2 class="text-center">Formulário de Clientes</h2>
		<br>
		<div>
			<form action="frm_cliente.php" method="post" class="form-control  form-back" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-9 p-2">
						<label style="display: none;" for="txtID" class="form-label form-control">ID</label>
						<input type="hidden" name="txtID" id="txtID" placeholder="" class="form-control" value="<?php echo $idCliente; ?>">
</div>
						<div class="col-sm-3 p-2" style="display: none;">
							<label for="txtDataCliente" class="form-label">Data de Cadastro</label>
							<input type="date" name="txtDataCliente" id="txtDataCliente" class="form-control inputBorder" value="<?php echo $datacadastroCliente; ?>">
						</div>
					</div>

					<div class="row">


						<div class="col-sm-4 p-2">
							<label for="txtNomeCliente" class="form-label">Nome</label>
							<input class="inputBorder" type="text" name="txtNomeCliente" id="txtNomeCliente" placeholder="Inserir seu nome" class="form-control" value="<?php echo $nomeCliente; ?>">
						</div>

						<div class="col-sm-4 p-2">
							<label for="txtSobrenomeCliente" class="form-label">Sobrenome</label>
							<input class="inputBorder" type="text" name="txtSobrenomeCliente" id="txtSobrenomeCliente" placeholder="Inserir seu sobrenome" class="form-control" value="<?php echo $sobrenomeCliente; ?>">
						</div>
						<div class="col-sm-2 p-2">
							<label for="txtNascimentoCliente" class="form-label">Data de Nascimento</label>
							<input class="inputBorder" type="date" name="txtNascimentoCliente" id="txtNascimentoCliente" placeholder="Inserir sua data de nascimento" class="form-control" value="<?php echo $nascimentoCliente; ?>">
						</div>


						<div class="col-sm-2 p-2">
							<label for="txtImg" class="form-label">Enviar Imagem</label>
							<input class="inputBorder" type="file" id="txtImg" name="txtImg" placeholder="Envie a Foto" class="form-control" value="<?php echo $imagemCliente; ?>">
						</div>
					</div>


					<div class="row">

						<div class="col-sm-3 p-2">
							<label for="txtCpfCliente" class="form-label">CPF</label>
							<input class="inputBorder" type="number" name="txtCpfCliente" id="txtCpfCliente" placeholder="Inserir seu CPF" class="form-control" value="<?php echo $cpfCliente; ?>">
						</div>
						<div class="col-sm-3 p-2">
							<label for="txtCepCliente" class="form-label">CEP</label>
							<input class="inputBorder" type="number" name="txtCepCliente" id="txtCepCliente" placeholder="Inserir seu CEP" class="form-control" value="<?php echo $cepCliente; ?>">
						</div>

						<div class="col-sm-1 p-2">
							<label for="txtUfCliente" class="form-label">UF</label>
							<select class="inputBorder" name="txtUfCliente" id="txtUfCliente" class="form-control">

								<option value="" <?php
													if ($ufCliente == "") {
														echo "selected";
													}
													?>></option>

								<option value="" <?php
													if ($ufCliente == "sp") {
														echo "selected";
													}
													?>>SP</option>
								<option value="" <?php
													if ($ufCliente == "rj") {
														echo "selected";
													}
													?>>RJ</option>

								<option value="" <?php
													if ($ufCliente == "mg") {
														echo "selected";
													}
													?>>MG</option>
								<option value="" <?php
													if ($ufCliente == "rs") {
														echo "selected";
													}
													?>>RS</option>
								<option value="" <?php
													if ($ufCliente == "ce") {
														echo "selected";
													}
													?>>CE</option>
								<option value="" <?php
													if ($ufCliente == "ro") {
														echo "selected";
													}
													?>>RO</option>



							</select>
						</div>
						<div class="col-sm-5 p-2">
							<label for="txtCidadeCliente" class="form-label">Cidade</label>
							<input class="inputBorder" type="text" name="txtCidadeCliente" id="txtCidadeCliente" placeholder="Inserir sua cidade" class="form-control" value="<?php echo $cidadeCliente; ?>">
						</div>

					</div>


					<div class="row">
						<div class="col-sm-3 p-2">
							<label for="txtBairroCliente" class="form-label">Bairro</label>
							<input class="inputBorder" type="text" name="txtBairroCliente" id="txtBairroCliente" placeholder="Inserir o seu bairro" class="form-control" value="<?php echo $bairroCliente; ?>">
						</div>
						<div class="col-sm-4">
							<label for="txtEnderecoCliente" class="form-label">Endereço</label>
							<input class="inputBorder" type="text" name="txtEnderecoCliente" id="txtEnderecoCliente" placeholder="Inserir seu endereço" class="form-control" value="<?php echo $enderecoCliente; ?>">
						</div>
						<div class="col-sm-1">
							<label for="txtNumeroCliente" class="form-label">Número</label>
							<input class="inputBorder" type="number" name="txtNumeroCliente" id="txtNumeroCliente" placeholder="N°" class="form-control" value="<?php echo $numeroCliente; ?>">
						</div>

						<div class="col-sm-4">
							<label for="txtComplementoCliente" class="form-label">Complemento</label>
							<input class="inputBorder" type="text" name="txtComplementoCliente" id="txtComplementoCliente" placeholder="Inserir o complemento" class="form-control" value="<?php echo $complementoCliente; ?>">
						</div>
					</div>

					<div class="row">

						<div class="col-sm-2 p-2">
							<label for="txtNacionalidadeCliente" class="form-label">Nacionalidade</label>
							<select class="inputBorder" name="txtNacionalidadeCliente" id="txtNacionalidadeCliente" class="form-control">

								<option value="" <?php
													if ($nacionalidadeCliente == "") {
														echo "selected";
													}

													?>>
								</option>
								<option value="Brasileiro" <?php
															if ($nacionalidadeCliente == "Brasileiro") {
																echo "selected";
															}

															?>>Brasileiro
								</option>
								<option value="Argentino" <?php
															if ($nacionalidadeCliente == "Argentino") {
																echo "selected";
															}

															?>>Argentino
								</option>
								<option value="Alemão" <?php
														if ($nacionalidadeCliente == "Alemão") {
															echo "selected";
														}

														?>>Alemão
								</option>
								<option value="Angolano" <?php
															if ($nacionalidadeCliente == "Angolano") {
																echo "selected";
															}

															?>>Angolano
								</option>

							</select>

						</div>
						<div class="col-sm-2 p-2">
							<label for="txtCelularCliente" class="form-label">Telefone</label>
							<input class="inputBorder" type="tel" name="txtCelularCliente" id="txtCelularCliente" placeholder="Inserir seu número de telefone" class="form-control" value="<?php echo $celularCliente ?>">
						</div>
						<div class="col-sm-8 p-2">
							<label for="txtEmailCliente" class="form-label">Email</label>
							<input class="inputBorder" type="email" name="txtEmailCliente" id="txtEmailCliente" placeholder="Inserir seu e-mail" class="form-control" value="<?php echo $emailCliente ?>">
						</div>
					</div>

					<div class="row">

						<div class="col-sm-6 p-2">
							<label for="txtLoginCliente" class="form-label">Login</label>
							<input class="inputBorder" type="text" name="txtLoginCliente" id="txtLoginCliente" placeholder="Inserir seu login" class="form-control" value="<?php echo $usuarioCliente ?>">


						</div>

						<div class="col-sm-6 p-2">
							<label for="txtSenhaCliente" class="form-label">Senha</label>
							<input class="inputBorder" type="password" name="txtSenhaCliente" id="txtSenhaCliente" placeholder="Inserir sua senha" class="form-control" value="<?php echo $senhaCliente ?>">

						</div>

					</div>

					<div class="row">

						<div class="col-sm-3 p-2">

							<label for="txtStatusCliente" class="form-label">Status</label>
							<select class="inputBorder" name="txtStatusCliente" id="txtStatusCliente" class="form-control">

								<option value="Ativo" <?php
														if ($statusCliente == "Ativo") {
															echo "selected";
														}
														?>>Ativo</option>
								<option value="Inativo" <?php
														if ($statusCliente == "Inativo") {
															echo "selected";
														}
														?>>Inativo</option>

							</select>

						</div>
					</div>


					<div>
						<label for="txtObsCliente">Observação</label>
						<br>
						<textarea class="inputBorder" name="txtObsCliente" id="txtObsCliente" cols="" rows="10" class="form-control"><?php echo $obsCliente; ?></textarea>
					</div>
					<br>

					<div class="col-sm-2 p-2 botoes">
						<button type="submit" name="btoCadastrar" id="btoCadastrar" class="btn btn-outline-success" formaction="index.php">Cadastrar</button>
					</div>
				</div>
			</form>
		</div>

		<script src="js/bootstrap.bundle.js"></script>
		<script src="ValidacaoForm"></script>

		<script>
			console.log("teste");

			function CarregarImg(imagem) {
				var preview = document.getElementById("preImg");
				var file = document.getElementById("txtImg").files[0];

				var reader = new FileReader();

				reader.onloadend = function() {
					var caminho = reader.result;
					preview.src = caminho;

					$("#base64Code").val(caminho);
				}

				if (file) {
					reader.readAsDataURL(file);
				} else {
					preview.src = "";
				}
			}
		</script>

</html>

</body>

</html>