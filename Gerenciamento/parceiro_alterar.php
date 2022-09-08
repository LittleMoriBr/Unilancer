<?php

include_once("conexao.php");

if ($_POST) {

	$data = json_decode(file_get_contents('php://input'), true);


	extract($data);
	print_r($data);


	$sql = $conn->prepare("update parceiro set
					
                datacadastro_parceiro = :datacadastro_parceiro,
                nome_parceiro = :nome_parceiro,
				cnpj_parceiro = :cnpj_parceiro,		
				area_parceiro = :area_parceiro,
				email_parceiro = :email_parceiro,
				nacionalidade_parceiro = :nacionalidade_parceiro,
                celular_parceiro = :celular_parceiro,
                status_parceiro = :status_parceiro,
                obs_parceiro = :obs_parceiro,
                endereco_parceiro = :endereco_parceiro,
                cep_parceiro = :cep_parceiro,
                numero_parceiro = :numero_parceiro,
                complemento_parceiro = :complemento_parceiro,
                cidade_parceiro = :cidade_parceiro,
                uf_parceiro = :uf_parceiro,
                bairro_parceiro  = :bairro_parceiro,
                login_parceiro = :login_parceiro,
				senha_parceiro = :senha_parceiro,
				img_parceiro = :img_parceiro
				where id_parceiro = :id_parceiro

			");

	$sql->execute(array(
		':datacadastro_parceiro' => $datacadastro_parceiro,
        ':id_parceiro' => $id_parceiro,
        ':nome_parceiro'=>$nome_parceiro,
		':cnpj_parceiro'=>$cnpj_parceiro,		
		':area_parceiro' => $area_parceiro,
		':email_parceiro' =>  $email_parceiro,
		':nacionalidade_parceiro'=> $nacionalidade_parceiro,
        ':celular_parceiro' => $celular_parceiro,
        ':status_parceiro'=> $status_parceiro,
        ':obs_parceiro' =>  $obs_parceiro,
        ':cep_parceiro' =>  $cep_parceiro,
        ':endereco_parceiro' =>  $endereco_parceiro,
        ':numero_parceiro'=>  $numero_parceiro,
        ':complemento_parceiro'=> $complemento_parceiro,
        ':cidade_parceiro' => $cidade_parceiro,
        ':uf_parceiro' => $uf_parceiro,
        ':bairro_parceiro'  =>  $bairro_parceiro,
        ':login_parceiro' =>  $login_parceiro,
		':senha_parceiro' =>  $senha_parceiro,
		':img_parceiro'=> $img_parceiro
		

	));
} else {

	header("Location:frmAdm_parceiro.html");
}


?>
