<?php

include_once("conexao.php");

if ($_POST) {



    $data = json_decode(file_get_contents('php://input'), true);


    extract($data);



    $sql = $conn->prepare("insert into funcionario
			(
				
					
                nome_funcionario,
                img_funcionario,
                cep_funcionario,
                sobrenome_funcionario,
                endereco_funcionario,
                complemento_funcionario,
                cpf_funcionario,
                nascimento_funcionario,
                cidade_funcionario,
                uf_funcionario,
                nacionalidade_funcionario,
                usuario_funcionario,
                senha_funcionario,
                obs_funcionario,
                status_funcionario,
                iniciocontrato_funcionario,
                bairro_funcionario,
                email_funcionario,
                celular_funcionario,
                remuneracao_funcionario,
                cpfdenpendente_funcionario,
                nascimentodependente_funcionario,
                id_departamento,
                numero_funcionario



			)
			values
			(
				
				:nome_funcionario,
                :img_funcionario,
                :cep_funcionario,
                :sobrenome_funcionario,
                :endereco_funcionario,
                :complemento_funcionario,
                :cpf_funcionario,
                :nascimento_funcionario,
                :cidade_funcionario,
                :uf_funcionario,
                :nacionalidade_funcionario,
                :usuario_funcionario,
                :senha_funcionario,
                :obs_funcionario,
                :status_funcionario,
                :iniciocontrato_funcionario,
                :bairro_funcionario,
                :email_funcionario,
                :celular_funcionario,
                :remuneracao_funcionario,
                :cpfdenpendente_funcionario,
                :nascimentodependente_funcionario,
                :id_departamento,
                :numero_funcionario


			)");

    $sql->execute(array(

        ':nome_funcionario' => $nome_funcionario,
        ':img_funcionario' => $img_funcionario,
        ':cep_funcionario' => $cep_funcionario,
        ':sobrenome_funcionario' => $sobrenome_funcionario,
        ':endereco_funcionario' => $endereco_funcionario,
        ':complemento_funcionario' => $complemento_funcionario,
        ':cpf_funcionario' => $cpf_funcionario,
        ':nascimento_funcionario' => $nascimento_funcionario,
        ':cidade_funcionario' => $cidade_funcionario,
        ':uf_funcionario' => $uf_funcionario,
        ':nacionalidade_funcionario' => $nacionalidade_funcionario,
        ':usuario_funcionario' => $usuario_funcionario,
        ':senha_funcionario' => $senha_funcionario,
        ':obs_funcionario' => $obs_funcionario,
        ':status_funcionario' => $status_funcionario,
        ':iniciocontrato_funcionario' => $iniciocontrato_funcionario,
        ':bairro_funcionario' => $bairro_funcionario,
        ':email_funcionario' => $email_funcionario,
        ':celular_funcionario' => $celular_funcionario,
        ':remuneracao_funcionario' => $remuneracao_funcionario,
        ':cpfdenpendente_funcionario' => $cpfdenpendente_funcionario,
        ':nascimentodependente_funcionario' => $nascimentodependente_funcionario,
        ':id_departamento' => $id_departamento,
        ':numero_funcionario' => $numero_funcionario


    ));
    //echo $sql->rowCount();
    if ($sql->rowCount() == 1) {
        echo "<p>Dados cadastrados com sucesso</p>";
        echo "<p>ID Gerado - " . $conn->lastInsertId() . "</p>";
    }
} else {

    header("Location:frm_AdmFuncionario.html");
}
