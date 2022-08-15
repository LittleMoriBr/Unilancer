<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="css/bootstrap.css">





    <title>Document</title>
</head>

<body>
    <script href="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-essentials.min.js"></script>



    <?php include_once("../Gerenciamento/conexao.php"); ?>
    <?php include_once("PesquisarParceiro.php"); ?>

    <div class="container">
        <div class="row mt-5">

            <div class="col-lg-12">

                <h3>Alterar Informações de Cadastro</h3>
                <br>

                <img class="redondo" src="img/6687865b-0c8b-4694-b692-fb2612a3b3b2 (1).jpg" alt="">


                <label class="m-5">
                    <h3>Nome da Empresa</h3>
                </label>

                <br>
                <br>


                <div id="accordion">

                    <div class="card">
                        <div class="card-header">
                            <a class="btn " data-bs-toggle="collapse" href="#collapseOne">
                                Sobre a Empresa
                            </a>
                        </div>
                        <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body">

                                <div class="form-group row">

                                    <div class="col-sm-6">

                                        <label for="txtNomeParceiro" class="form-label">Nome</label><br>
                                        <input type="text" id="txtNomeParceiro" name="txtNomeParceiro" placeholder="Informe o Nome" class="form-control" value="<?php echo $nome_parceiro; ?>">

                                        <br>
                                    </div>

                                    <div class="col-sm-6">

                                        <label for="txtAreaParceiro" class="form-label">Area de atuação</label><br>
                                        <select class="form-select" aria-label="Default select example" name="txtAreaParceiro">

                                            <option value="Area 1" <?php

                                                                    if ($area_parceiro == "Area 1") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Area 1</option>

                                            <option value="Outros" <?php
                                                                    if ($area_parceiro == "Outros") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Outros</option>

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

                                    

                                    <div class="col-sm-10"></div>

                                    <form action="" method="POST">

                                        <div class="col-sm-2">
                                            <button name="btoAlterarParceiro" formaction="AlterarParceiro.php" class="btn btn-outline-warning">Alterar</button>
                                        </div>

                                    </form>

                                </div>



                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
                                Contatos
                            </a>
                        </div>
                        <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body">

                                <div class="form-group row">

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

                                    <div class="col-sm-10"></div>

                                    <form action="" method="post">

                                        <div class="col-sm-2">
                                            <button name="btoAlterarParceiro" formaction="AlterarParceiro.php" class="btn btn-outline-warning">Alterar</button>
                                        </div>

                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseThree">
                                Informações de Localização
                            </a>
                        </div>
                        <div id="collapseThree" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body">

                                <div class="form-group row">

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

                                            <option value="RJ" <?php

                                                                if ($status_parceiro == "RJ") {
                                                                    echo "selected";
                                                                }
                                                                ?>>RJ</option>

                                            <option value="SP" <?php
                                                                if ($status_parceiro == "SP") {
                                                                    echo "selected";
                                                                }
                                                                ?>>SP</option>
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

                                    <div class="col-sm-10"></div>

                                    <form action="" method="post">

                                        <div class="col-sm-2">
                                            <button name="btoAlterarParceiro" formaction="AlterarParceiro.php" class="btn btn-outline-warning">Alterar</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <a class="collapsed btn" data-bs-toggle="collapse" href="#collapse4">
                                Informações de Login
                            </a>
                        </div>
                        <div id="collapse4" class="collapse" data-bs-parent="#accordion">
                            <div class="card-body">

                                <div class="form-group row">

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

                                    <div class="col-sm-10"></div>

                                    <form action="" method="post">

                                        <div class="col-sm-2">
                                            <button name="btoAlterarParceiro" formaction="AlterarParceiro.php" class="btn btn-outline-warning">Alterar</button>
                                        </div>

                                    </form>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapse5">
                            Informações de Privacidade
                        </a>
                    </div>
                    <div id="collapse5" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">

                            <div class="form-group row">

                                <div class="col-lg-6">

                                    <label for="txtNotificações" class="form-label">Permitir Norificações</label>
                                    <select name="txtNotificações" id="" class="form-select">
                                        <option value="Sim">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>

                                <div class="col-lg-6">

                                    <label for="txtNotificaçõesmail" class="form-label">Permitir que e-mails sejam enviados</label>
                                    <select name="txtNotificaçõesmail" id="" class="form-select">
                                        <option value="Sim">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>

                                <div class="col-sm-10"></div>

                                <form action="" method="post">

                                    <div class="col-sm-2 mt-3">
                                        <button name="btoAlterarParceiro" formaction="AlterarParceiro.php" class="btn btn-outline-warning">Alterar</button>
                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <a class="collapsed btn" data-bs-toggle="collapse" href="#collapse6">
                            Outros
                        </a>
                    </div>
                    <div id="collapse6" class="collapse" data-bs-parent="#accordion">
                        <div class="card-body">

                            <div class="form-group row">

                                <div class="col-lg-6 mt-3">

                                    <label for="txtTema" class="form-label">Tema</label>
                                    <select name="txtema" id="" class="form-select">
                                        <option value="Sim">Claro</option>
                                        <option value="Não">Escuro</option>
                                    </select>
                                </div>

                                <form action="" method="post">

                                    <div class="col-sm-2 mt-5">
                                        <button name="btoAlterarParceiro" formaction="AlterarParceiro.php" class="btn btn-outline-warning">Alterar</button>
                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>

                <h3 class="mt-5 mb-3">Exluir Conta</h3>

                <form action="" method="POST">

                    <button name="btoExcluirParceiro" formaction="ExcluirParceiro.php" class="btn btn-outline-danger">Excluir</button>

                </form>

            </div>
        </div>
    </div>



</body>

</html>