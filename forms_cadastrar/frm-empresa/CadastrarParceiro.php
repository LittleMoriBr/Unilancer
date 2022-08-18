
        
        <?php

        include_once("conexao.php");
        


        if($_POST)
        {

            $data = json_decode(file_get_contents('php://input'), true);


            extract($data);
        
        
        
            $id1 = 1;

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

                    ':nome_parceiro'=>$nome_parceiro,
                    ':cnpj_parceiro'=>$cnpj_parceiro,
                    ':area_parceiro'=>$area_parceiro,
                    ':email_parceiro'=>$area_parceiro,
                    ':nacionalidade_parceiro'=>$nacionalidade_parceiro,
                    ':celular_parceiro'=>$celular_parceiro,
                    ':status_parceiro'=>$status_parceiro,
                    ':obs_parceiro'=>$obs_parceiro,
                    ':cep_parceiro'=>$cep_parceiro,
                    ':endereco_parceiro'=>$endereco_parceiro,
                    ':numero_parceiro'=>$numero_parceiro,
                    ':complemento_parceiro'=>$complemento_parceiro,
                    ':cidade_parceiro'=>$cidade_parceiro,
                    ':uf_parceiro'=>$uf_parceiro,
                    ':bairro_parceiro'=>$bairro_parceiro,  
                    ':login_parceiro'=>$login_parceiro,
                    ':senha_parceiro'=>$senha_parceiro,
                    ':img_parceiro'=>$img_parceiro

                ));


                //echo $sql->rowCount();
                if($sql->rowCount() == 1)
                {
                    echo "<p>Dados cadastrados com sucesso</p>";
                    echo "<p id='joaquim'>ID Gerado - ".$conn->lastInsertId()."</p>";


                }
            }

        else
        {
            header("Location:index.php");
        }
        ?>
        <a href="parceiro.php?" class="btn btn-dark">voltar</a>
    
