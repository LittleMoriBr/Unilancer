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
    <h1>Seu Histórico</h1>

    <div class="container">
        <div class="row">
            <div class="col-12 border b-1">

                <?php

                include_once("conexao.php");

                $sql = $conn->query("select * from prestador");


                echo   '<div class="row">';
                echo      ' <div class="col-sm-2 pt-4 ">';
                echo          '  <img class="" width="100px" height="100px" src="img/amare12.png" alt="">';
                echo       ' </div>';

                echo      ' <div class="col-sm-7">';
                echo         ' <h3 class="margem-nome">Suposto Nome</h3>';
                echo     ' </div>';

                echo     ' <div class="col-sm-1">';
                echo        ' <h3 class="margem-nome">Status:</h3>';
                echo      '</div>';

                echo     ' <div class="col-sm-1">';
                echo           '<p class="bolinha"></p>';
                echo      '</div>';

                echo     '<div class="col-sm-2 aribaa"></div>';

                echo    ' <div class="col-sm-7 aribaa">';
                echo       ' <p >Valor do contrato: 2 R$</p>';
                echo    ' </div>';

                echo    ' <div class="col-sm-3 aribaa">';
                echo       ' <p>Nome do serviço</p>';
                echo    ' </div>';

                echo     '<div class="col-sm-2 class="aribaaa"></div>';

                echo    ' <div class="col-sm-10 aribaaa ">';
                echo       '<div class=""> <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga ex exercitationem quo delectus corporis iure ratione beatae facilis, aspernatur nobis doloribus nulla obcaecati tempore commodi, quae totam autem corrupti officiis.</p></div>';
                echo    ' </div>';

                echo  ' </div>';
                ?>
            </div>

        </div>
    </div>
</body>

</html>