<?php

if ($_GET && isset($_GET['tela'])) {
    if ($_GET['tela'] == "Informacoes") {
        include_once("Info.php");
    }

    if ($_GET['tela'] == "Portifolio") {
        include_once("Portifolio.php");
    }

    if ($_GET['tela'] == "Avaliacoes") {
        include_once("Avaliacoes.php");
    }

    if ($_GET['tela'] == "Historico") {
        include_once("Historico.php");
    }
}