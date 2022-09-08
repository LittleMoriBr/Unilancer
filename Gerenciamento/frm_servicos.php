<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
	
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<form action="" method="post" class="form-control" enctype="multipart/form-data">
				

						<div>
							<label for="txtID">ID</label>
							<input type="text" name="txtID" id="txtID" placeholder="Insira ID" class="form-control" >
						</div>

						<div>
							<label for="txtNome">Nome do Serviço</label>
							<input type="text" name="txtNome" id="txtNome" placeholder="Insira o Nome do Serviço" class="form-control">

						</div>

						<div>
							<label for="txtImg" class="form-label">Imagem do Produto</label><br>
							<input type="file" id="txtImg" name="txtImg" placeholder="Envie a Foto" class="form-control">			
						</div>
		
						<div>	
							<label for="txtCaminhoImg" class="form-label">Caminho Imagem</label><br>
							<input type="" id="txtCaminhoImg" name="txtCaminhoImg" placeholder="Sem Foto" class="form-control" >
						</div>

						<div>
							<div>
								<label for="txtAvaliacoes">Avaliações</label><br>
								<textarea class="form-control" rows="5" id="comment" name="txtAvaliacoes"></textarea>

						</div>
						<hr>	
						<div>
							<button type="submit" class="btn btn-primary" formaction="servicos_cadastro.php">Cadastrar</button>
							<button type="submit" class="btn btn-primary" formaction="servico_mostrarDados.php">Mostrar Dados</button>
								
						</div>

			</form>
			<div class="col-sm-3"></div>
			</div>
		</div>

	
	
</body>
