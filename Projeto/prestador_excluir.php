<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
	
	<?php
		
		include_once("conexao.php");
	
		if($_POST)
		{
			
			$id = $_POST['txtID'];
			
			
			$sql = $conn->prepare("delete from prestador where id_prestador=:id_prestador");
			
			$sql->execute(array(
				':id_prestador'=>$id,
				
			));
			
			if($sql->rowCount() == 1)
			{
				echo "<p>Dados Excluidos com sucesso</p>";
				
			}
		}
		else
		{
			
			header("Location:frmAdm_prestador.php");
		}
			

	?>
	<a href="frmAdm_prestador.php" class="btn btn-dark">Voltar</a>
	
</body>
</html>