<?php

include_once("conexao.php");

if ($_POST) {



    $data = json_decode(file_get_contents('php://input'), true);


    extract($data);



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
                usuario_cliente,	
                senha_cliente,	
                obs_cliente,	
                status_cliente,		
                bairro_cliente,	
                email_cliente,	
                celular_cliente,	
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
                :usuario_cliente,	
                :senha_cliente,	
                :obs_cliente,
                :status_cliente,
                :bairro_cliente,	
                :email_cliente,
                :celular_cliente,
                :img_cliente	

			)");

    $sql->execute(array(

        ':nome_cliente,' => $nome_cliente,
        ':sobrenome_cliente,' => $sobrenome_cliente,
        ':cpf_cliente,' => $cpf_cliente,
        ':nascimento_cliente,' => $nascimento_cliente,
        ':endereco_cliente,' => $endereco_cliente,
        ':numero_cliente,' => $numero_cliente,
        ':cidade_cliente,' => $cidade_cliente,
        ':cep_cliente,' => $cep_cliente,
        ':complemento_cliente,' => $complemento_cliente,
        ':uf_cliente,' => $uf_cliente,
        ':nacionalidade_cliente,' => $nacionalidade_cliente,
        ':usuario_cliente,' => $usuario_cliente,
        ':senha_cliente,' => $senha_cliente,
        ':obs_cliente,' => $obs_cliente,
        ':status_cliente,' => $status_cliente,
        ':bairro_cliente,' => $bairro_cliente,
        ':email_cliente,' => $email_cliente,
        ':celular_cliente,' => $celular_cliente,
        ':img_cliente' => $img_cliente

    ));
    //echo $sql->rowCount();
    if ($sql->rowCount() == 1) {
        echo "<p>Dados cadastrados com sucesso</p>";
        echo "<p>ID Gerado - " . $conn->lastInsertId() . "</p>";
    }
} else {

    header("Location:frmAdmCliente.html");
}
