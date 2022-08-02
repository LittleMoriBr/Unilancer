<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
    
    <?php
    include_once("conexao.php");
    
    if($_POST)
    {
            $IdParceiro = $_POST['txtIDParceiro'];
            $NomeParceiro = $_POST['txtNomeParceiro'];
            $CnpjParceiro = $_POST['txtCnpjParceiro'];
            $AreaParceiro = $_POST['txtAreaParceiro'];
            $EmailParceiro = $_POST['txtEmailParceiro'];
            $NacionalidadeParceiro = $_POST['txtNacionalidadeParceiro'];
            $CelularParceiro = $_POST['txtCelularParceiro'];
            $excluircadastro_parceiro = date("Y-m-d h:i:sa");
            $DataParceiro = $_POST['txtDataParceiro'];
            $StatusParceiro = "Inativo";
            $ObsParceiro = $_POST['txtObsParceiro'];
            $CepParceiro = $_POST['txtCepParceiro'];
            $EnderecoParceiro = $_POST['txtEnderecoParceiro'];
            $NumeroParceiro = $_POST['txtNumeroParceiro'];
            $ComplementoParceiro = $_POST['txtComplementoParceiro'];
            $CidadeParceiro = $_POST['txtCidadeParceiro'];
            $UFParceiro = $_POST['txtUFParceiro'];
            $BairroParceiro = $_POST['txtBairroParceiro'];
            $LoginParceiro = $_POST['txtLoginParceiro'];
            $SenhaParceiro = $_POST['txtSenhaParceiro'];
            $img = "";
        
        if($_FILES["txtImgParceiro"]["tmp_name"]==null)
        {
            $img = $_POST['txtCaminhoParceiro'];
        }
        else
        {
            if(isset($_FILES['txtImgParceiro']))
            {
                $arquivo = $_FILES['txtImgParceiro'];

            }else{
                echo "Imagem deve ser informada";
                return;
            }
            
            $img = $arquivo["name"];
        }
            
        $sql = $conn->prepare("update parceiro set
            nome_parceiro = :nome_parceiro,
            cnpj_parceiro = :cnpj_parceiro,
            area_parceiro = :area_parceiro,
            email_parceiro = :email_parceiro,
            nacionalidade_parceiro = :nacionalidade_parceiro,
            celular_parceiro = :celular_parceiro,
            excluircadastro_parceiro = :excluircadastro_parceiro,
            status_parceiro = :status_parceiro,
            obs_parceiro = :obs_parceiro,
            cep_parceiro = :cep_parceiro,
            endereco_parceiro = :endereco_parceiro,
            numero_parceiro = :numero_parceiro,
            complemento_parceiro = :complemento_parceiro,
            cidade_parceiro = :cidade_parceiro,
            uf_parceiro = :uf_parceiro,
            bairro_parceiro = :bairro_parceiro,
            login_parceiro = :login_parceiro,
            senha_parceiro = :senha_parceiro,
            img_parceiro = :img_parceiro
            where id_parceiro = :id_parceiro
        
        ");
        
        $sql->execute(array(
            ':id_parceiro'=>$IdParceiro,
            ':nome_parceiro'=>$NomeParceiro,
            ':cnpj_parceiro'=>$CnpjParceiro,
            ':area_parceiro'=>$AreaParceiro,
            ':email_parceiro'=>$EmailParceiro,
            ':nacionalidade_parceiro'=>$NacionalidadeParceiro,
            ':celular_parceiro'=>$CelularParceiro,
            'excluircadastro_parceiro'=>$excluircadastro_parceiro,
            ':status_parceiro'=>$StatusParceiro,
            ':obs_parceiro'=>$ObsParceiro,
            ':cep_parceiro'=>$CepParceiro,
            ':endereco_parceiro'=>$EnderecoParceiro,
            ':numero_parceiro'=>$NumeroParceiro,
            ':complemento_parceiro'=>$ComplementoParceiro,
            ':cidade_parceiro'=>$CidadeParceiro,
            ':uf_parceiro'=>$UFParceiro,
            ':bairro_parceiro'=>$BairroParceiro,  
            ':login_parceiro'=>$LoginParceiro,
            ':senha_parceiro'=>$SenhaParceiro,
            ':img_parceiro'=>$img

        ));
        
        //echo $sql->rowCount();
        if($sql->rowCount() == 1)
        {
            echo "<p>Dados excluidos com sucesso</p>";
            
            //estrutura de envio da imagem
            
            if($_FILES["txtImgParceiro"]["tmp_name"]==null)
            {
                $img = $_POST['txtCaminhoParceiro'];
            }
            else
            {
                $pasta_dir = 'img/'.$IdParceiro.'/';
                
                // deleta arquivos de uma pasta
                array_map('unlink', glob("$pasta_dir*.*"));

                if(!file_exists($pasta_dir))
                {
                    mkdir($pasta_dir);
                }
                $img = $pasta_dir . $arquivo["name"];
                move_uploaded_file($arquivo["tmp_name"],$img);
            }
            //fim da estrutura
        }
    }
    else
    {
        header("Location:parceiro.php?");
    }
    ?>
    <a href="parceiro.php?" class="btn btn-dark">voltar</a>
</body>
</html>