<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Document</title>
</head>

<body>
    <script href="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="js/bootstrap.bundle.js">

    <?php include_once("conexao.php"); ?>
    <form action="" method="post" class="form-control" enctype="multipart/form-data">

        <div class="container">
            <div class="row">
                <div>
                    <label for="">Codigo_prestador</label>
                    <input type="text" class="form-control" name="txtCodigo" id="txtCodigo">
                </div>
                <div>
                    <label for="">Imagem</label>
                    <input id="pic" type="file" name="pic" accept="image/*" class="form-control"><br>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <button class="btn btn-primary" formaction="CadastrarImagem2.php">Cadastra</button>
                    </div>
                </div>


    </form>



</body>

</html>