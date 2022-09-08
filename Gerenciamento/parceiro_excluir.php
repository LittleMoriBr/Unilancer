<?php

include_once("conexao.php");



$data = json_decode(file_get_contents('php://input'), true);


extract($data);
print_r($data);
try {
    $sql = $conn->prepare(
        "delete from parceiro where id_parceiro=:id_parceiro"
    );

    $sql->execute(array(
        ':id_parceiro' => $id_parceiro
    ));

    if ($sql->rowCount() == 1) {
        echo "<p>Dados Excluidos com sucesso</p>";
        echo "<p id='IDGerado'>" . $id_parceiro . "</p>";
    } else {
        echo "<p>Erro ao realizar a exclusão</p>";
    }
} catch (PDOException $ex) {
    echo $ex->getMessage();
}
