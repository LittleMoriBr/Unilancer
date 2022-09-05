<?php

$id_parceiro='';
$datacadastro_parceiro='';
$nome_parceiro='';
$area_parceiro='';
$nacionalidade_parceiro='';
$cnpj_parceiro='';
$celular_parceiro='';
$email_parceiro='';
$cep_parceiro='';
$cidade_parceiro='';
$uf_parceiro='';
$bairro_parceiro='';
$endereco_parceiro='';
$numero_parceiro='';
$complemento_parceiro='';
$login_parceiro='';
$senha_parceiro='';
$img_parceiro='';
$status_parceiro='';
$obs_parceiro='';


include_once("conexao.php");

if($_POST)
{
    $id = $_POST['txtIDParceiro'];

    try
    {
        $sql = $conn->query("select * from parceiro where id_parceiro = ".$id);
        
        if($sql->rowCount() == 1)
        {
           foreach($sql as $linha)
            {
                $id_parceiro=$linha['id_parceiro'];
                $datacadastro_parceiro=$linha['datacadastro_parceiro'];
                $datacadastro_parceiro = substr($datacadastro_parceiro,0,10);
                $nome_parceiro=$linha['nome_parceiro'];
                $area_parceiro=$linha['area_parceiro'];
                $nacionalidade_parceiro=$linha['nacionalidade_parceiro'];
                $cnpj_parceiro=$linha['cnpj_parceiro'];
                $celular_parceiro=$linha['celular_parceiro'];
                $email_parceiro=$linha['email_parceiro'];
                $cep_parceiro=$linha['cep_parceiro'];
                $cidade_parceiro=$linha['cidade_parceiro'];
                $uf_parceiro=$linha['uf_parceiro'];
                $bairro_parceiro=$linha['bairro_parceiro'];
                $endereco_parceiro=$linha['endereco_parceiro'];
                $numero_parceiro=$linha['numero_parceiro'];
                $complemento_parceiro=$linha['complemento_parceiro'];
                $login_parceiro=$linha['login_parceiro'];
                $senha_parceiro=$linha['senha_parceiro'];
                $img_parceiro=$linha['img_parceiro'];
                $status_parceiro=$linha['status_parceiro'];
                $obs_parceiro=$linha['obs_parceiro'];

            } 
        }
        else
        {
            echo "Usuário não existe";
        }
    }
    catch(PDOException $e)
    {
        echo "Erro: ".$e->getMessage();
    }
}

?>