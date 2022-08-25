<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <title>Login</title>
</head>
<body>
<div class="area" >
            <ul class="circles">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
            </ul>
    </div >

    <div class="backfundy">
<div class="container">
    <div class="row">

    <div class="backMenu">
  <section class="top-nav2">
        <div>
          <img class="imgUni" src="../p_Home/img/amare12.png" alt="">
        </div>
        <input id="menu-toggle" type="checkbox" />
        <label class='menu-button-container' for="menu-toggle">
        <div class='menu-button'></div>
      </label>
        <ul class="menu">
          <li><a class="link-re" href="../p_Home/index.php">Home</a></li>
        </ul>
      </section>
      </div>

<?php
        
        $usuarioLogado = "";
        $tentouEntrar = 0;
    
        if($_POST)
        {
            $tentouEntrar = 1;
            $login = $_POST['txtLogin'];
            $senha = $_POST['txtSenha'];
            
            $sql = $conn->query("select * from usuario 
                    where 
                        login_usuario = '".$login."' and 
                        senha_usuario = '".$senha."'");
            
            foreach($sql as $linha)
            {
                $usuarioLogado = $linha['login_usuario'];
				
                
                session_start();
                $_SESSION['usuarioSistemaID'] = $linha['id_usuario'];
                $_SESSION['usuarioSistemaLogin'] = $linha['login_usuario'];
                $_SESSION['usuarioSistemaNome'] = $linha['nome_usuario'];
                $_SESSION['usuarioSistemaImagem'] = $linha['img_usuario'];

            }
            
        }
    ?>

    

    <div class="main-login">
        <div class="left-login">
        <h1>Olá, bem vindo!<br>Faça agora seu cadastro na Unilancer!</h1>
    </div>
    
    
<form action="" method="post">
    <div class="spaco"></div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <br>
                <div class="textfield">
                    <label for="txtLogin">Usuário</label>
                    <input style="color: #fff;" type="text" name="txtLogin" id="txtLogin" placeholder="Insira seu usuário">
                </div>
                <div class="textfield">
                    <label for="txtSenha">Senha</label>
                    <input style="color: white;" type="password" name="txtSenha" id="txtSenha" placeholder="Insira sua senha">
                </div>
                <button type="submit" formaction="index.php" class="btn-login">Entrar</button>
            </div>
        </div>
    </div>
</form>

                            <?php

                            if($usuarioLogado == "" && $tentouEntrar == 1)
                            {
                                echo "Usuário ou senha inválido";
                            }
                            else if($usuarioLogado != "" && $tentouEntrar == 1)
                            {
                                echo "usuário seja bem vindo";
                                header("Location:Inicial.php");
                            }
                            
                            ?>

            </div>
        </div>
    </div>
</div>

    <script src="js/jquery-3.6.0.js"></script>
    
</body>
</html>