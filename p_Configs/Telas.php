<?php

include_once("conexao.php");

if ($_GET && isset($_GET['tela'])) {

    session_start();
    if ($_SESSION && isset($_SESSION['usuarioSistemaID']) && isset($_SESSION['usuarioSistemaNome']) && isset($_SESSION['usuarioSistemaImagem'])) {
        $usuarioCliente = $_SESSION['usuarioSistemaID'];
        $usuarioLogadoImagem = $_SESSION['usuarioSistemaImagem'];
    } else {
        header("Location:index.php");
    }


    if ($_GET['tela'] == "usuario") {
        include_once("Config_Cliente.php");
    }

    if ($_GET['tela'] == "Some") {
        include_once("Some.php");
    }

    if ($_GET['tela'] == "Preferencias") {
        include_once("Preferencias.php");
    }

    if ($_GET['tela'] == "Historico") {
        include_once("Historico.php");
    }
}
