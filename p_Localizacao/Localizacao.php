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
          <li><a class="link-re" href="../p_Quem Somos/Somos.php">Sobre</a></li>
          <li><a class="link-re" href="../p_Servicos/index.html">Serviços</a></li>
          <li><a class="link-re" href="Localizacao.php">Localização</a></li>
        </ul>
      </section>
      </div>

  <!-- Navbar FINAL -->

  <!-- MENSAGEM DE ALERTA -->

  <div class="container-fluid p-0 backInicio">
    <div class="container p-5">
      <div class="row">
      <div class="col-6">
          <div class="inicio v-100">
            <h3 class="teste">Onde estamos localizados?</h3>
            <p class="teste2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Perspiciatis quibusdam quod expedita similique perferendis
              officiis quos eligendi, numquam dolor sequi
              reprehenderit consequuntur impedit autem ipsa cumque
              accusamus deleniti, beatae tenetur. <br>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Perspiciatis quibusdam quod expedita similique perferendis
            </p>
          </div>
        </div>
        <div class="col-6">
          <div class="inicio">
            <img src="img/localiza2.png" alt="">
          </div>
        </div>
      </div>
    </div>
    </div>


    <iframe class="filtroMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.7740983211224!2d-46.52841448511535!3d-23.46861168472904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef559cf4ee709%3A0x1717e03b607d1685!2sSenac%20Guarulhos%20-%20Faccini!5e0!3m2!1spt-BR!2sbr!4v1660246962584!5m2!1spt-BR!2sbr" 
        width="1920" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  
    



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