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


  <div class="col-sm-9">
    <div class="row">

      <?php



      include_once("conexao.php");

      try {

        $data = json_decode(file_get_contents('php://input'), true);


        extract($data);

        $sql = $conn->query("select * from prestador");


        
        foreach ($sql as $dados) {
          echo '<div class="border">';
          echo '<div class="col-sm-3 m-3">';
          echo '<img class=" tamanho " src="img/' . $dados['id_prestador'] . "/" . $dados['img_prestador'] . '">';
          echo '</div>';
          echo '<div class="col-sm-8 m-3 ">';
          echo '<div class="row">';

          echo '<p">' . $dados['nome_prestador'] . '</p>';
          echo '<div class="col-sm-4">';
          echo '<button type="submit" class="btn btn cor" formaction="">Contrate</button>';

          echo "</div>";
          echo '<br>';
          echo '<div class="row">';
          echo '<p">' . $dados['atuacao_prestador'] . '</p>';
          echo "</div>";
          echo '<br>';
          echo '<div class="row">';
          echo '<p">' . $dados['descricao_prestador'] . '</p>';
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";;
        }
      } catch (PDOException $e) {

        echo $e->getMessage();
      }

      ?>
    </div>
  </div>
  </div>
  </div>
  </div>

</body>

</html>