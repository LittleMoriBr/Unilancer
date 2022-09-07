<?php
include_once("conexao.php");

$data = json_decode(file_get_contents('php://input'), true);


extract($data);

print_r($data);

if ($_POST) {

    $id_prestador = 27;

    $sql = $conn->prepare("insert into portifolio
                (
                   
                    img1_portifolio,
                    img2_portifolio,
                    img3_portifolio,
                    img4_portifolio,
                    img5_portifolio,
                    img6_portifolio,
                    id_prestador
                   
                )
                values
                (
                    
                    :img1_portifolio,
                    :img2_portifolio,
                    :img3_portifolio,
                    :img4_portifolio,
                    :img5_portifolio,
                    :img6_portifolio,
                    :id_prestador
                    
                )");

    $sql->execute(array(

     
                   ':img1_portifolio' => $img1_portifolio, 
                    ':img2_portifolio' => $img2_portifolio,
                    ':img3_portifolio' => $img3_portifolio,
                    ':img4_portifolio' => $img4_portifolio,
                    ':img5_portifolio' => $img5_portifolio,
                    ':img6_portifolio' => $img6_portifolio,
                    ':id_prestador' => $id_prestador


        
    ));

    //echo $sql->rowCount();
} 

?>
<a href="parceiro.php?" class="btn btn-dark">voltar</a>

<h1>dasdasdsadasdasd</h1>