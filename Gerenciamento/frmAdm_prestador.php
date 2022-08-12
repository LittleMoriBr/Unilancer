 <!DOCTYPE html>
 <html lang="pt-br">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Cadastro</title>
     <link rel="stylesheet" href="css/bootstrap.css">

 </head>

 <body>
     <div class="container">
         <div class="row">
             <div class="col-sm-3"></div>
             <div class="col-sm-7">
                 <h1 style="text-align: center ;">Cadastro de Usuario</h1>
                 <hr>
                 <form action="" method="post" class="form-control p-4" enctype="multipart/form-data">
                     <!-- NOME -->
                     <div class="row">
                         <div class="col-sm-4">
                             <div>
                                 <label for="txtPrestador">Nome</label>
                                 <input type="text" name="txtPrestador" id="txtPrestador" placeholder="Nome" class="form-control">
                             </div>
                         </div>

                         <!-- SOBRENOME -->
                         <div class="col-sm-4">
                             <div>
                                 <label for="txtSobrenome">Sobrenome</label>
                                 <input type="text" name="txtSobrenome" id="txtPrestador" placeholder="Sobrenome" class="form-control">
                             </div>
                         </div>
                         <!-- FOTO DE PERFIL -->
                         <div class="col-sm-4">
                             <div>
                                 <label for="txtImg" class="form-label">Foto de perfil</label>
                                 <input type="file" id="txtImg" name="txtImg" placeholder="Envie a Foto" class="form-control">
                             </div>
                         </div>
                     </div>

                     <!-- EMAIL/GMAIL -->
                     <div class="row">
                         <div class="col-sm-6">
                             <div>
                                 <label for="txtEmailPrestador">Email/Gmail</label>
                                 <input type="text" name="txtEmailPrestador" id="txtEmailPrestador" placeholder="unilancer@gmail.com" class="form-control">
                             </div>
                         </div>

                         <!-- CNPJ/CPF -->
                         <div class="col-sm-6">
                             <div>
                                 <label for="txtCpfCnpjPrestador">CPF/CNPJ</label>
                                 <input type="text" name="txtCpfCnpjPrestador" id="txtCpfCnpjPrestador" placeholder="123.123.123-12" class="form-control">
                             </div>
                         </div>
                     </div>
                     <div class="row">

                         <!-- NACIONALIDADE -->
                         <div class="row">
                             <div class="col-sm-4">
                                 <div>
                                     <label for="txtNacionalidadePrestador">Nacionalidade</label>
                                     <input type="text" name="txtNacionalidadePrestador" id="txtNacionalidadePrestador" placeholder="Nascionalidade" class="form-control">
                                 </div>
                             </div>

                             <!-- CIDADE -->
                             <div class="col-sm-4">
                                 <div>
                                     <label for="txtCidadePrestador">Cidade</label>
                                     <input type="text" name="txtCidadePrestador" id="txtCidadePrestador" placeholder="Cidade" class="form-control">
                                 </div>
                             </div>
                             <!-- UF-->
                             <div class="col-sm-2">
                                 <div>
                                     <label for="txtUfPrestador">UF</label>
                                     <input type="text" name="txtUfPrestador" id="txtUfPrestador" placeholder="UF" class="form-control">
                                 </div>
                             </div>
                         </div>

                         <!-- ENDEREÇO -->
                         <div class="row">
                             <div class="col-sm-4">
                                 <div>
                                     <label for="txtEnderecoPrestador">Endereço</label>
                                     <input type="text" name="txtEnderecoPrestador" id="txtEnderecoPrestador" placeholder="Endereço" class="form-control">
                                 </div>
                             </div>

                             <!-- BAIRRO -->
                             <div class="col-sm-3">
                                 <div>
                                     <label for="txtBairroPrestador">Bairro</label>
                                     <input type="text" name="txtBairroPrestador" id="txtBairroPrestador" placeholder="Bairro" class="form-control">
                                 </div>
                             </div>
                             <!-- CEP -->
                             <div class="col-sm-3">
                                 <div>
                                     <label for="txtCepPrestador">Cep</label>
                                     <input type="text" name="txtCepPrestador" id="txtCepPrestador" placeholder="Informe o Cep" class="form-control">
                                 </div>
                             </div>
                             <!-- Nº -->
                             <div class="col-sm-2">
                                 <div>
                                     <label for="txtNumeroPrestador">Nº</label>
                                     <input type="text" name="txtNumeroPrestador" id="txtNumeroPrestador" placeholder="Número" class="form-control">
                                 </div>
                             </div>
                         </div>
                         <!-- COMPLEMENTO-->
                         <div class="row">
                             <div class="col-sm-4">
                                 <div>
                                     <label for="txtComplementoPrestador">Complemento</label>
                                     <input type="text" name="txtComplementoPrestador" id="txtComplementoPrestador" placeholder="Complemento" class="form-control">
                                 </div>
                             </div>
                             <!-- CELULAR -->
                             <div class="col-sm-4">
                                 <div>
                                     <label for="txtCelularPrestador">Celular</label>
                                     <input type="text" name="txtCelularPrestador" id="txtCelularPrestador" placeholder="Informe seu Número " class="form-control">
                                 </div>
                             </div>
                         </div>
                         <!-- USUARIO -->
                         <div class="row">
                             <div class="col-sm-5">
                                 <div>
                                     <label for="txtUsuarioPrestador">Usuario</label>
                                     <input type="text" name="txtUsuarioPrestador" id="txtUsuarioPrestador" placeholder="Usuario" class="form-control">

                                 </div>
                             </div>

                             <!-- SENHA -->
                             <div class="col-sm-5">
                                 <div>
                                     <label for="txtSenhaPrestador">Senha</label>
                                     <input type="password" name="txtSenhaPrestador" id="txtSenhaPrestador" placeholder="Senha" class="form-control">

                                 </div>
                             </div>
                         </div>
                         <!-- OBS -->
                         <div>
                             <label for="txtObs">Obs</label>
                             <textarea class="form-control" rows="5" id="comment" name="txtObs"></textarea>
                         </div>

                         <div>
                             <label for="txtAtuacaoPrestador">Área de Atuação</label>
                             <input type="text" name="txtAtuacaoPrestador" id="txtAtuacaoPrestador" class="form-control">
                         </div>

                         <div>
                             <label for="txtDescricaoPrestador">Descrição</label>
                             <textarea class="form-control" rows="5" id="txtDescricaoPrestador" name="txtDescricaoPrestador"></textarea>
                         </div>

                         <div><br>

                             <button type="submit" class="btn btn-primary" formaction="prestador_cadastro.php">Cadastrar</button>
                             <button type="submit" class="btn btn-warning" formaction="">Alterar</button>
                             <button type="submit" class="btn btn-danger" formaction="">Excluir</button>
                             <button type="submit" class="btn btn-light" formaction="">Limpar</button>

                         </div>

                 </form>
                 <div class="col-sm-2"></div>
             </div>
         </div>
     </div>


     <script src="js/bootstrap.bundle.js"></script>
 </body>

 </html>