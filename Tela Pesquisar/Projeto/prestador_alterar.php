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
			$nome = $_POST['txtPrestador'];
			$email = $_POST['txtEmailPrestador'];
			$cpfCnpj = $_POST['txtCpfCnpjPrestador'];
			$nacionalidade = $_POST['txtNacionalidadePrestador'];
            $cidade = $_POST['txtCidadePrestador'];
            $uf = $_POST['txtUfPrestador'];
            $endereco = $_POST['txtEnderecoPrestador'];
            $bairro = $_POST['txtBairroPrestador'];
            $cep = $_POST['txtCepPrestador'];
            $numero = $_POST['txtNumeroPrestador'];
            $complemento = $_POST['txtComplementoPrestador'];
            $celular = $_POST['txtCelularPrestador'];
            $usuario = $_POST['txtUsuarioPrestador'];
            $senha = $_POST['txtSenhaPrestador'];
            $obs = $_POST['txtObs'];
            $atuacao = $_POST['txtAtuacaoPrestador'];
            $descricao = $_POST['txtDescricaoPrestador'];
            $img = "";

			if($_FILES["txtImg"]["tmp_name"]==null)
			{
				$img = $_POST['txtCaminhoImg'];
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

				$img = $arquivo["name"];
			}

			$sql = $conn->prepare("update prestador set
				
			
				
                nome_prestador = :nome_categoria,
				sobrenome_prestador = :sobrenome_prestador,		
				img_prestador = :img_prestador,
				email_prestador = email_prestador,
				cpfnj_prestador = :cpfnj_prestador,
                nacionalidade_prestador = :nacionalidade_prestador,
                cidade_prestador = :cidade_prestador,
                uf_prestador = :uf_prestador,
                endereço_prestador = :endereço_prestador,
                bairro_prestador = :bairro_prestador,
                cep_prestador = :cep_prestador,
                numero_prestador = :numero_prestador,
                complemento_prestador = :complemento_prestador,
                celular_prestador = :celular_prestador,
                usuario_prestador = :usuario_prestador,
                senha_prestador = :senha_prestador,
                obs_prestador = :obs_prestador
				where id_prestador = :id_prestador

			")
			;
			
			$sql->execute(array(
				':nome_prestador'=>$id,
				':sobrenome_prestador' =>$nome,	
				':img_prestador'=>$img,
				':email_prestador'=>$email,
				':cpfnj_prestador'=>$cpfCnpj,
                ':nacionalidade_prestador'=>$nacionalidade,
                ':cidade_prestador'=>$cidade,
                ':uf_prestador'=>$uf,
                ':endereço_prestador'=>$endereco,
                ':bairro_prestador'=>$bairro,
                ':cep_prestador'=>$cep,
                ':numero_prestador'=>$numero,
                ':complemento_prestador'=>$complemento,
                ':celular_prestador'=>$celular,
                ':usuario_prestador'=>$usuario,
                ':senha_prestador'=>$senha,
                ':obs_prestador'=>$obs

			));
			
			if($sql->rowCount() == 1)
			{
				echo "<p>Dados Alterados com sucesso</p>";
				
				//estrutura de envio da imagem
            
				if($_FILES["txtImg"]["tmp_name"]==null)
				{
					$img = $_POST['txtCaminhoImg'];
				}
				else
				{
					$pasta_dir = 'img/'.$id.'/';

					// deleta arquivos de uma pasta
					array_map('unlink', glob("$pasta_dir*.*"));

					if(!file_exists($pasta_dir))
					{
						mkdir($pasta_dir);
					}
					$img = $pasta_dir . $arquivo["name"];
					move_uploaded_file($arquivo["tmp_name"],$img);
				}
				//fim da estrutura
			}
		}
		else
		{
			
			header("Location:frm_categoria.php");
		}
			

	?>
	<a href="frm_categoria.php" class="btn btn-dark">Voltar</a>
	
</body>
</html>