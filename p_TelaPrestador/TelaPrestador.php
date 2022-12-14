<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="TelaPrestador.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css"
      integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY="
      crossorigin="anonymous"
    />

    <title>Document</title>
  </head>

  <?php   ?>

  <body style="background-color: #121212">
    <div class="container">
      <div class="row">
        <div style="height: 250px" class="col-sm-12 bg-dark banner_prestador">

          <?php 
          include_once("conexao.php");
          try{
            $sql = $conn->query("select * from prestador where id_prestador = 27");
              foreach ($sql as $dados) {
                echo  '<img class="redondo" height="220px" width="220px" src="'.$dados['img_prestador'].'" alt="" />';
              }
          }catch (PDOException $e) {

                            echo $e->getMessage();
                        }
          ?>
          <img
            class="Icone"
            src="https://img.icons8.com/fluency-systems-regular/38/ffffff/instagram-new--v1.png"
          />

          <img
            class="Icone2"
            src="https://img.icons8.com/fluency-systems-filled/38/ffffff/facebook-new.png"
          />

          <img
            class="Icone3"
            src="https://img.icons8.com/ios/38/ffffff/whatsapp--v1.png"
          />

          <img
            class="Icone4"
            src="https://img.icons8.com/windows/48/ffffff/circled-envelope.png"
          />
        </div>
        <div style="height: 40px" class="col-6 bg-warning baixo2"></div>
        <div style="height: 40px" class="col-6 bg-warning baixo">
          <a id="Info" class="butaos" href="TelaPrestador.html?tela=Informacoes"
            >Informa????es</a
          >
          <a
            id="Portifolio"
            class="butaos1"
            href="TelaPrestador.html?tela=Portifolio"
            >Portifolio</a
          >
          <a
            id="Avaliacoes"
            onclick="Aval(); return false;"
            class="butaos2"
            href="TelaPrestador.html?tela=Avaliacoes"
          >
            Avalia????es
          </a>
        </div>
        <br /><br />
        <br />
        <br /><br />

        <script src="jquery-3.6.0.js"></script>
        <script src="Telas.js"></script>

        <script>
          function teste() {
            console.log("Cliquei no bot??o btoCadastrar");
            const xhr = new XMLHttpRequest();

            var formData = {
              titulo_avaliacoes: $("#inputtexto").val(),
              descricao_avaliacoes: $("#text_area").val(),
              estrelas_avaliacoes: document.querySelector(
                'input[name="rating"]:checked'
              ).value,
            };

            formData = JSON.stringify(formData);
            xhr.onload = function () {
              const Resposta2 = document.getElementById("Resposta2");
              Resposta2.innerHTML = this.responseText;
              $("#Avaliacoes").trigger("click");
            };

            xhr.open("POST", "CadastroAval.php", formData);
            xhr.setRequestHeader(
              "Content-Type",
              "application/x-www-form-urlencoded"
            );
            xhr.send(formData);

            xhr.onreadystatechange = function () {
              console.log(formData);
            };
          }

          function Aval() {
            console.log("tuplac");

            var tuplac = "Avaliacoes";

            console.log(tuplac);

            const xhr = new XMLHttpRequest();

            xhr.onload = function () {
              const Resposta = document.getElementById("Resposta");
              Resposta.innerHTML = this.responseText;
            };

            xhr.open("get", "telas.php?tela=" + tuplac);
            xhr.setRequestHeader(
              "Content-Type",
              "application/x-www-form-urlencoded"
            );
            xhr.send();

            return false;
          }
        </script>

        <div style="color: white" id="Resposta" class="Resposta"></div>
      </div>
    </div>
  </body>
</html>
