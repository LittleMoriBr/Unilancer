<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Documento sem título</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>

    <?php
    include_once("conexao.php");

    if ($_POST) {
        $id = $_POST['txtIDParceiro'];


        $sql = $conn->prepare("delete from parceiro where id_parceiro=:id_parceiro");

        $sql->execute(array(
            ':id_parceiro' => $id,

        ));

        //echo $sql->rowCount();
        if ($sql->rowCount() == 1) {
            echo "<p>Dados excluidos com sucesso</p>";
        }
    } else {
        header("Location:parceiro.php?");
    }
    ?>
    <a href="parceiro.php?" class="btn btn-dark">voltar</a>
</body>

</html>