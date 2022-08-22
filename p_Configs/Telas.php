<?php

echo "aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa///";


print_r($_GET);

if ($_GET && isset($_GET['tela'])) {
    if ($_GET['tela'] == "usuario") {
        include_once("parceiro.php");
    }

    if ($_GET['tela'] == "fornecedor") {
        include_once("frm_fornecedores.php");
    }

    if ($_GET['tela'] == "categoria") {
        include_once("frm_categoria.php");
    }

    if ($_GET['tela'] == "produto") {
        include_once("frm_produtos.php");
    }
}
