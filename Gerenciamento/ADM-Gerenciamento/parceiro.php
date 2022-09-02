<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
</head>
<body>

    <script src="js/bootstrap.bundle.js"></script>

    <?php include_once("conexao.php"); ?>
    <?php include_once("PesquisarParceiro.php"); ?>


    <h1 align="center" class="m-5">Cadastro de Empresas</h1>


    <div class="container">
        
            <form action="" method="post" class="form-control" enctype="multipart/form-data">

                    <div class="row">

                        <div class="col-sm-5">

                            <label for="txtIDParceiro" class="form-label">ID</label><br>
                            <input type="text" id="txtIDParceiro" name="txtIDParceiro" placeholder="ID" class="form-control" value="<?php echo $id_parceiro; ?>" >

                        </div>

                        <div class="col-sm-2 text-center">

                            <label for="" class="form-label">&nbsp</label><br>
                            <p align="left"><button class="btn btn-primary" formaction="parceiro.php" name="btoPesquisar" id="btoPesquisar"><img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/20/000000/external-magnifying-glass-interface-kiranshastry-lineal-kiranshastry.png"/></button></p>

                        </div>

                        <div class="col-sm-5">

                            <label for="txtDataParceiro" class="form-label">Data</label><br>
                            <input type="date" id="txtDataParceiro" name="txtDataParceiro" placeholder="Informe Data" class="form-control" value="<?php echo $datacadastro_parceiro; ?>">

                        </div>

                        <h3 align="center" class="mt-3"> Sobre a Empresa</h3>
                        <hr>

                        <div class="col-sm-6">

                            <label for="txtNomeParceiro" class="form-label">Nome</label><br>
                            <input type="text" id="txtNomeParceiro" name="txtNomeParceiro" placeholder="Informe o Nome" class="form-control" value="<?php echo $nome_parceiro; ?>">

                            <br>
                        </div>

                        <div class="col-sm-6">

                            <label for="txtAreaParceiro" class="form-label">Area de atuação</label><br>
                            <select class="form-select" aria-label="Default select example" name="txtAreaParceiro">

                            <option value="Area 1"
                                     
                                     <?php

                                     if($area_parceiro == "Area 1")
                                     {
                                         echo "selected";
                                     }
                                     ?>

                                     >Area 1</option>

                             <option value="Outros" 

                                     <?php
                                     if($area_parceiro == "Outros")
                                     {
                                         echo "selected";
                                     }
                                     ?>

                                     >Outros</option>

                            </select>

                            <br>
                        </div>

                        <div class="col-sm-6">

                            <label for="txtNacionalidadeParceiro" class="form-label">Nacionalidade</label><br>
                            <input type="text" id="txtNacionalidadeParceiro" name="txtNacionalidadeParceiro" placeholder="Informe a nacionalidade" class="form-control" value="<?php echo $nacionalidade_parceiro; ?>">

                            <br>
                        </div>
                        
                        <div class="col-sm-6">

                            <label for="txtCnpjParceiro" class="form-label">CNPJ</label><br>
                            <input type="text" id="txtCnpjParceiro" name="txtCnpjParceiro" placeholder="Informe o CNPJ" class="form-control" value="<?php echo $cnpj_parceiro; ?>">

                            <br>
                        </div>

                        <h3 align="center" class="mt-3"> Contatos</h3>
                        <hr>

                        <div class="col-sm-6">

                            <label for="txtCelularParceiro" class="form-label">Numero de telefone</label><br>
                            <input type="number" id="txtCelularParceiro" name="txtCelularParceiro" placeholder="Informe seu numero de contato" class="form-control" value="<?php echo $celular_parceiro; ?>">

                            <br>
                        </div>

                        <div class="col-sm-6">

                            <label for="txtEmailParceiro" class="form-label">Email</label><br>
                            <input type="email" id="txtEmailParceiro" name="txtEmailParceiro" placeholder="Informe seu Email" class="form-control" value="<?php echo $email_parceiro; ?>">

                            <br>
                        </div>

                        <h3 align="center" class="mt-3"> Informações de Localização</h3>
						<hr>

                        <div class="col-sm-3">

                            <label for="txtCepParceiro" class="form-label">CEP</label><br>
                            <input type="text" id="txtCepParceiro" name="txtCepParceiro" placeholder="Informe seu CEP" class="form-control" value="<?php echo $cep_parceiro; ?>">

                            <br>
                        </div>

                        <div class="col-sm-9"> </div>

                        <div class="col-sm-5">

                            <label for="txtCidadeParceiro" class="form-label">Cidade</label><br>
                            <input type="text" id="txtCidadeParceiro" name="txtCidadeParceiro" placeholder="Informe seu Cidade" class="form-control" value="<?php echo $cidade_parceiro; ?>">

                            <br>
                        </div>

                        <div class="col-sm-2">

                            <label for="txtUFParceiro" class="form-label">UF</label><br>
                            <select class="form-select" aria-label="Default select example" name="txtUFParceiro">

                            <option value="RJ"
                                     
                                     <?php

                                     if($status_parceiro == "RJ")
                                     {
                                         echo "selected";
                                     }
                                     ?>

                                     >RJ</option>

                             <option value="SP" 

                                     <?php
                                     if($status_parceiro == "SP")
                                     {
                                         echo "selected";
                                     }
                                     ?>

                                     >SP</option>
                            </select>

                            <br>
                        </div>

                        <div class="col-sm-5">

                            <label for="txtBairroParceiro" class="form-label">Bairro</label><br>
                            <input type="text" id="txBairroParceiro" name="txtBairroParceiro" placeholder="Informe seu Bairro" class="form-control" value="<?php echo $bairro_parceiro; ?>">

                            <br>
                        </div>

                        <div class="col-sm-5">

                            <label for="txtEnderecoParceiro" class="form-label">Endereço</label><br>
                            <input type="text" id="txtEnderecoParceiro" name="txtEnderecoParceiro" placeholder="Informe seu Endereço" class="form-control" value="<?php echo $endereco_parceiro; ?>">

                            <br>
                        </div>

                        <div class="col-sm-2">

                            <label for="txtNumeroParceiro" class="form-label">Numero</label><br>
                            <input type="text" id="txtNumeroParceiro" name="txtNumeroParceiro" placeholder="Nº de endereço" class="form-control" value="<?php echo $numero_parceiro; ?>">

                            <br>
                        </div>

                        <div class="col-sm-5">

                            <label for="txtComplementoParceiro" class="form-label">Complemento</label><br>
                            <input type="text" id="txtComplementoParceiro" name="txtComplementoParceiro" placeholder="Informe seu Complemento" class="form-control" value="<?php echo $complemento_parceiro; ?>">

                            <br>
                        </div>

                        <h3 align="center" class="mt-3"> Informações do Login</h3>
                        <hr>

                        <div class="col-sm-6">

                            <label for="txtLoginParceiro" class="form-label">Login</label><br>
                            <input type="text" id="txtLoginParceiro" name="txtLoginParceiro" placeholder="Informe seu Login" class="form-control" value="<?php echo $login_parceiro; ?>">

                            <br>
                        </div>

                        <div class="col-sm-6">

                            <label for="txtSenhaParceiro" class="form-label">Senha</label><br>
                            <input type="password" id="txtSenhaParceiro" name="txtSenhaParceiro" placeholder="Informe sua Senha" class="form-control" value="<?php echo $senha_parceiro; ?>">

                            <br>
                        </div>

                        <div class="col-sm-6">

                            <label for="txtCaminhoParceiro" class="form-label">Caminho</label><br>
                            <input type="hidden" id="txtCaminhoParceiro" name="txtCaminhoParceiro" placeholder="Informe sua Senha" class="form-control" value="<?php echo $img_parceiro; ?>">

                            <br>
                        </div>

                        <div class="col-sm-12">

                            <label for="txtImgParceiro" class="form-label">Imagem de perfil</label><br>
                            <input type="file" id="txtImgParceiro" name="txtImgParceiro" placeholder="Informe sua imagem de perfil" class="form-control" >

                            <br>
                        </div>

                        <h3 align="center" class="mt-3"> Outros</h3>
						<hr>

                        <div class="col-sm-3">
                            <label for="txtStatusParceiro" class="form-label">Status</label><br>
                                <select name="txtStatusParceiro" id="txtStatusParceiro" class="form-control">
                                    <option value="Ativo"
                                     
                                            <?php

                                            if($status_parceiro == "Ativo")
                                            {
                                                echo "selected";
                                            }
                                            ?>

                                            >Ativo</option>

                                    <option value="Inativo" 

                                            <?php
                                            if($status_parceiro == "Inativo")
                                            {
                                                echo "selected";
                                            }
                                            ?>

                                            >Inativo</option>
                                </select>
                        </div>

                        <div class="col-sm-12">

                            <label for="txtObsParceiro" class="form-label">Observação</label><br>
                            <textarea name="txtObsParceiro" id="txtObsParceiro" cols="30" rows="5" class="form-control"><?php echo $obs_parceiro; ?></textarea>

                                <br>
                        </div>

                        <div class="col-sm-9"></div>

                        <div class="col-sm-3">

                            <button name="btoCadastrarParceiro" formaction="CadastrarParceiro.php" class="btn btn-outline-success">Cadastrar</button>
                            <button name="btoAlterarParceiro"  formaction="AlterarParceiro.php" class="btn btn-outline-warning">Alterar</button>
                            <button name="btoExcluirParceiro" formaction="ExcluirParceiro.php" class="btn btn-outline-danger">Excluir</button>


                            
                        </div>

                    </div>

                </div>

            </form>

        </div>

    </body>
</html>