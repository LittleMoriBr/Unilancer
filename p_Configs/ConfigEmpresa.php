<!doctype html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Documento sem título</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="styleIndex.css">
  <link rel="stylesheet" href="config.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="js/jquery.min.js">



</head>

<body style="background-color: #121212;" class="rodape">

<?php include_once("controle_sessao1.php");?>

  <script href="js/bootstrap.bundle.js"></script>
  <link rel="stylesheet" href="js/bootstrap.bundle.js">

  <!-- NAV/MENU -->

  <nav id="nave" class="navbar navbar-expand-lg roxotop">
    <!-- Container wrapper -->
    <div class="container">
      <!-- Navbar brand -->
      <a class="navbar-brand" href="#"><img id="" src="img/amare12.png" alt="MDB Logo" draggable="false" height="60" /></a>

      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left links -->
        <ul class="navbar-nav me-3">
          <li class="nav-item">
            <b><a class="nav-link black active d-flex align-items-center" aria-current="page" href="index.php"><i class="fas fa-bars pe-2"></i>Home</a></b>
          </li>
        </ul>
        <ul class="navbar-nav me-3">
          <li class="nav-item">
            <b> <a class="nav-link black active d-flex align-items-center" aria-current="page" href="../p_Quem Somos/Somos.php"><i class="fas fa-bars pe-2"></i>Sobre</a></b>
          </li>
        </ul>
        <ul class="navbar-nav me-3">
          <li class="nav-item">
            <b> <a class="nav-link black active d-flex align-items-center" aria-current="page" href=""><i class="fas fa-bars pe-2"></i>Serviços</a></b>
          </li>
        </ul>
        <ul class="navbar-nav me-3">
          <li class="nav-item">
            <b><a class="nav-link black active d-flex align-items-center" aria-current="page" href="../p_Localizacao/Localizacao.php"><i class="fas fa-bars pe-2"></i>Localização</a></b>
          </li>
        </ul>
        </li>
        </ul>


        <!-- Pesquisar Menu -->

        <form class="d-flex align-items-center w-100 form-search">
          <div class="input-group">
            <input type="search" class="input-css form-control" placeholder="Pesquisar" aria-label="Search" />
          </div>
          <a href="#!" class="text-white"><i class="fas fa-search ps-3"></i></a>
        </form>

        <!-- IMAGEM, CONFIG, DARK MODE -->


      </div>

      <div class="topnav">
        <ul class="navbar-nav">
         
        </ul>
      </div>
      <div class="topnav">
        <ul class="navbar-nav ms-0">
          <div class="icon-nave">
            <img src="img/amare12.png" height="50px" alt="">
          </div>
        </ul>
      </div>
    </div>
    </div>
  </nav>
  <br><br><br>

  <div class="container-fluid p-5">
    <div class="row">
      <div class="col-2">
  <div class="vertical-menu text-center">
  <?php
   include_once("Menu.php");
  ?>
  </div>
</div>
<div class="col-10">
<?php
                if($_GET && isset($_GET['tela']))
                {
                    if($_GET['tela'] == "usuario")
                    {
                        include_once("frm_usuario.php");
                    }   
                    
                     if($_GET['tela'] == "fornecedor")
                    {
                        include_once("frm_fornecedores.php");
                    }

                    if($_GET['tela'] == "categoria")
                    {
                        include_once("frm_categoria.php");
                    }
                    
                    if($_GET['tela'] == "produto")
                    {
                        include_once("frm_produtos.php");
                    }
                }
                else
                {
                    include_once("conteudoHome.php");
                }
                ?>
</div>
</div>
</div>


<script>
  $(document).ready(function(){
$(".menu-button").click(function(){
$(".menu-bar").toggleClass( "open" );
})
})
</script>

</body>


</html>