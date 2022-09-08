<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento sem título</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="config.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="js/jquery.min.js">
    <link rel="stylesheet" href="Historico.css">
</head>

<body>
    <h1 class="corzinha">Seu Histórico</h1>

    <div class="container">
        <div class="row">
            <div class="col-12 ">

                <?php

                include_once("conexao.php");

                try {
                    $sql = $conn->query("SELECT contrato.*, prestador.nome_prestador, prestador.sobrenome_prestador, prestador.atuacao_prestador, prestador.img_prestador FROM contrato
inner JOIN prestador on contrato.id_prestador = prestador.id_prestador
WHERE id_cliente = 27");

                    foreach ($sql as $dados) {

                       

                        echo   '<div class="row border b-1 pb-4 rounded bordaa">';
                        echo      ' <div class="col-sm-2 pt-4 ">';
                        echo
                        '<img class="rounded" width="100px" height="100px" src="' . $dados['img_prestador'] . '">';
                        echo       ' </div>';



                        echo      ' <div class="col-sm-7">';
                        echo         ' <h3 class="margem-nome">' . $dados['nome_prestador'] . ' ' . $dados['sobrenome_prestador'] . '</h3>';
                        echo     ' </div>';

                        echo     ' <div class="col-sm-1">';
                        echo        ' <h3 class="margem-nome1">Status:</h3>';
                        echo      '</div>';

                        echo     ' <div class="col-sm-1">';
                        echo           '<p class="bolinha' . ' ' .
                            $dados['status_contrato'] . '"></p>';
                        echo      '</div>';

                        echo     '<div class="col-sm-2 aribaa"></div>';

                        echo    ' <div class="col-sm-7 aribaa">';
                        echo       ' <p >Valor do contrato:' . $dados['valorservico_contrato'] .  'R$</p>';
                        echo    ' </div>';

                        echo    ' <div class="col-sm-3 aribaa">';
                        echo       ' <p class="pouquinho">' . $dados['atuacao_prestador'] . '</p>';
                        echo    ' </div>';

                        echo     '<div class="col-sm-2 class="aribaaa"></div>';

                        echo    ' <div class="col-sm-10 aribaaa ">';
                        echo       '<div class=""> <p>' . $dados['resumo_contrato'] . '</p></div>';
                        echo    ' </div>';

                        echo  ' </div>';
                        echo  ' <br>';
                    }
                } catch (PDOException $e) {

                    echo $e->getMessage();
                }




                ?>
            </div>

        </div>
    </div>
</body>

</html>