<?php

$idCliente = '';
$nomeCliente = '';
$sobrenomeCliente = '';
$cpfCliente = '';
$nascimentoCliente = '';
$enderecoCliente = '';
$numeroCliente = '';
$cidadeCliente = '';
$cepCliente = '';
$complementoCliente = '';
$ufCliente = '';
$nacionalidadeCliente = '';
$usuarioCliente = '';
$senhaCliente = '';
$obsCliente = '';
$statusCliente = '';
$datacadastroCliente = '';
$bairroCliente = '';
$emailCliente = '';
$celularCliente = '';
$imagemCliente = '';


include_once("conexao.php");

if($_POST)
{
    $id = $_POST['txtID'];

    try
    {
        $sql = $conn->query("select * from cliente where id_cliente = ".$id);

        foreach($sql as $linha)
        {
		$idCliente = $linha ['id_cliente'];	     
		$nomeCliente = $linha ['nome_cliente'];
		$sobrenomeCliente = $linha ['sobrenome_cliente'];
		$cpfCliente = $linha ['cpf_cliente'];
		$nascimentoCliente = $linha ['nascimento_cliente'];
		$enderecoCliente = $linha ['endereco_cliente'];
		$numeroCliente = $linha ['numero_cliente'];
		$cidadeCliente = $linha ['cidade_cliente'];
		$cepCliente = $linha ['cep_cliente'];
		$complementoCliente = $linha ['complemento_cliente'];
		$ufCliente = $linha ['uf_cliente'];
		$nacionalidadeCliente = $linha ['nacionalidade_cliente'];
		$usuarioCliente = $linha ['usuario_cliente'];
		$senhaCliente = $linha ['senha_cliente'];
		$obsCliente = $linha ['obs_cliente'];
		$statusCliente = $linha ['status_cliente'];
		$datacadastroCliente = $linha ['datacadastro_cliente'];
		$bairroCliente = $linha ['bairro_cliente'];
		$emailCliente = $linha ['email_cliente'];
		$celularCliente = $linha ['celular_cliente'];
		$imagemCliente = $linha ['img_cliente'];
			
          
        }    
    }
    catch(PDOException $e)
    {
        echo "Erro: ".$e->getMessage();
    }
}

?>
