
        
        <?php

        include_once("conexao.php");
        


        if($_POST)
        {

            $data = json_decode(file_get_contents('php://input'), true);


            extract($data);
        
        
        
            $id1 = 1;

                $sql = $conn->prepare("insert into prestador
                (
                    nome_prestador,	
                    sobrenome_prestador,
                    email_prestador,
                    cpfnj_prestador,
                    cidade_prestador,
                    uf_prestador,
                    endereco_prestador,
                    bairro_prestador,
                    cep_prestador,
                    numero_prestador,
                    complemento_prestador,
                    celular_prestador,
                    login_prestador, 	
                    senha_prestador,		
                    obs_prestador,
                    id_parceiro,	
                    img_prestador,
                    atuacao_prestador,
                    descricao_prestador,
                    nacionalidade_prestador

                )
                values
                (
                    :nome_prestador,	
                    :sobrenome_prestador,	
                    :email_prestador,		
                    :cpfnj_prestador,	
                    :cidade_prestador,
                    :uf_prestador,
                    :endereco_prestador,
                    :bairro_prestador,
                    :cep_prestador,
                    :numero_prestador,
                    :complemento_prestador,
                    :celular_prestador,
                    :login_prestador,
                    :senha_prestador,
                    :obs_prestador,
                    :id_parceiro,
                    :img_prestador,
                    :atuacao_prestador,
                    :descricao_prestador,
                    :nacionalidade_prestador
                    
                )");

                $sql->execute(array(

                    ':nome_prestador' => $nome_prestador,
                    ':sobrenome_prestador' => $sobrenome_prestador,
                    ':email_prestador' => $email_prestador,
                    ':cpfnj_prestador' => $cpfnj_prestador,
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
                    ':id_parceiro' => $id1,
                    ':img_prestador' => $img_prestador,
                    ':atuacao_prestador' => $atuacao_prestador,
                    ':descricao_prestador' => $descricao_prestador,
                    ':nacionalidade_prestador' => $nacionalidade_prestador

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
        <a href="frmAdm_prestador.html" class="btn btn-dark">voltar</a>
    
