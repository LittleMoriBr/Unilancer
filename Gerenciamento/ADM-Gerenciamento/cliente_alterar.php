<?php

include_once("conexao.php");

if ($_POST) {

    $data = json_decode(file_get_contents('php://input'), true);


    extract($data);
    print_r($data);


    $sql = $conn->prepare("update cliente set
					
            nome_cliente = :nome_cliente,
            sobrenome_cliente = :sobrenome_cliente,
            cpf_cliente = :cpf_cliente,
            nascimento_cliente =:nascimento_cliente,
            endereco_cliente = :endereco_cliente,
            numero_cliente = :numero_cliente,
            cidade_cliente = :cidade_cliente,
            cep_cliente = :cep_cliente,
            complemento_cliente = :complemento_cliente,
            uf_cliente = :uf_cliente ,
            nacionalidade_cliente = :nacionalidade_cliente,
            usuario_cliente = :usuario_cliente,
            senha_cliente = :senha_cliente,
            obs_cliente = :obs_cliente,
            status_cliente = :status_cliente,
            datacadastro_cliente = :datacadastro_cliente,
            bairro_cliente = :bairro_cliente,
            email_cliente = :email_cliente,
            celular_cliente = :celular_cliente,
            img_cliente = :img_cliente
            where id_cliente = :id_cliente
			");

    $sql->execute(array(

        ':id_cliente' => $id_cliente,
        ':nome_cliente' => $nome_cliente,
        ':sobrenome_cliente' => $sobrenome_cliente,
        ':cpf_cliente' => $cpf_cliente,
        ':nascimento_cliente' => $nascimento_cliente,
        ':endereco_cliente' => $endereco_cliente,
        ':numero_cliente' => $numero_cliente,
        ':cidade_cliente' => $cidade_cliente,
        ':cep_cliente' => $cep_cliente,
        ':complemento_cliente' => $complemento_cliente,
        ':uf_cliente' => $uf_cliente,
        ':nacionalidade_cliente' => $nacionalidade_cliente,
        ':usuario_cliente' => $usuario_cliente,
        ':senha_cliente' => $senha_cliente,
        ':obs_cliente' => $obs_cliente,
        ':status_cliente' => $status_cliente,
        ':datacadastro_cliente' => $datacadastro_cliente,
        ':bairro_cliente' => $bairro_cliente,
        ':email_cliente' => $email_cliente,
        ':celular_cliente' => $celular_cliente,
        ':img_cliente' => $img_cliente

    ));
} else {

    header("Location:frmAdmCliente.html");
}
