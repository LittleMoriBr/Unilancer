<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Portifolio.css">
</head>

<body>
    <img src="" alt="">

    <?php 

    include_once("conexao.php");
     

        try{
            $sql = $conn->query("select * from portifolio where id_prestador = 27");

            foreach ($sql as $dados) {
                    $img1 = $dados['img1_portifolio'];
                    $img2 = $dados['img2_portifolio'];
                    $img3 = $dados['img3_portifolio'];
                    $img4 = $dados['img4_portifolio'];
                    $img5 = $dados['img5_portifolio'];
                    $img6 = $dados['img6_portifolio'];

                
            echo '<div class="container">';

                echo     '<!--1-->';
                echo     '<div class="row">';
                echo         '<div class="col-12 border destaque mt-5">';
                echo          '<img src="'.$img1.'" alt="">';
                echo        '</div>';
                echo    '</div>';

                echo   '<!--2 e 3-->';
                echo     '<div class="row mt-3">';
                echo        '<div class="col border setembrochove">';
                 echo          '<img src="'.$img2.'" alt="">';
                echo           '</div>';
                echo        '<div class="col border setembrochove">';
                 echo          '<img src="'.$img3.'" alt="">';
                echo           '</div>';


                echo ' <!--4, 5 e 6-->';
                echo     '<div class="row mt-4">';
                echo       ' <div class="col espacin border segundou">';
                echo             '<div class="div border segundou">';
                echo                '<img src="'.$img4.'" alt="">';
                echo              '</div>';
                echo        '</div>';
                echo        ' <div class="col espacin border segundou">';
                echo             '<div class="div border segundou">';
                echo                '<img src="'.$img5.'" alt="">';
                echo              '</div>';
                echo        '</div>';
                echo        ' <div class="col espacin border segundou">';
                echo             '<div class="div border segundou">';
                echo                '<img src="'.$img6.'" alt="">';
                echo              '</div>';
                echo        '</div>';
                echo     '</div>';

                    
            echo   '</div>';
            }
                
                }catch (PDOException $e) {

                            echo $e->getMessage();
                        }
    ?>
</body>

</html>