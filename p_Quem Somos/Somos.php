<!doctype html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documento sem título</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="styleSomos.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="js/jquery.min.js">
  <link rel="stylesheet" href="../p_Home/styleIndex.css">




</head>

<body class="rodape">

  <script href="js/bootstrap.bundle.js"></script>
  <link rel="stylesheet" href="js/bootstrap.bundle.js">


  <!-- NAV/MENU -->

  <div class="backMenu">
  <section class="top-nav">
        <div>
          <img class="imgUni" src="img/amare12.png" alt="">
        </div>
        <input id="menu-toggle" type="checkbox" />
        <label class='menu-button-container' for="menu-toggle">
        <div class='menu-button'></div>
      </label>
        <ul class="menu">
          <li><a class="link-re" href="../p_Home/index.php">Home</a></li>
          <li><a class="link-re" href="Somos.php">Sobre</a></li>
          <li><a class="link-re" href="../p_Servicos/index.html">Serviços</a></li>
          <li><a class="link-re" href="../p_Localizacao/Localizacao.php">Localização</a></li>
        </ul>
      </section>
      </div>

  <!-- Navbar FINAL -->

  <!-- MENSAGEM DE ALERTA -->

  <div class="container-fluid p-0 backInicio">
    <div class="container p-5">
      <div class="row">
        <div class="col-6">
          <div class="inicio">
            <img src="img/group.png" alt="">
          </div>
        </div>
        <div class="col-6">
          <div class="inicio v-100">
            <h3 class="teste">Quem somos? Saiba mais sobre a Unilancer!</h3>
            <p class="teste2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Perspiciatis quibusdam quod expedita similique perferendis
              officiis quos eligendi, numquam dolor sequi
              reprehenderit consequuntur impedit autem ipsa cumque
              accusamus deleniti, beatae tenetur. <br>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Perspiciatis quibusdam quod expedita similique perferendis
            </p>
          </div>
        </div>
      </div>
    </div>

<div class="container-fluid bg1">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="textContainer">
            <h2 class="espacoTitulo teste1">Nosso Objetivo</h2>
            <p class="teste2">
            Nosso objetivo é ser a maior plataforma de freelancer do mundo, tendo como maior objetivo revolucionar o mercado mundial de prestação de serviços, garantindo um maior acesso a todos com nossa praticidade.
            </p>
          </div>
        </div>
        <div class="col-6">
          <div class="Responsive">
          <div class="img-container">
            <img src="img/j2.png" class="" alt="">
          </div>
          </div>
        </div>



      <div class="container5">
        <h3 class="titFunda">Fundadores da Unilancer</h3>
        <div class="row">
          <div class="col-sm-4">
            <div class="card5 card1">
            </div>
            <h2 class="titFunda2">Victor Brandão</h2>
          </div>
          <div class="col-sm-4">
            <div class="card5 card2">
            </div>
            <h2 class="titFunda2">Vinicius Inocêncio</h2>
          </div>
          <div class="col-sm-4">
            <div class="card5 card3">
            </div>
            <h2 class="titFunda2">Lucas Brito</h2>
          </div>
        </div>
      </div>
      </div>


    

    <div class="text-center">
      <div class="row">
        <div class="col-12">
          <button class="accordion">Posso achar profissionais de qualquer área?</button>
          <div class="panel">
            <p class="pss text-center">Sim! Aqui na Unilancer você tem acesso a todos tipos de profissionais</p>
          </div>

          <div class="spa"></div>

          <button class="accordion">Posso contratar empresas ao invés de trabalhadores autônomos? 
</button>
          <div class="panel">
            <p class="pss">Sim, Na Unilancer você pode contratar ambos conforme sua preferência.</p>
          </div>

          <div class="spa"></div>


          <button class="accordion">A Unilancer tem responsabilidade sobre o serviço prestado?</button>
          <div class="panel">
            <p class="pss">Não, a Unilancer é a apenas um mediador entre cliente e prestador de serviço, sendo assim isento de qualquer responsabilidade que envolva o serviço de terceiros..</p>
          </div>

          <div class="spa"></div>


          <button class="accordion">Posso contratar e acompanhar diversos serviços ao mesmo tempo?</button>
          <div class="panel">
            <p class="pss">Sim, um serviço independe do outro podendo assim contratar e acompanhar diversos serviços ao mesmo tempo.</p>
          </div>

          <div class="spa"></div>
        </div>
      </div>
  </div>

  </div>



  <!-- js (falha no AJAX) <button>Click to fade in boxes</button><br><br>

<div id="div1" style="width:80px;height:80px;display:none;background-color:red;"></div><br>
<div id="div2" style="width:80px;height:80px;display:none;background-color:green;"></div><br>
<div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"></div>

-->


</body>


<!-- JS -->

<script src="section.js">
</script>


<script>
  $(document).ready(function() {
    $("button").click(function() {
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