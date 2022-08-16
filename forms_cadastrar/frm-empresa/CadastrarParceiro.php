<!doctype html>
<html>


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
            $DataParceiro = $_POST['txtDataParceiro'];
            $StatusParceiro = $_POST['txtStatusParceiro'];
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

                $sql = $conn->prepare("insert into parceiro
                (
                    nome_parceiro,
                    cnpj_parceiro,
                    area_parceiro,
                    email_parceiro,
                    nacionalidade_parceiro,
                    celular_parceiro,
                    status_parceiro,
                    obs_parceiro,
                    cep_parceiro,
                    endereco_parceiro,
                    numero_parceiro,
                    complemento_parceiro,
                    cidade_parceiro,
                    uf_parceiro,
                    bairro_parceiro,
                    login_parceiro,
                    senha_parceiro,
                    img_parceiro
                )
                values
                (
                    :nome_parceiro,
                    :cnpj_parceiro,
                    :area_parceiro,
                    :email_parceiro,
                    :nacionalidade_parceiro,
                    :celular_parceiro,
                    :status_parceiro,
                    :obs_parceiro,
                    :cep_parceiro,
                    :endereco_parceiro,
                    :numero_parceiro,
                    :complemento_parceiro,
                    :cidade_parceiro,
                    :uf_parceiro,
                    :bairro_parceiro,
                    :login_parceiro,
                    :senha_parceiro,
                    :img_parceiro
                    
                )");

                $sql->execute(array(

                    ':nome_parceiro'=>$NomeParceiro,
                    ':cnpj_parceiro'=>$CnpjParceiro,
                    ':area_parceiro'=>$AreaParceiro,
                    ':email_parceiro'=>$EmailParceiro,
                    ':nacionalidade_parceiro'=>$NacionalidadeParceiro,
                    ':celular_parceiro'=>$CelularParceiro,
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
                    ':img_parceiro'=>$arquivo["name"]

                ));


                //echo $sql->rowCount();
                if($sql->rowCount() == 1)
                {
                    echo "<p>Dados cadastrados com sucesso</p>";
                    echo "<p>ID Gerado - ".$conn->lastInsertId()."</p>";

                    //estrutura de envio da imagem

                    $pasta_dir = 'img/'.$conn->lastInsertId().'/';

                    if(!file_exists($pasta_dir))
                    {
                        mkdir($pasta_dir);
                    }

                    $img = $pasta_dir . $arquivo["name"];

                    move_uploaded_file($arquivo["tmp_name"],$img);

                    //fim da estrutura

                }
            }

        else
        {
            header("Location:index.php");
        }
        ?>
        <a href="parceiro.php?" class="btn btn-dark">voltar</a>
    </body>
</html>