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

<br>
  <div class="container">
        <div class="row">
            
            <div class="col-sm-3 ">
                
                <form action="" method="post" class="card">
                
                  <a href=""><div class="filtro">Áreas de Interese</a></div>
                    <a href=""><div class="filtrinhos"><h6>Todas</h6></div></a>
                    <a href="Pesquisa_Servico.php?f=Encanador"><div class="filtrinhos"><h6>Encanador</h6></div></a>
                    <a href="Pesquisa_Servico.php?f=Fotografo"><div class="filtrinhos"><h6>Fotógrafo</h6></div></a>
                    <a href="Pesquisa_Servico.php?f=Designer"><div class="filtrinhos"><h6>Designer Gráfico</h6></div></a>
                    <a href="Pesquisa_Servico.php?f=Diarista"><div class="filtrinhos"><h6>Diarista</h6></div></a>
                    <a href="Pesquisa_Servico.php?f=Mecanico"><div class="filtrinhos"><h6>Mecânico</h6></div></a>
                    <a href="Pesquisa_Servico.php?f=Pintor"><div class="filtrinhos"><h6>Pintor</h6></div></a>
                    <hr>
                          
                          <a href=""><div class="filtro">Avaliações</a></div>
                    <a href=""><div class="filtrinhos"><h6>5 estrelas</h6></div></a>
                    <a href=""><div class="filtrinhos"><h6>4 estrelas</h6></div></a>
                    <a href=""><div class="filtrinhos"><h6>3 estrelas</h6></div></a>
                    <a href=""><div class="filtrinhos"><h6>2 estrelas</h6></div></a>
                    <a href=""><div class="filtrinhos"><h6>1 estrelas</h6></div></a>
                    <hr>
                          
                          <a href=""><div class="filtro">Localização</a></div>
                    <a href=""><div class="filtrinhos"><h6>São Paulo</h6></div></a>
                    <a href=""><div class="filtrinhos"><h6>Bahia</h6></div></a>
                    <a href=""><div class="filtrinhos"><h6>Minas Gerais</h6></div></a>
                    <a href=""><div class="filtrinhos"><h6>Rio de Janeiro</h6></div></a><br>
                </form>
            </div>

          <div class="col-sm-9">
            <div class="row">
              
                <?php

                  include_once("conexao.php");

                    try
                    {

                      $sql = $conn->query("select * from prestador");

                      foreach($sql as $dados)
                          {   
                                echo '<div class="col-sm-3 m-3  ">';     
                                echo '<img class=" tamanho " src="img/'.$dados['id_prestador']."/".$dados['img_prestador'].'">';  
                            echo '</div>';
                            echo '<div class="col-sm-8 m-3 ">';
                              echo '<div class="row">';
                                  
                                    echo '<p">'.$dados['nome_prestador'].'</p>';
                                      echo '<div class="col-sm-4">';
                                        echo '<button type="submit" class="btn btn cor" formaction="">Contrate</button>';
                                
                                  echo "</div>";
                                  echo '<br>';
                                  echo '<div class="row">';
                                    echo '<p">'.$dados['atuacao_prestador'].'</p>';
                                  echo "</div>";
                                  echo '<br>';
                                  echo '<div class="row">';
                                    echo '<p">'.$dados['descricao_prestador'].'</p>';
                                  echo "</div>";
                              echo "</div>";
                            echo "</div>";
                            
                      }
                    }
                    catch(PDOException $e)
                    {

                      echo $e->getMessage();

                    }

                ?>
              </div>
          </div>
		  </div> 
		</div>
  </div>
		
		


  <script src="js/bootstrap.bundle.js"></script>
</body>
</html>

