<?php
session_start();
if($_SESSION && isset($_SESSION['usuarioSistemaID']) && isset($_SESSION['usuarioSistemaNome']) && isset($_SESSION['usuarioSistemaLogin']))
{
    session_unset();
    session_destroy();
    header("Location:index.php");
}
else
{
    header("Location:index.php");
}
    
    
?>