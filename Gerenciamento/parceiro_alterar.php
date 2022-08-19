<?php

include_once("conexao.php");

if ($_POST) {

	$data = json_decode(file_get_contents('php://input'), true);


	extract($data);
	print_r($data);


	$sql = $conn->prepare("update parceiro set
					
				datacadastro_prestador = :datacadastro_prestador,
                nome_parceiro = :nome_parceiro,
				cnpj_parceiro = :cnpj_parceiro,		
				area_parceiro = :area_parceiro,
				email_parceiro = :email_parceiro,
				nacionalidade_parceiro = :nacionalidade_parceiro,
                celular_parceiro = :celular_parceiro,
                status_parceiro = :status_parceiro,
                obs_parceiro = :obs_parceiro,
                cep_parceiro = :cep_parceiro,
                endereco_parceiro = :endereco_parceiro,
                numero_parceiro = :numero_parceiro,
                complemento_parceiro = :complemento_parceiro,
                cidade_parceiro = :cidade_parceiro,
                uf_parceiro = :uf_parceiro,
                bairro_parceiro  = :bairro_parceiro ,
                login_parceiro = :login_parceiro,
				senha_parceiro = :senha_parceiro,
				img_parceiro = :img_parceiro,
				where id_parceiro = :id_parceiro

			");

	$sql->execute(array(
		':datacadastro_prestador' => $datacadastro_prestador,
		':id_prestador' => $id_prestador,
		':nome_prestador' => $nome_prestador,
		':sobrenome_prestador' => $sobrenome_prestador,
		':img_prestador' => $img_prestador,
		':email_prestador' => $email_prestador,
		':cpfnj_prestador' => $cpfnj_prestador,
		':nacionalidade_prestador' => $nacionalidade_prestador,
		':cidade_prestador' => $cidade_prestador,
		':uf_prestador' => $uf_prestador,
		':endereco_prestador' => $endereco_prestador,
		':bairro_prestador' => $bairro_prestador,
		':cep_prestador' => $cep_prestador,
		':numero_prestador' => $numero_prestador,
		':complemento_prestador' => $complemento_prestador,
		':celular_prestador' => $celular_prestador,
		':login_prestador' => $login_prestador,
		':senha_prestador' => $senha_prestador,
		':obs_prestador' => $obs_prestador,
		':status_prestador' => $status_prestador,
		':id_parceiro' => $id_parceiro,
		':atuacao_prestador' => $atuacao_prestador,
		':recomendacoes_prestador' => $recomendacoes_prestador,
		':descricao_prestador' => $descricao_prestador,
		':avaliacoes_prestador' => $avaliacoes_prestador

	));
} else {

	header("Location:frmAdm_prestador.html");
}


?>
<a href="frmAdm_prestador.html" class="btn btn-dark">Voltar</a>