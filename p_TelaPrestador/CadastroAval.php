<?php
include_once("conexao.php");
include_once("controlesessao.php");

$id_cliente = $usuarioLogadoID;
$data = json_decode(file_get_contents('php://input'), true);
$id_prestador = 2;

extract($data);

if ($_POST) {

    $sql = $conn->prepare("insert into avaliacoes
                (
                   estrelas_avaliacoes
                    titulo_avaliacoes,
                    descricao_avaliacoes,
                    id_cliente,
                   id_prestador
                    
                )
                values
                (
                    :estrelas_avaliacoes
                    :titulo_avaliacoes,
                    :descricao_avaliacoes,
                    :id_cliente,
                    :id_prestador
                    
                    
                )");

    $sql->execute(array(


        ':estrelas_avaliacoes' => $estrelas_avaliacoes,
        ':titulo_avaliacoes' => $titulo_avaliacoes,
        ':descricao_avaliacoes' => $descricao_avaliacoes,
        ':id_cliente' => $id_cliente,
        ':id_prestador' => $id_prestador
    ));

    //echo $sql->rowCount();
}