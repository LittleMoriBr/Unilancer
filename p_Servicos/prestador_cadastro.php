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
			$email = $_POST['txtEmailPrestador'];
			$cpfCnpj = $_POST['txtCpfCnpjPrestador'];
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
			$nacionalidade = $_POST['txtNacionalidadePrestador'];
			$img = "";
			$atuacao = $_POST['txtAtuacaoPrestador'];
			$descricao = $_POST['txtDescricaoPrestador'];
			
			$id1 = 1;

			



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
			/*
			echo '<pre>';
			print_r($_POST);
			echo'</pre>';
			echo $arquivo["name"];

			return;
			*/
			$sql = $conn->prepare("insert into prestador
			(
				
				nome_prestador,	
				sobrenome_prestador,
                email_prestador,
                cpfnj_prestador,
                cidade_prestador,
                uf_prestador,
                endereco_prestador,
                bairro_prestador,
                cep_prestador,
                numero_prestador,
                complemento_prestador,
                celular_prestador,
                login_prestador, 	
				senha_prestador,		
				obs_prestador,
				id_parceiro,	
				img_prestador,
				atuacao_prestador,
				descricao_prestador,
                nacionalidade_prestador
			)
			values
			(
				
				:nome_prestador,	
				:sobrenome_prestador,	
				:email_prestador,		
				:cpfnj_prestador,	
				:cidade_prestador,
				:uf_prestador,
				:endereco_prestador,
				:bairro_prestador,
				:cep_prestador,
				:numero_prestador,
				:complemento_prestador,
				:celular_prestador,
				:login_prestador,
				:senha_prestador,
				:obs_prestador,
				:id_parceiro,
				:img_prestador,
				:atuacao_prestador,
				:descricao_prestador,
				:nacionalidade_prestador
			)");
			
			$sql->execute(array(
				
				':nome_prestador'=>$nome,	
				':sobrenome_prestador'=>$sobrenome,
				':email_prestador'=>$email,
				':cpfnj_prestador'=>$cpfCnpj,
				':cidade_prestador'=>$cidade,
				':uf_prestador'=>$uf,
				':endereco_prestador'=>$endereco,
				':bairro_prestador'=>$bairro,
				':cep_prestador'=>$cep,
				':numero_prestador'=>$numero,
				':complemento_prestador'=>$complemento,
				':celular_prestador'=>$celular,
				':login_prestador'=>$usuario,
				':senha_prestador'=>$senha,
				':obs_prestador'=>$obs,
				':id_parceiro'=>$id1,
				':img_prestador'=>$arquivo["name"],
				':atuacao_prestador'=>$atuacao,
				':descricao_prestador'=>$descricao,
				':nacionalidade_prestador'=>$nacionalidade
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
			
			if($sql->rowCount() == 1)
			{
				echo "<p>Dados cadastrados com sucesso</p>";
				echo "<p>ID Gerado - ".$conn->lastInsertId()."</p>";
				
			}
		}
		}
		else
		{
			
			header("Location:frm_prestador.php");
		}
			
	?>
	<a href="frm_prestador.php" class="btn btn-dark">Voltar</a>
	
</body>
</html>