<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Documento sem título</title>

	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="css/bootstrap.css">

</head>

<body>

	<div class="container">
		<div class="row">

			<?php

			include_once("conexao.php");

			try {

				$sql = $conn->query("select * from servicos");

				foreach ($sql as $dados) {

					echo '<div class="col-sm-4 p-1 m-1 dados ">';
					echo "<pre>";
					print_r($dados);
					echo "</pre>";
					echo '<img src="img/' . $dados['id_servico'] . "/" . $dados['img_servico'] . '">';
					echo "</div>";
				}
			} catch (PDOException $e) {

				echo $e->getMessage();
			}

			?>
		</div>
	</div>

	<script src="js/bootstrap.bundle.js"></script>
</body>

</html>