<?php

echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa///";


print_r($_GET);

if ($_GET && isset($_GET['tela'])) {
    if ($_GET['tela'] == "usuario") {
        include_once("parceiro.php");
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
