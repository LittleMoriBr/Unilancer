<?php
session_start();
if($_SESSION && isset($_SESSION['usuarioSistemaID']) && isset($_SESSION['usuarioSistemaNome']) && isset($_SESSION['usuarioSistemaImagem']))
{
    $usuarioLogadoID = $_SESSION['usuarioSistemaID'];
    $usuarioLogadoLogin = $_SESSION['usuarioSistemaLogin'];
    $usuarioLogadoNome = $_SESSION['usuarioSistemaNome'];
    $usuarioLogadoImagem = $_SESSION['usuarioSistemaImagem'];

    
    
}
else
{
    header("Location:index.php");
}
    
    
?>