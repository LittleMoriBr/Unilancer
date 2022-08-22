<?php

include_once("conexao.php");

if ($_POST) {



    $data = json_decode(file_get_contents('php://input'), true);


    extract($data);

    $status_ouvidoria = "Pendente";


    $sql = $conn->prepare("insert into ouvidoria
			(
				
				email_ouvidoria,
                mensagem_ouvidoria,
                problema_ouvidoria,
                status_ouvidoria 
			)
			values
			(
				
				:email_ouvidoria,	
				:mensagem_ouvidoria,		
				:problema_ouvidoria,	
				:status_ouvidoria
			)");

    $sql->execute(array(

        ':email_ouvidoria' => $email_ouvidoria,
        ':mensagem_ouvidoria' => $mensagem_ouvidoria,
        ':problema_ouvidoria' => $problema_ouvidoria,
        ':status_ouvidoria' => $status_ouvidoria
    ));
    //echo $sql->rowCount();
    if ($sql->rowCount() == 1) {
        echo "<p>Dados cadastrados com sucesso</p>";
        echo "<p>ID Gerado - " . $conn->lastInsertId() . "</p>";
    }
}
