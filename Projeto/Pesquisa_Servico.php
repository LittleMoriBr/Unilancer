<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">  
</head>

<body>
    <br>
    
    
    
    <!--Conteúdo-->
    <div class="container">
        <div class="row">
            
            <div class="col-sm-3">
                <?php
                    include_once("filtro_unilancer.php");
                ?>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <div>
                                
                        <?php
                                if($_GET && isset($_GET['f']))
                                {
                                    if($_GET['f'] == "Encanador")
                                    {
                                        include_once("Encanador_Servico.php");
                                        
                                    }
                                    else
                                    {
                                        echo "Abrir a tela ".$_GET['f'];
                                    }
                                    
                                    
                                }
                                include_once("conexao.php");
                                
                            ?>

                            <?php
                                if($_GET && isset($_GET['f']))
                                {
                                    if($_GET['f'] == "Fotografo")
                                    {
                                        include_once("Fotografo_Servico.php");
                                        

                                    }
                                    else
                                    {
                                        echo "Abrir a tela ".$_GET['f'];
                                    }
                                    
                                    
                                }
                                include_once("conexao.php");
                                
                        ?>

                        <?php
                                if($_GET && isset($_GET['f']))
                                {
                                    if($_GET['f'] == "Designer")
                                    {
                                        include_once("Fotografo_Servico.php");
                                        

                                    }
                                    else
                                    {
                                        echo "Abrir a tela ".$_GET['f'];
                                    }
                                    
                                    
                                }
                                include_once("conexao.php");
                                
                        ?>
                        
                        <?php
                                if($_GET && isset($_GET['f']))
                                {
                                    if($_GET['f'] == "Diarista")
                                    {
                                        include_once("Diarista_Servico.php");
                                        

                                    }
                                    else
                                    {
                                        echo "Abrir a tela ".$_GET['f'];
                                    }
                                    
                                    
                                }
                                include_once("conexao.php");
                                
                        ?>

                        <?php
                                if($_GET && isset($_GET['f']))
                                {
                                    if($_GET['f'] == "Mecanico")
                                    {
                                        include_once("Mecanico_Servico.php");
                                        

                                    }
                                    else
                                    {
                                        echo "Abrir a tela ".$_GET['f'];
                                    }
                                    
                                    
                                }
                                include_once("conexao.php");
                                
                        ?>

                        <?php
                                if($_GET && isset($_GET['f']))
                                {
                                    if($_GET['f'] == "Pintor")
                                    {
                                        include_once("Pintor_Servico.php");
                                        

                                    }
                                    else
                                    {
                                        echo "Abrir a tela ".$_GET['f'];
                                    }
                                    
                                    
                                }
                                include_once("conexao.php");
                                
                        ?>
                        
                    </div>
                </div>
            </div>   
                
        </div>
        
    </div>

    
    
    <script src="js/bootstrap.bundle.js"></script>
</body>
</html>