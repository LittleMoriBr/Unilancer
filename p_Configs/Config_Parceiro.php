<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="styleIndex.css">

</head>


<body>


    <div class="container ">
        <div class="row ">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 ">
                <h1 style="text-align: center ;">Cadastro de Parceiro</h1>
                <hr>
                <form action="" method="post" class="form-control form-back p-4" id="FrmAdmParceiro">
                    <div class="row ">
                        <!-- ID  -->
                        <div class="col-sm-4  p-2  ">
                            <div style="display: none ;" class=" inputBox">
                                <input type="text" name="txtID" id="txtID" required="required">
                                <label for="txtID">ID</label>
                            </div>
                        </div>


                        <!--Data Cadastro-->
                        <div class="col-sm-4  p-2">

                            <div>
                                <input class="inputBorder" type="date" name="txt" id="txtData">

                            </div>
                        </div>

                    </div>

                    <!-- NOME -->
                    <div class="row">
                        <div class="col-sm-4  p-2  ">
                            <div class=" inputBox">
                                <input type="text" name="txtNome" id="txtNome" required="required">
                                <label for="txtNome">Nome</label>
                            </div>
                        </div>

                        <!-- FOTO DE PERFIL -->
                        <div class="col-sm-4  p-2">
                            <div>

                                <input type="file" class="inputBorder" id="txtImg" name="txtImg" onchange="CarregarImg(this)">
                                <img src="" id="preImg" height="200">
                            </div>
                        </div>


                        <div style=" display: none;">
                            <label for="base64Code">Base 64</label>
                            <textarea name="base64Code" id="base64Code" rows="5" class="form-control"></textarea>
                        </div>
                    </div>

                    <!-- Área de Atuação -->
                    <div class="row">
                        <div class="col-sm-4 p-2 ">

                            <select class="form-select inputBorder" id="txtArea" required="required">

                                <option value="Area 1">Area 1</option>

                                <option value="Outros">Outros</option>

                            </select>

                        </div>

                        <!-- CNPJ -->
                        <div class="col-sm-4  p-2 inputBox">
                            <div class="inputBox">
                                <input type="text" id="txtCnpj" id="txtCnpj" required="required">
                                <label for="txtCnpj">CNPJ</label>
                            </div>
                        </div>
                    </div>
                    <br>

                    <!-- Nacionalidade -->
                    <div class="row">
                        <div class="col-sm-4 inputBox  p-2">
                            <div class="inputBox">
                                <input type="text" name="txtNacionalidade" id="txtNacionalidade" required="required">
                                <label for="txtNacionalidade">Nacionalidade</label>
                            </div>
                        </div>

                        <!-- CIDADE -->
                        <div class="col-sm-4 p-2">
                            <div class="inputBox">
                                <input type="text" name="txtCidade" id="txtCidade" required="required">
                                <label for="txtCidade">Cidade</label>
                            </div>
                        </div>

                        <!-- UF -->

                        <div class="col-sm-4 p-2">
                            <div>

                                <select class=" inputBorder" aria-label="Default select example" id="txtUF" required="required">

                                    <option value="UF">UF</option>

                                    <option value="RJ">RJ</option>

                                    <option value="SP">SP</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- BAIRRO -->
                        <div class="col-sm-4  p-2">
                            <div class="inputBox">
                                <input type="text" name="txtBairro" id="txtBairro" required="required">
                                <label for="txtBairro">Bairro</label>
                            </div>
                        </div>

                        <!-- ENDEREÇO -->
                        <div class="col-sm-4 p-2">
                            <div class="inputBox">
                                <input type="text" name="txtEndereco" id="txtEndereco" required="required">
                                <label for="txtEndereco">Endereço</label>
                            </div>
                        </div>

                        <!-- NUMERO -->
                        <div class="col-sm-4 p-2">
                            <div class="inputBox">
                                <input type="text" name="txtNumero" id="txtNumero" required="required">
                                <label for="txtNumero">Numero</label>
                            </div>
                        </div>
                    </div>

                    <!-- COMPLEMENTO -->
                    <div class="row">
                        <div class="col-sm-4  p-2">
                            <div class="inputBox">
                                <input type="text" name="txtComplemento" id="txtComplemento" required="required">
                                <label for="txtComplemento">Complemento</label>
                            </div>
                        </div>

                        <!-- Telefone -->
                        <div class="col-sm-4  p-2">
                            <div class="inputBox">
                                <input type="text" name="txtCelular" id="txtCelular" required="required">
                                <label for="txtCelular">Celular</label>
                            </div>
                        </div>
                        <!-- CEP -->
                        <div class="col-sm-4 p-2">
                            <div class="inputBox">
                                <input type="text" name="txtCep" id="txtCep" required="required">
                                <label for="txtCep">Cep</label>
                            </div>
                        </div>

                    </div>

                    <!-- EMAIL -->
                    <div class="row">
                        <div class="col-sm-4   p-2">
                            <div class="inputBox">
                                <input type="text" name="txtEmail" id="txtEmail" required="required">
                                <label for="txtEmail">Email</label>
                            </div>
                        </div>
                        <!-- Status -->

                        <div style="display: none ;" class="col-sm-3   p-2">

                            <select name="txtStatus" id="txtStatus" class="inputBorder">
                                <option value="Status">Status</option>
                                <option value="ATIVO">Ativo</option>
                                <option value="INATIVO">Inativo</option>
                            </select>
                        </div>

                    </div>

                    <!-- Login -->
                    <div class="row">
                        <div class="col-sm-4 p-2">
                            <div class="inputBox">

                                <input type="text" name="txtLogin" id="txtLogin" required="required">
                                <label for="txtLogin">Login</label>

                            </div>
                        </div>

                        <!-- SENHA -->
                        <div class="col-sm-4 p-2">
                            <div class="inputBox">

                                <input type="password" name="txtSenha" id="txtSenha" required="required">
                                <label for="txtSenha">Senha</label>

                            </div>
                        </div>
                    </div>

                    <!-- OBS -->
                    <div class="col-sm-3   p-2">
                        <div>
                            <label for="txtObs">Obs</label>
                            <textarea class="inputBorder" rows="5" id="comment" name="txtObs"></textarea>
                        </div>
                    </div>

                    <hr>
                    <!-- BOTÃO -->
                    <div class="col-sm-6">
                        <button id="btoAlterar" class="btn btn-roxo">Alterar</button>
                        <button id="btoLimpar" class="btn btn-roxo">Limpar</button>
                        <button id="btoExcluir" class="btn btn-roxo">Excluir</button>
                    </div>

                    <div id="Resposta"></div>

                    <div style="display:none ;">
                        <label for="txtExcluirData"></label>
                        <input type="date" name="txtExcluirData" id="txtExcluirData">
                    </div>

                </form>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.js"></script>
    <script src="Validacao_Parceiro.js"></script>

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



</body>

</html>