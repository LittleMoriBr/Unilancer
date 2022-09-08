<!DOCTYPE html>
<html lang="p-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>



                    <?php include_once('conexao.php');



                    $data = json_decode(file_get_contents('php://input'), true);


                    extract($data);




                    try {

                        $sql = $conn->query("select * from prestador where atuacao_prestador ='" . $pesquisar . "'");


                        foreach ($sql as $dados) {

                            echo '<div class="col-sm-4 m-4  ">';
                            echo '<div class="row">';
                            echo '<img class="tamanho" src="' . $dados['img_prestador'] . '">';
                            echo '<div class="col-sm-4">';
                            echo '<button type="submit" class="btn btn cor" formaction="">Contrate</button>';
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="col-sm-8 m-3 ">';
                            echo '<div class="row">';

                            echo '<p class="name-pesquisa">' . $dados['nome_prestador'] . '</p>';
                            echo '<div class="col-sm-4">';
                            
                            echo '<p class="t"></p>';

                            echo "</div>";
                            echo '<br>';
                            echo '<div class="row">';
                            echo '<p class="funcao-pres">' . $dados['atuacao_prestador'] . '</p>';
                            echo "</div>";
                            echo '<br>';
                            echo '<div class="row">';
                            echo '<p class="descr-pres">' . $dados['descricao_prestador'] . '</p>';
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                    
                    } catch (PDOException $e) {

                        echo $e->getMessage();
                    }

                    ?>
              


</body>