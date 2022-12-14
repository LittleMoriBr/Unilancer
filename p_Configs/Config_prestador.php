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
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8 ">
                <h1 style="text-align: center ;">Cadastro de Usuario</h1>
                <hr>
                <form action="" method="post" class="form-control form-back p-4  " id="formularioPrestador">
                    <div class="row ">
                        <!-- ID  -->
                        <div style="display: none ;" class="col-sm-2 p-3">
                            <div class=" inputBox">
                                <input type="text" name="txtID" id="txtID" required="required">
                                <label for="txtID">ID</label>
                            </div>
                        </div>
                        <!-- ID PARCEIRO -->
                        <div style="display: none ;" class="col-sm-3 p-3">
                            <div class=" inputBox">
                                <input type="text" name="txtIDParceiro" id="txtIDParceiro" required="required">
                                <label for="txtIDParceiro">ID Parceiro </label>
                            </div>
                        </div>

                        <!--Data Cadastro-->
                        <div class="col-sm-3 p-3">

                            <div>

                                <input type="date" name="txt" id="txtDataCadastro" class="inputBorder">
                            </div>
                        </div>



                    </div>

                    <!-- NOME -->
                    <div class="row">
                        <div class="col-sm-4 p-3">
                            <div class="inputBox">
                                <input type="text" name="txtPrestador" id="txtPrestador" required="required">
                                <label for="txtPrestador">Nome</label>
                            </div>
                        </div>

                        <!-- SOBRENOME -->
                        <div class="col-sm-4 p-3">
                            <div class="inputBox">
                                <input type="text" name="txtSobrenome" id="txtSobrenome" required="required">
                                <label for="txtSobrenome">Sobrenome</label>
                            </div>
                        </div>
                        <!-- FOTO DE PERFIL -->
                        <div class="col-sm-4 p-3">
                            <div>
                                <input type="file" class="inputBorder" id="txtImg" name="txtImg" onchange="CarregarImg(this)">
                                <img src="" id="preImg" height="200">
                            </div>
                        </div>
                    </div>

                    <div style=" display: none;">
                        <label for="base64Code">Base 64</label>
                        <textarea name="base64Code" id="base64Code" rows="5" class="form-control"></textarea>
                    </div>

                    <!-- EMAIL/GMAIL -->
                    <div class="row">
                        <div class="col-sm-4 p-3">
                            <div class="inputBox">

                                <input type="text" name="txtEmailPrestador" id="txtEmailPrestador" required="required">
                                <label for="txtEmailPrestador">Email</label>
                            </div>
                        </div>

                        <!-- CNPJ/CPF -->
                        <div class="col-sm-4 p-3">
                            <div class="inputBox">
                                <input type="text" name="txtCpfCnpjPrestador" id="txtCpfCnpjPrestador" required="required">
                                <label for="txtCpfCnpjPrestador">CPF/CNPJ</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <!-- NACIONALIDADE -->
                        <div class="row">
                            <div class="col-sm-4 p-3">
                                <div class="inputBox">
                                    <input type="text" name="txtNacionalidadePrestador" id="txtNacionalidadePrestador" required="required">
                                    <label for="txtNacionalidadePrestador">Nacionalidade</label>
                                </div>
                            </div>

                            <!-- CIDADE -->
                            <div class="col-sm-4  p-3">
                                <div class="inputBox">
                                    <input type="text" name="txtCidadePrestador" id="txtCidadePrestador" required="required">
                                    <label for="txtCidadePrestador">Cidade</label>
                                </div>
                            </div>

                            <!-- UF-->
                            <div class="col-sm-2 p-3">
                                <div class="inputBox">
                                    <input type="text" name="txtUfPrestador" id="txtUfPrestador" required="required">
                                    <label for="txtUfPrestador">UF</label>
                                </div>
                            </div>
                        </div>

                        <!-- ENDERE??O -->
                        <div class="row">
                            <div class="col-sm-4 p-3">
                                <div class="inputBox">
                                    <input type="text" name="txtEnderecoPrestador" id="txtEnderecoPrestador" required="required">
                                    <label for="txtEnderecoPrestador">Endere??o</label>
                                </div>
                            </div>

                            <!-- BAIRRO -->
                            <div class="col-sm-3 p-3">
                                <div class="inputBox">
                                    <input type="text" name="txtBairroPrestador" id="txtBairroPrestador" required="required">
                                    <label for="txtBairroPrestador">Bairro</label>
                                </div>
                            </div>
                            <!-- CEP -->
                            <div class="col-sm-3 p-3">
                                <div class="inputBox">
                                    <input type="text" name="txtCepPrestador" id="txtCepPrestador" required="required">
                                    <label for="txtCepPrestador">Cep</label>
                                </div>
                            </div>
                            <!-- N?? -->
                            <div class="col-sm-2 p-3">
                                <div class="inputBox">
                                    <input type="text" name="txtNumeroPrestador" id="txtNumeroPrestador" required="required">
                                    <label for="txtNumeroPrestador">N??</label>
                                </div>
                            </div>
                        </div>
                        <!-- COMPLEMENTO-->
                        <div class="row">
                            <div class="col-sm-4 p-3">
                                <div class="inputBox">
                                    <input type="text" name="txtComplementoPrestador" id="txtComplementoPrestador" required="required">
                                    <label for="txtComplementoPrestador">Complemento</label>
                                </div>
                            </div>
                            <!-- CELULAR -->
                            <div class="col-sm-4 p-3">
                                <div class="inputBox">
                                    <input type="text" name="txtCelularPrestador" id="txtCelularPrestador" required="required">
                                    <label for="txtCelularPrestador">Celular</label>
                                </div>
                            </div>
                            <!-- Status -->
                            <div style="display: none ;" class="col-sm-3 p-3">
                                <select name="txtStatus" id="txtStatus" class="inputBorder">
                                    <option value="Status">Status</option>
                                    <option value="ATIVO">Ativo</option>
                                    <option value="INATIVO">Inativo</option>
                                </select>
                            </div>
                        </div>
                        <!-- USUARIO -->
                        <div class="row">
                            <div class="col-sm-3 p-3">
                                <div class="inputBox">

                                    <input type="text" name="txtLoginPrestador" id="txtLoginPrestador" required="required">
                                    <label for="txtLoginPrestador">Login</label>

                                </div>
                            </div>

                            <!-- SENHA -->
                            <div class="col-sm-3 p-3">
                                <div class="inputBox">

                                    <input type="password" name="txtSenhaPrestador" id="txtSenhaPrestador" required="required">
                                    <label for="txtSenhaPrestador">Senha</label>

                                </div>
                            </div>
                        </div>
                        <!-- OBS -->
                        <div>
                            <label for="txtObs">Obs</label>
                            <textarea class="inputBorder" rows="5" id="comment" name="txtObs"></textarea>
                        </div>

                        <!-- ??rea de Atua????o -->
                        <div class="col-sm-4 p-3">
                            <div class="inputBox">
                                <input type="text" name="txtAtuacaoPrestador" id="txtAtuacaoPrestador" required="required">
                                <label for="txtAtuacaoPrestador">??rea de Atua????o</label>
                            </div>
                        </div>

                        <!-- ??rea de Descri????o -->
                        <div>
                            <label for="txtDescricaoPrestador">Descri????o</label>
                            <textarea class="inputBorder" rows="5" id="txtDescricaoPrestador" name="txtDescricaoPrestador"></textarea>
                        </div>



                        <div style="display: none;" id="Resposta"></div>

                        <div><br>

                            <button id="btoCadastrar" class="btn ">Cadastrar</button>
                            <button id="btoAlterar" class="btn ">Alterar</button>
                            <button id="btoExcluir" class="btn ">Excluir</button>
                            <button id="btoLimpar" class="btn ">Limpar</button>

                        </div>

                        <!-- Data Termino -->
                        <div>
                            <label style="display:none ;" for="txtDataTermino">Data Cadastro</label>
                            <input type="date" style="display:none ;" name="txt" id="txtDataTermino">
                        </div>

                        <!-- Recomenda????es -->
                        <div>
                            <label style="display:none ;" for="txtRecomendacoes">Recomenda????es</label>
                            <input type="text" style="display:none ;" name="txtRecomendacoes" id="txtRecomendacoes">
                        </div>

                        <!-- Avalia??oes -->
                        <div>
                            <label style="display:none ;" for="txtAvaliacoes">Recomenda????es</label>
                            <input type="text" style="display:none ;" name="txtAvaliacoes" id="txtAvaliacoes">
                        </div>

                        <!-- Recomenda????es -->
                        <div>
                            <label style="display:none ;" for="txtRecomendacao">Recomenda????es</label>
                            <input type="text" style="display:none ;" name="txtRecomendacao" id="txtRecomendacao">
                        </div>
                </form>
                <div class="col-sm-2"></div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.5.1.js"></script>
    <script src="Validacao_Prestador.js"></script>

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