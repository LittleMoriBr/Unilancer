<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <title>Login</title>

    <script src=
        "https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity=
"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous">
    </script>
    
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

<?php

include_once("../p_Configs/conexao.php");

        
        $usuarioLogado = "";
        $tentouEntrar = 0;
    
        if($_POST)
        {
            $tentouEntrar = 1;
            $login = $_POST['txtLogin'];
            $senha = $_POST['txtSenha'];
            
            $sql = $conn->query("select * from funcionario 
                    where 
                        usuario_funcionario = '".$login."' and 
                        senha_funcionario = '".$senha."'");
            
            foreach($sql as $linha)
            {
                $usuarioLogado = $linha['usuario_funcionario'];
				
                
                session_start();
                $_SESSION['usuarioSistemaID'] = $linha['codigo_funcionario'];
                $_SESSION['usuarioSistemaLogin'] = $linha['usuario_funcionario'];
                $_SESSION['usuarioSistemaNome'] = $linha['nome_funcionario'];

            }
            
        }
    ?>

    

    <div class="main-login">
        <div class="left-login">
        <h1>Olá, bem vindo a área de Administração!<br>Faça agora seu login!</h1>
    </div>
    
    
<form action="" method="post">
    <div class="spaco"></div>
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <br>
                <div class="textfield">
                    <label for="txtLogin" class="txtLogin">Usuário</label>
                    <input style="color: white;" type="text" name="txtLogin" id="txtLogin" placeholder="Insira seu usuário">
                </div>
                <div class="textfield">
                    <label for="txtSenha" class="txtLogin">Senha</label>
                    <input style="color: white;" type="password" name="txtSenha" id="txtSenha" placeholder="Insira sua senha">
                </div>
                <button type="submit" formaction="index.php" class="btn-login">Entrar</button>
                <?php

                    if($usuarioLogado == "" && $tentouEntrar == 1)
                        {
                         echo "<p class='user-invalid'>Usuário ou senha inválido</p>";
                        }

                        
                    else if($usuarioLogado != "" && $tentouEntrar == 1)
                        {
                            echo "usuário seja bem vindo";
                            header("Location:../Gerenciamento/frm_home.html");
                        }
                ?>
                
            </div>
        </div>
    </div>
</form>

            </div>
        </div>
    </div>
</div>

<script>
        $(document).ready(function() {
            function disableBack() {
                window.history.forward()
            }
            window.onload = disableBack();
            window.onpageshow = function(e) {
                if (e.persisted)
                    disableBack();
            }
        });
    </script>
    
</body>
</html>