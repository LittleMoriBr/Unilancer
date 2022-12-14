<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulário de clientes</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="styleIndex.css">


</head>

<body class="fundo">



    <div class="container">

        <div>
            <div class="row">


                <h2 class="text-center">Alterar Cadastro</h2>
                <hr><br>
                <form action="" method="post" class="form-control  form-back" id="frmCliente">
                    <br>
                    <!-- ID -->
                    <div class="row">

                        <div style="display: none ;" class="col-sm-2 p-2">
                            <div class="inputBox">
                                <input type="text" name="txtID" id="txtID" required="required">
                                <label for="txtID">ID</label>
                            </div>
                        </div>

                        <!--Botão Pesquisar-->
                        <div class="col-sm-2 p-3" style="display: none ;">

                            <div>
                                <button id="btoPesquisar" class="btn btn-roxo">Pesquisar</button>
                            </div>
                        </div>

                        <!--Data Cadastro-->
                        <div class="col-sm-4 p-2">
                            <div>
                                <input type="date" name="txtData" id="txtData" class=" inputBorder" required="required">
                            </div>
                        </div>

                    </div>


                    <div class="row">

                        <!-- NOME -->
                        <div class="col-sm-3 p-2">
                            <div class="inputBox">
                                <input type="text" name="txtNome" id="txtNome" required="required">
                                <label for="txtNome">Nome</label>
                            </div>
                        </div>

                        <!-- SOBRENOME -->
                        <div class=" col-sm-3 p-2">
                            <div class="inputBox">
                                <input type="text" name="txtSobrenome" id="txtSobrenome" required="required">
                                <label for="txtSobrenome">Sobrenome</label>
                            </div>
                        </div>

                        <!-- Data Nascimento -->
                        <div class="col-sm-3 p-2">
                            <div>
                                <input type="date" name="txtNascimento" id="txtNascimento" class=" inputBorder">
                            </div>
                        </div>

                        <!-- FOTO PERFIL -->
                        <div class="col-sm-3 p-2">
                            <div>
                                <input type="file" class="inputBorder" id="txtImg" name="txtImg" onchange="CarregarImg(this)">
                                <img src="" id="preImg" height="200" style="display: none ;">
                            </div>
                        </div>

                        <!-- BASE 64 -->
                        <div style=" display: none;">
                            <label for="base64Code">Base 64</label>
                            <textarea name="base64Code" id="base64Code" rows="5" class="form-control"></textarea>
                        </div>
                    </div>


                    <div class="row">

                        <!-- CPF -->
                        <div class="col-sm-3 p-2">
                            <div class="inputBox">
                                <input type="text" name="txtCpf" id="txtCpf" required="required">
                                <label for="txtCpf">CPF</label>
                            </div>
                        </div>

                        <!-- CEP -->
                        <div class="col-sm-3 p-2">
                            <div class="inputBox">
                                <input type="text" name="txtCep" id="txtCep" required="required">
                                <label for="txtCep">CEP</label>
                            </div>
                        </div>

                        <!-- UF -->
                        <div class="col-sm-2 p-2">
                            <div class="">

                                <select class=" form-control inputBorder" id="txtUF">

                                    <option value="UF">UF</option>

                                    <option value="RJ">RJ</option>

                                    <option value="SP">SP</option>
                                </select>
                            </div>
                        </div>

                        <!-- CIDADE -->
                        <div class="col-sm-3 p-2">
                            <div class="inputBox">
                                <input type="text" name="txtCidade" id="txtCidade" required="required">
                                <label for="txtCidade" class="form-label">Cidade</label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <!-- BAIRRO -->
                        <div class="col-sm-3 p-3">
                            <div class="inputBox">

                                <input type="text" name="txtBairro" id="txtBairro" required="required">
                                <label for="txtBairro">Bairro</label>
                            </div>
                        </div>

                        <!-- ENDEREÇO -->
                        <div class="col-sm-3 p-3">
                            <div class="inputBox">

                                <input type="text" name="txtEndereco" id="txtEndereco" required="required">
                                <label for="txtEndereco">Endereço</label>
                            </div>
                        </div>

                        <!-- NÚMERO -->
                        <div class="col-sm-2 p-3">
                            <div class="inputBox">

                                <input type="text" name="txtNumero" id="txtNumero" required="required">
                                <label for="txtNumero">Nº</label>
                            </div>
                        </div>

                        <!-- COMPLEMENTO -->
                        <div class="col-sm-3 p-3">
                            <div class="inputBox">
                                <input type="text" name="txtComplemento" id="txtComplemento" required="required">
                                <label for="txtComplemento">Complemento</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- NACIONALIDADE -->
                        <div class="col-sm-4 p-3">
                            <div class="inputBox">
                                <div class="">
                                    <input type="text" name="txtNacionalidade" id="txtNacionalidade" required="required">
                                    <label for="txtNacionalidade">Nacionalidade</label>
                                </div>
                            </div>

                        </div>

                        <!-- TELEFONE -->
                        <div class="col-sm-3 p-3">
                            <div class="inputBox">
                                <input type="tel" name="txtCelular" id="txtCelular" required="required">
                                <label for="txtCelular">Telefone</label>
                            </div>
                        </div>

                        <!-- EMAIL -->
                        <div class="col-sm-4 p-3">
                            <div class="inputBox">
                                <input type="email" name="txtEmail" id="txtEmail" required="required">
                                <label for="txtEmail">Email</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!-- LOGIN -->
                        <div class="col-sm-3 p-3">
                            <div class="inputBox">
                                <input type="text" name="txtLogin" id="txtLogin" required="required">
                                <label for="txtLogin">Login</label>
                            </div>

                        </div>

                        <!-- SENHA -->
                        <div class="col-sm-3 p-3">
                            <div class="inputBox">
                                <input type="password" name="txtSenha" id="txtSenha" required="required">
                                <label for="txtSenha">Senha</label>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <!-- STATUS -->
                        <div class="col-sm-3  p-3">

                            <select name="txtStatus" id="txtStatus" class="form-control inputBorder">
                                <option value="Status">Status</option>
                                <option value="ATIVO">Ativo</option>
                                <option value="INATIVO">Inativo</option>
                            </select>
                        </div>
                    </div>

                    <!-- OBS -->
                    <div>
                        <label for="txtObs">Observação</label>
                        <br>
                        <textarea name="txtObs" id="txtObs" cols="" rows="10" class="form-control inputBorder"></textarea>
                    </div>
                    <br>

                    <!-- DATA EXCLUIR -->
                    <div style="display:none ;">
                        <label for="txtExcluirData"></label>
                        <input type="date" name="txtExcluirData" id="txtExcluirData">
                    </div>


                    <div id="Resposta2"></div>

                    <!-- BOTÃO -->
                    <div class="col-sm-6">


                        <button id="btoAlterar" class="btn btn-roxo">Alterar</button>
                        <button id="btoLimpar" class="btn btn-roxo">Limpar</button>
                        <button id="btoExcluir" class="btn btn-roxo">Excluir</button>
                    </div>




                </form>



            </div>

            <script src="jquery-3.6.0.js"></script>
            <script src="Telas.js"></script>
            <script src="Validacao_Cliente.js"></script>


            <script>
                console.log("teste");

                function CarregarImg(imagem) {
                    var preview = document.getElementById("preImg");
                    var file = document.getElementById("txtImg").files[0];

                    var reader = new FileReader();

                    reader.onloadend = function() {
                        var caminho = reader.result;
                        preview.src = caminho;

                        $("#base64Code").val(caminho);
                    }

                    if (file) {
                        reader.readAsDataURL(file);
                    } else {
                        preview.src = "";
                    }
                }
            </script>

</html>

</body>

</html>