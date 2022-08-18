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
			
			
			$nome = $_POST['txtPrestador'];
            $sobrenome = $_POST['txtSobrenome'];
            $nome = $_POST['txtPrestador'];
            $nome = $_POST['txtPrestador'];
            $nome = $_POST['txtPrestador'];
            $nome = $_POST['txtPrestador'];
            $nome = $_POST['txtPrestador'];
            $nome = $_POST['txtPrestador'];
            $nome = $_POST['txtPrestador'];
            $nome = $_POST['txtPrestador'];
            $nome = $_POST['txtPrestador'];
            $nome = $_POST['txtPrestador'];
            $nome = $_POST['txtPrestador'];

            

			$img = "";
			$avaliacoes = $_POST['txtAvaliacoes'];
			
			if($_FILES["txtImg"]["tmp_name"]==null)
        {
            echo "<h4>Erro ao inserir, é necessário inserir uma foto.</h4>";
        }
        else
        {
        
            if(isset($_FILES['txtImg']))
            {
                $arquivo = $_FILES['txtImg'];

            }else{
                echo "Imagem deve ser informada";
                return;
            }

            $sql = $conn->prepare("insert into servicos
            (
               
			   img_servico,
			   nome_servico,
			   avaliacoes_servico 
            )
            values
            (
               	:img_servico,	
				:nome_servico,			
				:avaliacoes_servico
				
            )");

            $sql->execute(array(
                ':img_servico'=>$arquivo["name"],
                ':nome_servico'=>$nome,
                ':avaliacoes_servico'=>$avaliacoes
            ));

            //echo $sql->rowCount();
            if($sql->rowCount() == 1)
            {
                echo "<p>Dados cadastrados com sucesso</p>";
                echo "<p>ID Gerado - ".$conn->lastInsertId()."</p>";

                //estrutura de envio da imagem

                $pasta_dir = 'img/'.$conn->lastInsertId().'/';

                if(!file_exists($pasta_dir))
                {
                    mkdir($pasta_dir);
                }

                $img = $pasta_dir . $arquivo["name"];

                move_uploaded_file($arquivo["tmp_name"],$img);

                //fim da estrutura

            }
        }
		}
		else
		{
			
			header("Location:frm_servicos.php");
		}
			

	?>
	<a href="frm_servicos.php" class="btn btn-dark">Voltar</a>
	
</body>
</html>