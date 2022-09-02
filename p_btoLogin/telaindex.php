<!doctype html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento sem título</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="js/jquery.min.js">
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="style1.css">


</head>

<body class="rodape">

    <script href="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="js/bootstrap.bundle.js">


    <!-- NAV/MENU -->

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
            <li><a class="link-re" href="../p_Localizacao/Localizacao.php">Localização</a></li>
        </ul>
    </section>


    <div class="position">
        <div class="center-one-tela">
            <div class="col-sm-12">
                <button class="botao22">Cliente</button>
            </div>
        </div>
        <br>
        <div class="center-one-tela">
            <div class="col-sm-12">
                <button class="botao22">Prestador</button>
            </div>
        </div>
        <br>
        <div class="center-one-tela">
            <div class="col-sm-12">
                <button class="botao22">Empresa</button>
            </div>
        </div>
    </div>


</body>
<!-- JS -->

<script src="section.js">
</script>

<script src="scr.js"></script>

<script>
    /*
 JS to toggle scroll axis styles
*/
    const control = document.getElementById("direction-toggle");
    const marquees = document.querySelectorAll(".marquee");
    const wrapper = document.querySelector(".wrapper");

    control.addEventListener("click", () => {
        control.classList.toggle("toggle--vertical");
        wrapper.classList.toggle("wrapper--vertical");
        [...marquees].forEach((marquee) =>
            marquee.classList.toggle("marquee--vertical")
        );
    });
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