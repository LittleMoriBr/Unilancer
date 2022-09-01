<?php




include_once("conexao.php");

if ($_POST) {

    $data = json_decode(file_get_contents('php://input'), true);


    extract($data);



    try {
        $sql = $conn->query("select * from parceiro where id_parceiro = " . $idParceiro);
        if ($sql->rowCount() == 1) {
            foreach ($sql as $linha) {
                echo "<p id='idParceiro'>" . $linha[0] . "</p>";
                echo "<p id='nomeParceiro'>" . $linha[1] . "</p>";
                echo "<p id='cnpjParceiro '>" . $linha[2] . "</p>";
                echo "<p id='areaParceiro'>" . $linha[3] . "</p>";
                echo "<p id='emailParceiro '>" . $linha[4] . "</p>";
                echo "<p id='nacionalidadeParceiro'>" . $linha[5] . "</p>";
                echo "<p id='celularParceiro '>" . $linha[6] . "</p>";
                $linha[7] = substr($linha[7], 0, 10);
                echo "<p id='datacadastroParceiro'>" . $linha[7] . "</p>";
                echo "<p id='excluircadastroParceiro'>" . $linha[8] . "</p>";
                echo "<p id='statusParceiro'>" . $linha[9] . "</p>";
                echo "<p id='obsParceiro'>" . $linha[10] . "</p>";
                echo "<p id='cepParceiro'>" . $linha[11] . "</p>";
                echo "<p id='enderecoParceiro'>" . $linha[12] . "</p>";
                echo "<p id='numeroParceiro'>" . $linha[13] . "</p>";
                echo "<p id='complementoParceiro'>" . $linha[14] . "</p>";
                echo "<p id='cidadeParceiro'>" . $linha[15] . "</p>";
                echo "<p id='ufParceiro'>" . $linha[16] . "</p>";
                echo "<p id='bairroParceiro'>" . $linha[17] . "</p>";
                echo "<p id='loginParceiro'>" . $linha[18] . "</p>";
                echo "<p id='senhaParceiro'>" . $linha[19] . "</p>";
                echo "<p id='imgParceiro'>" . $linha[20] . "</p>";
            }
        } else {
            echo "Usuário não existe";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
