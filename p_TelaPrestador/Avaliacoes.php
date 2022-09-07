<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="TelaPrestador.css" />
    <title>Document</title>
  </head>

  <body>
    <div class="container mt-3 mb-3">
      <form id="valval" action="" onsubmit="return false;">
        <div class="row border borda">
          <div class="col-sm-1 imagemm">
            <img class="cliente imgform" src="img/ratatouille.jpg" alt="" />
          </div>

          <div class="col-6 mt-4">
            <input
              id="inputtexto"
              class="inputtexto"
              placeholder="Insira seu Titulo"
              type="text"
            />
          </div>

          <div class="col-4 mt-2 estrelas">
            <fieldset
              id="brilhoso"
              onclick="return"
              class="rate mt-2 brancodaestrela"
            >
              <input
                type="radio"
                id="rating10"
                name="rating"
                value="10"
              /><label for="rating10" title="5 stars"></label>
              <input type="radio" id="rating9" name="rating" value="9" /><label
                class="half"
                for="rating9"
                title="4 1/2 stars"
              ></label>
              <input type="radio" id="rating8" name="rating" value="8" /><label
                for="rating8"
                title="4 stars"
              ></label>
              <input type="radio" id="rating7" name="rating" value="7" /><label
                class="half"
                for="rating7"
                title="3 1/2 stars"
              ></label>
              <input type="radio" id="rating6" name="rating" value="6" /><label
                for="rating6"
                title="3 stars"
              ></label>
              <input type="radio" id="rating5" name="rating" value="5" /><label
                class="half"
                for="rating5"
                title="2 1/2 stars"
              ></label>
              <input type="radio" id="rating4" name="rating" value="4" /><label
                for="rating4"
                title="2 stars"
              ></label>
              <input type="radio" id="rating3" name="rating" value="3" /><label
                class="half"
                for="rating3"
                title="1 1/2 stars"
              ></label>
              <input type="radio" id="rating2" name="rating" value="2" /><label
                for="rating2"
                title="1 star"
              ></label>
              <input type="radio" id="rating1" name="rating" value="1" /><label
                class="half"
                for="rating1"
                title="1/2 star"
              ></label>
            </fieldset>
          </div>
          <div class="col-sm-1 mt-3">
            <button
              id="btoCadastrarJoaquim"
              class="btn btn-roxo"
              onclick="teste();"
            >
              Enviar
            </button>
          </div>

          <div class="row">
            <div class="col-1 imagemm"></div>

            <div class="col-sm-10 textao">
              <textarea
                id="text_area"
                placeholder="Digite sua avaliação"
                class="text_area"
                name=""
                id=""
                cols="auto"
                rows="3"
              ></textarea>
            </div>

            <div class="col-1 imagemm"></div>
          </div>
        </div>
      </form>
    </div>

    <!-- Começo do PHP --->

    <?php 

    include_once("conexao.php");
    include_once("controlesessao.php");

    $id_cliente = $usuarioLogadoID;


          try {
     $sql = $conn->query("SELECT avaliacoes.*, cliente.img_cliente FROM avaliacoes
          inner JOIN cliente on avaliacoes.id_cliente = cliente.id_cliente
          WHERE id_prestador = 27" );

           foreach ($sql as $dados) {
 
            $validacion = $dados['estrelas_avaliacoes'];
            $validacion10 = "";
            $validacion9 = "";
            $validacion8 = "";
            $validacion7 = "";
            $validacion6 = "";
            $validacion5 = "";
            $validacion4 = "";
            $validacion3 = "";
            $validacion2 = "";
            $validacion1 = "";

            if($validacion == 1){
              $validacion1 = "checked";
            }

            if($validacion == 2){
              $validacion2 = "checked";
            }

            if($validacion == 3){
              $validacion3 = "checked";
            }

            if($validacion == 4){
              $validacion4 = "checked";
            }

            if($validacion == 5){
              $validacion5 = "checked";
            }

            if($validacion == 6){
              $validacion6 = "checked";
            }

            if($validacion == 7){
              $validacion7 = "checked";
            }

            if($validacion == 8){
              $validacion8 = "checked";
            }

            if($validacion == 9){
              $validacion9 = "checked";
            }

            if($validacion == 10){
              $validacion10 = "checked";
            }
           
           
              echo     ' <div class="container">';
              echo       ' <div class="row border borda relativisandoavida mt-4 bordaa">';
              echo         ' <div class="col-sm-1">';
              echo           ' <img class="cliente imgResposta" src="'. $dados['img_cliente'] .'" alt="" />';
              echo         ' </div>';

              echo         ' <div class="col-sm-auto">';
              echo          '  <h3 id="ResposTitulo" class="mt-4 titulo ResposTitulo ">'. $dados['titulo_avaliacoes'] . '</h3>';
              echo         ' </div>';

              echo          '<div class="col-sm ">'; 
              echo                '<fieldset id="ResposEstrela" onclick="return" value=""  class="rate2 mt-3 brancodaestrela ResposEstrela ">';
                                        
              echo               '<input '. $validacion10.' onclick="return false;" type="radio" id="rating10V2" name="rating'.$dados['id_avaliacoes'].'" value="10"/><label for="rating10V2" title="5 stars"></label>';
                                          
              echo               '<input '. $validacion9 .' onclick="return false;" type="radio" id="rating9V2" name="rating'.$dados['id_avaliacoes'].'" /><label class="half" for="rating9V2" title="4 1/2 stars"></label>';
                                              
              echo              ' <input '. $validacion8 .' onclick="return false;" type="radio" id="rating8V2"  name="rating'.$dados['id_avaliacoes'].'" /><label for="rating8V2" title="4 stars"></label>';
                                
              echo              ' <input '. $validacion7 .' onclick="return false;" type="radio" id="rating7V2" name="rating'.$dados['id_avaliacoes'].'"  value="7"  /><label class="half" for="rating7V2" title="3 1/2 stars"></label>';
                          
              echo              ' <input '. $validacion6 .'  onclick="return false;" type="radio"  id="rating6V2" name="rating'.$dados['id_avaliacoes'].'"  value="6"  /><label for="rating6V2" title="3 stars"></label>';
                                          
              echo              ' <input '. $validacion5 .' onclick="return false;" type="radio"  id="rating5V2"  name="rating'.$dados['id_avaliacoes'].'" value="5" /><label class="half" for="rating5V2" title="2 1/2 stars"></label>';
                              
              echo             '  <input '. $validacion4 .' onclick="return false;"  type="radio" id="rating4V2" name="rating'.$dados['id_avaliacoes'].'"  value="4" /><label for="rating4V2" title="2 stars"></label>';
                      
              echo             '<input '. $validacion3 .' onclick="return false;" type="radio" id="rating3V2" name="rating'.$dados['id_avaliacoes'].'" value="3" /><label class="half" for="rating3V2" title="1 1/2 stars"></label>';
                   
              echo             '<input '. $validacion2 .' onclick="return false;" type="radio" id="rating2V2" name="rating'.$dados['id_avaliacoes'].'" value="2" /><label for="rating2V2" title="1 star"></label>';
                           
              echo             '<input '. $validacion1 .' onclick="return false;" type="radio"  id="rating1V2"  name="rating'.$dados['id_avaliacoes'].'" value="1" /><label class="half" for="rating1V2" title="1/2 star"></label>';
                 
              echo          ' </fieldset>';
              echo         '</div>';

              echo '<div class="row">';

              echo         '<div class="col-sm-1"></div>';

              echo         '<div class="col-sm-10">';
              echo          ' <p id="Respostexto" class="texto Respostexto"> '. $dados['descricao_avaliacoes'] .'  </p>';
                            
                           
               echo         '</div>';
              echo         '</div>';
              echo       '</div>';
              echo    ' </div>';

              switch($validacion4){
                case '4':
                  $validacion4 = "checked";
                  echo "checked";
                  break;
              }

           }
}catch (PDOException $e) {

                    echo $e->getMessage();
                }
    ?>

    <div style="color: white" id="Resposta2" class="Resposta2"></div>
    <!-- <script src="jquery-3.6.0.js"></script> -->
    <!-- <script src="Teste.js"></script> -->
  </body>
</html>
