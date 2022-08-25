<?php

include_once("conexao.php");



$data = json_decode(file_get_contents('php://input'), true);


extract($data);
print_r($data);
try {
    $sql = $conn->prepare(
        "delete from cliente where id_cliente=:id_cliente"
    );

    $sql->execute(array(
        ':id_cliente' => $id_cliente
    ));

    if ($sql->rowCount() == 1) {
        echo "<p>Dados Excluidos com sucesso</p>";
        echo "<p id='IDGerado'>" . $id_cliente . "</p>";
    } else {
        echo "<p>Erro ao realizar a exclusão</p>";
    }
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
