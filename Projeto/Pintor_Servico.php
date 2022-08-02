<!DOCTYPE html>
<html lang="pr-br">
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
        echo '<div >';
                        echo '<div class="row">';
                                
                                    try
                                    {

                                        $sql = $conn->query("select * from servicos where nome_servico = 'Mecanico'");

                                    
                                        foreach($sql as $dados)
                                        {
                                            
                                            echo '<div class="col-sm-3">';
                                                echo '<div class="card m-1 zoom">';
                                                    echo '<img class="card-img-top tamanho hover" src="img/'."/".$dados['img_servico'].'">';
                                                    echo '<div class="card-body">';
                                                        echo '<p class="card-text texto">'.$dados['nome_servico'].'</p>';
                                                    echo '</div>';
                                                echo "</div>";
                                            echo "</div>";
                                            
                                        
                                        }
                                        echo "</div>";
                                
                                    }
                                    catch(PDOException $e)
                                    {

                                        echo $e->getMessage();

                                    }

        echo "</div>";
    ?>
</body>