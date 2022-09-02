<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="TelaPrestador.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.2.0/css/fork-awesome.min.css"
        integrity="sha256-XoaMnoYC5TH6/+ihMEnospgm0J1PM/nioxbOUdnM8HY=" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <div class="container mt-3 mb-3">
        <form action="">
            <div class="row border borda">

                <div class="col-sm-1 imagemm">
                    <img class="cliente" height="100px" width="100px" src="img/ratatouille.jpg" alt="">
                </div>

                <div class="col-6 mt-4 ">
                    <input id="inputtexto" class="inputtexto" placeholder="Insira seu Titulo" type="text">
                </div>

                <div class="col-4 mt-2 estrelas">

                    <fieldset class="rate mt-2 brancodaestrela">
                        <input type="radio" id="rating10" name="rating" value="10" /><label for="rating10"
                            title="5 stars"></label>
                        <input type="radio" id="rating9" name="rating" value="9" /><label class="half" for="rating9"
                            title="4 1/2 stars"></label>
                        <input type="radio" id="rating8" name="rating" value="8" /><label for="rating8"
                            title="4 stars"></label>
                        <input type="radio" id="rating7" name="rating" value="7" /><label class="half" for="rating7"
                            title="3 1/2 stars"></label>
                        <input type="radio" id="rating6" name="rating" value="6" /><label for="rating6"
                            title="3 stars"></label>
                        <input type="radio" id="rating5" name="rating" value="5" /><label class="half" for="rating5"
                            title="2 1/2 stars"></label>
                        <input type="radio" id="rating4" name="rating" value="4" /><label for="rating4"
                            title="2 stars"></label>
                        <input type="radio" id="rating3" name="rating" value="3" /><label class="half" for="rating3"
                            title="1 1/2 stars"></label>
                        <input type="radio" id="rating2" name="rating" value="2" /><label for="rating2"
                            title="1 star"></label>
                        <input type="radio" id="rating1" name="rating" value="1" /><label class="half" for="rating1"
                            title="1/2 star"></label>
                    </fieldset>
                </div>
                <div class="col-sm-1 mt-3">
                    <button class="btn btn-roxo">Enviar</button>
                </div>

                <div class="row">

                    <div class="col-1 imagemm">

                    </div>

                    <div class="col-sm-10 textao">
                        <textarea id="text_area" placeholder="Digite sua avaliação" class="text_area" name="" id=""
                            cols="auto" rows="3"></textarea>
                    </div>

                    <div class="col-1 imagemm">

                    </div>


                </div>
            </div>
        </form>
    </div>






    <div class="container">
        <div class="row border borda ">

            <div class="col-sm-1">
                <img class="cliente" height="100px" width="100px" src="img/ratatouille.jpg" alt="">
            </div>

            <div class="col-sm-1">
                <h3 class="mt-4 titulo">Titulo</h3>
            </div>

            <div class="col-sm-10  mt-4">
                <p align="left">
                    <img width="25px" height="25px" src="img/icons8-estrela-50 (2).png" alt="">
                    <img width="25px" height="25px" src="img/icons8-estrela-50 (2).png" alt="">
                    <img width="25px" height="25px" src="img/icons8-estrela-50 (2).png" alt="">
                    <img width="25px" height="25px" src="img/icons8-estrela-50 (2).png" alt="">
                    <img width="25px" height="25px" src="img/icons8-estrela-50 (2).png" alt="">
                </p>

            </div>

            <div class="col-sm-1"></div>

            <div class="col-sm-11">
                <p class="texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus rerum cumque
                    error, accusantium eum, sed reprehenderit pariatur amet quas necessitatibus magni debitis
                    consequuntur, ratione numquam cupiditate harum velit praesentium aspernatur?</p>
            </div>
        </div>
    </div>


</body>

</html>