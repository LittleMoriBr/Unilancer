<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<body class="body">
	<?php
    include_once("conexao.php");
    
	
		

			
    if($_POST)
    {
		 $nomeCliente = $_POST['txtNomeCliente'];
		 $sobrenomeCliente = $_POST['txtSobrenomeCliente'];
		 $cpfCliente = $_POST['txtCpfCliente'];
		 $nascimentoCliente = $_POST['txtNascimentoCliente'];
		 $enderecoCliente = $_POST['txtEnderecoCliente'];
		 $numeroCliente = $_POST['txtNumeroCliente'];
		 $cidadeCliente = $_POST['txtCidadeCliente'];
		 $cepCliente = $_POST['txtCepCliente'];
		 $complementoCliente = $_POST['txtComplementoCliente'];
		 $ufCliente = $_POST['txtUfCliente'];
		 $nacionalidadeCliente = $_POST['txtNacionalidadeCliente'];
		 $bairroCliente = $_POST['txtBairroCliente'];
		 $emailCliente = $_POST['txtEmailCliente'];
		 $celularCliente = $_POST['txtCelularCliente'];
         $senhaCliente = $_POST['txtSenhaCliente'];
		 $usuarioCliente = $_POST['txtLoginCliente'];
         $obsCliente = $_POST['txtObsCliente'];
         $statusCliente = $_POST['txtStatusCliente'];
         $imagemCliente = "";
        
        if($_FILES["txtImg"]["tmp_name"]==null)
        {
            echo "<h2>Erro ao inserir, é necessário inserir uma foto.</h2>";
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

            $sql = $conn->prepare("insert into cliente
            (
				nome_cliente, 
				sobrenome_cliente, 
				cpf_cliente, 
				nascimento_cliente, 
				endereco_cliente, 
				numero_cliente, 
				cidade_cliente, 
				cep_cliente, 
				complemento_cliente, 
				uf_cliente, 
				nacionalidade_cliente, 
				senha_cliente, 
				obs_cliente, 
				status_cliente,  
				bairro_cliente, 
				email_cliente,
				celular_cliente,
				usuario_cliente,
				img_cliente
            )
            values
            (
               :nome_cliente, 
			   :sobrenome_cliente, 
			   :cpf_cliente, 
			   :nascimento_cliente, 
			   :endereco_cliente, 
			   :numero_cliente, 
			   :cidade_cliente, 
			   :cep_cliente, 
			   :complemento_cliente, 
			   :uf_cliente, 
			   :nacionalidade_cliente,
			   :senha_cliente, 
			   :obs_cliente, 
			   :status_cliente, 
			   :bairro_cliente, 
			   :email_cliente, 
			   :celular_cliente,
			   :usuario_cliente,
			   :img_cliente
            )");

            $sql->execute(array(
				
				
				':nome_cliente'=> $nomeCliente,
				':sobrenome_cliente'=> $sobrenomeCliente,
				':cpf_cliente'=> $cpfCliente,
				':nascimento_cliente'=> $nascimentoCliente,
				':endereco_cliente'=> $enderecoCliente,
				':numero_cliente'=> $numeroCliente,
				':cidade_cliente'=> $cidadeCliente,
				':cep_cliente'=> $cepCliente,
				':complemento_cliente'=> $complementoCliente,
				':uf_cliente'=> $ufCliente,
				':nacionalidade_cliente'=> $nacionalidadeCliente,
				':senha_cliente'=> $senhaCliente,
				':obs_cliente'=> $obsCliente,
				':status_cliente'=> $statusCliente,
				':bairro_cliente'=> $bairroCliente,
				':email_cliente'=> $emailCliente,
				':celular_cliente'=> $celularCliente,
				':usuario_cliente'=> $usuarioCliente,
				':img_cliente'=> $arquivo["name"]
				
				

            ));

			 if($sql->rowCount() == 1)
            {
                echo "<p>Dados cadastrados com sucesso</p>";
                echo "<p>ID Gerado - ".$conn->lastInsertId()."</p>";
				header("Location:index.php");



                $pasta_dir = 'imagem/'.$conn->lastInsertId().'/';

                if(!file_exists($pasta_dir))
                {
                    mkdir($pasta_dir);
                }

                $imagemCliente = $pasta_dir . $arquivo["name"];

                move_uploaded_file($arquivo["tmp_name"],$imagemCliente);


            }
          
    }


    }
    ?>
    
<button type="submit" name="btoVoltar" id="btoVoltar" class="btn btn-dark redondo" formaction="principal.php?tela=cliente"><a href="../frm-cliente/index.php" class="btn-dark">Voltar</a></button>
	
	
	
</body>
</html>