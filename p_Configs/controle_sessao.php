<?php
session_start();
if($_SESSION && isset($_SESSION['usuarioSistemaID']) && isset($_SESSION['usuarioSistemaNome']) && isset($_SESSION['usuarioSistemaLogin']))
{
    $usuarioLogadoID = $_SESSION['usuarioSistemaID'];
    $usuarioLogadoLogin = $_SESSION['usuarioSistemaLogin'];
    $usuarioLogadoNome = $_SESSION['usuarioSistemaNome'];
    
}else if($_SESSION && isset($_SESSION['usuarioSistemaIDP']) && isset($_SESSION['usuarioSistemaNomeP']) && isset($_SESSION['usuarioSistemaLoginP']))
{
    $usuarioLogadoID = $_SESSION['usuarioSistemaIDP'];
    $usuarioLogadoLogin = $_SESSION['usuarioSistemaLoginP'];
    $usuarioLogadoNome = $_SESSION['usuarioSistemaNomeP'];
    $usuarioLogadoImg = $_SESSION['usuarioSistemaImgP'];  

}
    
else if($_SESSION && isset($_SESSION['usuarioSistemaIDF']) && isset($_SESSION['usuarioSistemaNomeF']) && isset($_SESSION['usuarioSistemaLoginF']))
{
    $usuarioLogadoID = $_SESSION['usuarioSistemaIDF'];
    $usuarioLogadoLogin = $_SESSION['usuarioSistemaLoginF'];
    $usuarioLogadoNome = $_SESSION['usuarioSistemaNomeF'];
    $usuarioLogadoImg = $_SESSION['usuarioSistemaImgF'];  

}

else
{
    header("Location:indexEmpresa.php");
}



    
?>
