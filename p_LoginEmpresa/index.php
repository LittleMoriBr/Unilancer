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

include_once("../p_Configs/conexao.php");

        
        $usuarioLogado = "";
        $tentouEntrar = 0;
    
        if($_POST)
        {
            $tentouEntrar = 1;
            $login = $_POST['txtLogin'];
            $senha = $_POST['txtSenha'];
            
            $sql = $conn->query("select * from parceiro 
                    where 
                        login_parceiro = '".$login."' and 
                        senha_parceiro = '".$senha."'");
            
            foreach($sql as $linha)
            {
                $usuarioLogado = $linha['login_parceiro'];
				
                
                session_start();
                $_SESSION['usuarioSistemaID'] = $linha['id_parceiro'];
                $_SESSION['usuarioSistemaLogin'] = $linha['login_parceiro'];
                $_SESSION['usuarioSistemaNome'] = $linha['nome_parceiro'];
                $_SESSION['usuarioSistemaImagem'] = $linha['img_parceiro'];

            }
            
        }
    ?>

    

    <div class="main-login">
        <div class="left-login">
        <h1>Ol??, bem vindo!<br>Fa??a agora seu login na Unilancer!</h1>
    </div>
    
    
<form action="" method="post">
    <div class="spaco"></div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <br>
                <div class="textfield">
                    <label for="txtLogin" class="txtLogin">Usu??rio</label>
                    <input style="color: rgba(26, 26, 26, 0.685);" type="text" name="txtLogin" id="txtLogin" placeholder="Insira seu usu??rio">
                </div>
                <div class="textfield">
                    <label for="txtSenha" class="txtLogin">Senha</label>
                    <input style="color: rgba(26, 26, 26, 0.685);" type="password" name="txtSenha" id="txtSenha" placeholder="Insira sua senha">
                </div>
                <button type="submit" formaction="index.php" class="btn-login">Entrar</button>
            </div>
        </div>
    </div>
</form>

                            <?php

                            if($usuarioLogado == "" && $tentouEntrar == 1)
                            {
                                echo "Usu??rio ou senha inv??lido";
                            }
                            else if($usuarioLogado != "" && $tentouEntrar == 1)
                            {
                                echo "usu??rio seja bem vindo";
                                header("Location:../p_Home/index.php");
                            }
                            
                            ?>

            </div>
        </div>
    </div>
</div>

    <script src="js/jquery-3.6.0.js"></script>
    
</body>
</html>