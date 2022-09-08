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


    

   

                <?php include_once("conexao.php");

                    if($_POST)
                    {
                        $codigo = $_POST['txtCodigo'];
                        $pic = "";


                        if($_FILES["pic"]["tmp_name"]==null)
                        {
                            echo "<h2>Erro ao inserir, é necessário inserir uma foto.</h2>";
                        }
                        else
                        {
                        
                            if(isset($_FILES['pic']))
                            {
                                $arquivo = $_FILES['pic'];

                            }else{
                                echo "Imagem deve ser informada";
                                return;
                            }

                            $sql = $conn->prepare("insert into portifolioprestador
                            (

                                id_parceiro,
                                img_portifolioprestador
                               
                            )
                            values
                            (
                                :id_parceiro,
                                :img_portifolioprestador
                                
                                
                            )");

                            $sql->execute(array(

                                ':id_parceiro'=>$codigo,
                                ':img_portifolioprestador'=>$arquivo["name"]
                            ));

                            //echo $sql->rowCount();
                            if($sql->rowCount() == 1)
                            {
                                echo "<p>Dados cadastrados com sucesso</p>";
                                echo "<p>ID Gerado - ".$conn->lastInsertId()."</p>";

                                //estrutura de envio da imagem

                                $pasta_dir = 'img/'.$conn->lastInsertId().'/';

                                if(!file_exists($pasta_dir))
                                {
                                    mkdir($pasta_dir);
                                }

                                $img = $pasta_dir . $arquivo["name"];

                                move_uploaded_file($arquivo["tmp_name"],$img);

                                //fim da estrutura

                            }
                        }
                    }
                    else
                    {
                        header("Location:CadastrarImagem.php");
                    }
                    ?>
                    <a href="CadastrarImagem.php" class="btn btn-dark">voltar</a>
                </body>

                                }

                            ?>

                        </div>
                    </div>

                    


                </form>


    
</body>
</html>