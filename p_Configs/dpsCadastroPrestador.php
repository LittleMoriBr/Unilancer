<!doctype html>
<html>

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documento sem título</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="js/jquery.min.js">

  



</head>

<body class="rodape">
  <?php
  include_once("controle_sessao.php");
  ?>

  <script href="js/bootstrap.bundle.js"></script>
  <link rel="stylesheet" href="js/bootstrap.bundle.js">


  <!-- NAV/MENU -->

  <nav class="navbar navbar-expand-lg roxotop">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="#"><img id="" src="img/amare1.png" alt="MDB Logo" draggable="false" height="60" /></a>

      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left links -->
        <ul class="navbar-nav me-3">
          <li class="nav-item">
            <b><a class="nav-link black active d-flex align-items-center" aria-current="page" href="#"><i class="fas fa-bars pe-2"></i>Menu</a></b>
          </li>
        </ul>
        <ul class="navbar-nav me-3">
          <li class="nav-item">
            <b> <a class="nav-link black active d-flex align-items-center" aria-current="page" href="#"><i class="fas fa-bars pe-4"></i>Sobre</a></b>
          </li>
        </ul>
        <ul class="navbar-nav me-3">
          <li class="nav-item">
            <b> <a class="nav-link black active d-flex align-items-center" aria-current="page" href="#"><i class="fas fa-bars pe-2"></i>Serviços</a></b>
          </li>
        </ul>
        <ul class="navbar-nav me-3">
          <li class="nav-item">
            <b><a class="nav-link black active d-flex align-items-center" aria-current="page" href="#"><i class="fas fa-bars pe-2"></i>Localização</a></b>
          </li>
        </ul>
        </li>
        </ul>


        <!-- Pesquisar Menu -->

        <!-- <form class="d-flex align-items-center w-100 form-search">
          <div class="input-group">

            <ul class="dropdown-menu dropdown-menu-dark fa-ul">
              <li>
                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-search"></i></span>All</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-film"></i></span>Titles</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-tv"></i></span>TV
                  Episodes</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-user-friends"></i></span>Celebs</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-building"></i></span>Companies</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-key"></i></span>Keywords</a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>
              <li>
                <a class="dropdown-item" href="#"><span class="fa-li pe-2"><i class="fas fa-search-plus"></i></span>Advanced
                  search<i class="fas fa-chevron-right ps-2"></i></a>
              </li>
            </ul>
            <input type="search" class="form-control" placeholder="Pesquisar" aria-label="Search" />
          </div>
          <a href="#!" class="text-white"><i class="fas fa-search ps-3"></i></a>
        </form> -->

          <!-- IMAGEM, CONFIG, DARK MODE -->

        <div class="topnav">
          <ul class="navbar-nav ms-3">
            <li class="nave">
        <label class="switch">
          <input onclick="myFunction1()" type="checkbox">
          <span class="slider"></span>
        </label>
        </li>
          </ul>
        </div>

        

        <div class="topnav">
          <ul class="navbar-nav ms-3">
            <li class="nave1">
              <b><a class="nav-link black d-flex align-items-center">
                  <p class="tela"><img src="imagem3/<?php echo $usuarioLogadoID . '/' . $usuarioLogadoImg ?>" alt="" text class="tela"></p>

                </a></b>
            </li>
          </ul>
        </div>

        <div class="topnav">
          <ul class="navbar-nav ms-3">
            <li class="nav2">
              <a href="/buttons/61" class="py-3 px-5 bg-indigo-500 text-white text-sm font-semibold rounded-md shadow-lg shadow-indigo-500/50 focus:outline-none">
                Configurações
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <!-- Navbar FINAL -->

  <!-- MENSAGEM DE ALERTA -->

  <center>
    <div class="col-sm-12">
      <div class="img-fluid" id=""><img class="img-fluid" src="img/a4.png" alt="">
        <div class="alert info">
          <span class="closebtn">&times;</span>
          <strong>ALERTA!</strong> O site está sem javascript no momento, volte mais tarde. :)
        </div>
      </div>
    </div>
  </center>


  <br><br>

<!-- SOBRE EMPRESA -->

  <div class="container">
    <div class="w3-row-padding roxo3 w3-padding-64 w3-container">
      <div class="w3-content">
        <div class="w3-third w3-center">
          <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"><img class="imj" src="img/vcss.png" alt=""></i>
        </div>

        <div class="w3-twothird">
          <br><br>
          <br>
          <h1 class="sobre3">Sobre nós</h1>
          <p class="so">Somos uma empresa focada em trazer a melhor experiencia no mercado de freelancer,
            tanto para o usuário quanto para nossos colaborares, utilizamos diversas ferramentas
            para criar um ambiente fácil e intuitivo para que todos possam utilizar de nossos trabalhos.</p>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  

    <!-- js (falha no AJAX) <button>Click to fade in boxes</button><br><br>

<div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>
<div id="div2" style="width:80px;height:80px;display:none;background-color:green;"></div><br>
<div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"></div>

-->


<!-- POSTS TRABALHOS -->

  <div class="container amarelinha">
    <div class="row">



      <div class="col-sm-3">
        <h4 align="center">Professores</h4>
        <div class="card-body  zoom">

          <img class="area rounded" src="img/001.png" alt="">

        </div>
      </div>

      <div class="col-sm-3">
        <h4 align="center">Jornalistas</h4>
        <div class="card-body zoom">

          <img class="area rounded" src="img/002.png" alt="">

        </div>
      </div>

      <div class="col-sm-3">
        <h4 align="center">Fotografos</h4>
        <div class="card-body zoom">

          <img class="area rounded" src="img/003.png" alt="">

        </div>
      </div>

      <div class="col-sm-3">
        <h4 align="center">Artistas</h4>
        <div class="card-body zoom">

          <img class="area rounded" src="img/004.png" alt="">

        </div>
      </div>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>


      <!-- O QUE FAZEMOS? -->

      <div class="container">
        <div class="w3-row-padding roxo3 w3-padding-64 w3-container">
          <div class="w3-content">
            <div class="w3-twothird">
              <br><br>
              <br>
              <h1 class="sobre3">O que fazemos?</h1>
              <p class="so">Disponibilizamos uma plataforma para unir o consumidor com o prestador de serviço,
                sempre prezamos para a maior segurança do cliente e uma maior disponibilidade de ferramentas para nossos colaboradores.</p>

            </div>
            <div class="w3-third w3-center">
              <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"><img class="imj" src="img/m1.png" alt=""></i>
            </div>
          </div>
        </div>
      </div>


      <!-- MENSAGEM DE AJUDA -->


      <div class="callout">
        <div class="callout-header">Precisa de ajuda?</div>
        <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
        <div class="callout-container">
          <p>Entre em contato com nossa central de atendimento </p><br><br>

          <button onclick="myFunction()" class="cssbuttons-io-button">Entrar em contato
            <div class="icon">
              <svg height="24" width="24" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0z" fill="none"></path>
                <path d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z" fill="currentColor"></path>
              </svg>
            </div>
          </button>

          <div id="snackbar">Trollei você com sucesso. Parabéns!!!</div>

        </div>
      </div>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>



        <!-- TRABALHOS 2 -->

      <div class="container amarelinha">
        <div class="row">



          <div class="col-sm-3">
            <h4 align="center">Entregador</h4>
            <div class="card-body  zoom">

              <img class="area rounded" src="img/15.png" alt="">

            </div>
          </div>

          <div class="col-sm-3">
            <h4 align="center">Confeiteiro</h4>
            <div class="card-body zoom">

              <img class="area rounded" src="img/19.png" alt="">

            </div>
          </div>

          <div class="col-sm-3">
            <h4 align="center">Dentista</h4>
            <div class="card-body zoom">

              <img class="area rounded" src="img/16.png" alt="">

            </div>
          </div>

          <div class="col-sm-3">
            <h4 align="center">Técnico</h4>
            <div class="card-body zoom">

              <img class="area rounded" src="img/18.png" alt="">

            </div>
          </div>
        </div>
      </div>
    </div>


    <br><br><br>

    <!-- OFERTAS -->

    <div class="w3-row-padding">

      <div class="w3-third w3-margin-bottom">
        <ul class="w3-ul w3-border w3-center w3-hover-shadow">
          <li class="color w3-xlarge w3-padding-32">Comum</li>
          <li class="w3-padding-16"><b>1h</b> por dia</li>
          <li class="w3-padding-16"><b>20h</b> no mês</li>
          <li class="w3-padding-16"><b>1</b> projeto</li>
          <li class="w3-padding-16"><b>24h</b> de atendimento</li>
          <li class="w3-padding-16">
            <h2 class="w3-wide">$50</h2>
            <span class="w3-opacity">por mês</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-purple w3-padding-large">Saiba mais</button>
          </li>
        </ul>
      </div>

      <div class="w3-third w3-margin-bottom">

        <ul class="w3-ul w3-border w3-center w3-hover-shadow">
          <li class="amarelo1 w3-xlarge w3-padding-32">VIP</li>
          <li class="w3-padding-16"><b>10h</b> por dia</li>
          <li class="w3-padding-16"><b>200h</b> no mês</li>
          <li class="w3-padding-16"><b>3</b> projetos</li>
          <li class="w3-padding-16"><b>24h</b> de atendimento</li>
          <li class="w3-padding-16">
            <h2 class="w3-wide">$500</h2>
            <span class="w3-opacity">por mês</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-purple w3-padding-large">Saiba mais </button>
          </li>
        </ul>
      </div>

      <div class="w3-third w3-margin-bottom ">
        <ul class="w3-ul w3-border w3-center w3-hover-shadow">
          <li class="color w3-xlarge w3-padding-32">Premium</li>
          <li class="w3-padding-16"><b>5h</b> por dia</li>
          <li class="w3-padding-16"><b>100h</b> no mês</li>
          <li class="w3-padding-16"><b>1</b> projeto</li>
          <li class="w3-padding-16"><b>24h</b> de atendimento</li>
          <li class="w3-padding-16">
            <h2 class="w3-wide">$250</h2>
            <span class="w3-opacity">por mês</span>
          </li>
          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-purple w3-padding-large">Saiba mais</button>
          </li>
        </ul>
      </div>

    </div>




    <!-- RODAPÉ-->



    <div class="bran roxo">
      <div class="container-fluid   roxo">
        <div class="row  pt-5 roxo">


          <div class="container-fluid  cinza roxo">

            <div class="cinza">

              <div class="container">
                <div class="row">

                  <div class="col-lg-4 roxo mt-5 centro">

                    <p class="centro"><img src="https://img.icons8.com/ios/48/69179e/waypoint-map.png" /></p>

                    <hr class="roxo">

                    <div class="mt-4 roxo">
                      <h5>Sobre nós</h5>
                      <h5>Contatos</h5>
                      <h5>Home</h5>
                    </div>

                  </div>






                  <div class="col-lg-4 roxo mt-5 ">



                    <p class="centro"><img src="https://img.icons8.com/ios-glyphs/48/69179e/search-contacts.png" /></p>



                    <hr class="roxo">




                    <div class="centro">
                      <span class="centro">
                        <img class="m-2" src="https://img.icons8.com/fluency-systems-regular/38/69179e/phone.png" />
                      </span>



                      <span class="centro">
                        <img class="m-2" src="https://img.icons8.com/fluency-systems-regular/38/69179e/gmail.png" />
                      </span>



                      <span class="centro">
                        <img class="m-2" src="https://img.icons8.com/material-outlined/38/69179e/instagram-new--v1.png" />
                      </span>



                    </div>






                  </div>



                  <div class="col-lg-4 mt-5 roxo centro">



                    <p><img src="https://img.icons8.com/external-yogi-aprelliyanto-basic-outline-yogi-aprelliyanto/48/69179e/external-personal-card-travel-yogi-aprelliyanto-basic-outline-yogi-aprelliyanto.png" /></p>



                    <hr class="roxo">



                    <h5 class="roxo">Trabalhe conosco</h5>
                    <h5 class="roxo">Entenda como ganhar dinheiro</h5>
                    <h5 class="roxo">Primeiros passos</h5>
                  </div>




                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>


<!-- JS -->

<script>
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").fadeIn();
    $("#div2").fadeIn("slow");
    $("#div3").fadeIn(3000);
  });
});
</script>

<script>
  var close = document.getElementsByClassName("closebtn");
  var i;

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.opacity = "0";
      setTimeout(function() {
        div.style.display = "none";
      }, 600);
    }
  }
</script>

<script>
  function myFunction() {
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function() {
      x.className = x.className.replace("show", "");
    }, 3000);
  }
</script>

<script>
  function myFunction1() {
    var element = document.body;
    element.classList.toggle("dark-mode");
  }
</script>

</html>