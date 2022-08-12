<?php




include_once("conexao.php");

if ($_POST) {

    $data = json_decode(file_get_contents('php://input'), true);


    extract($data);



    try {
        $sql = $conn->query("select * from prestador where id_prestador = " . $idPrestador);
        if ($sql->rowCount() == 1) {
            foreach ($sql as $linha) {
                $linha[0] = substr($linha[0], 0, 10);
                echo "<p id='dataCadastroPrestador'>" . $linha[0] . "</p>";
                echo "<p id='idPrestador'>" . $linha[1] . "</p>";
                echo "<p id='nomePrestador'>" . $linha[2] . "</p>";
                echo "<p id='sobrenomePrestador'>" . $linha[3] . "</p>";
                echo "<p id='imgPrestador'>" . $linha[4] . "</p>";
                echo "<p id='emailPrestador'>" . $linha[5] . "</p>";
                echo "<p id='cpfjnPrestador'>" . $linha[6] . "</p>";
                echo "<p id='nacionalidadePrestador'>" . $linha[7] . "</p>";
                echo "<p id='cidadePrestador'>" . $linha[8] . "</p>";
                echo "<p id='ufPrestador'>" . $linha[9] . "</p>";
                echo "<p id='enderecoPrestador'>" . $linha[10] . "</p>";
                echo "<p id='bairroPrestador'>" . $linha[11] . "</p>";
                echo "<p id='cepPrestador'>" . $linha[12] . "</p>";
                echo "<p id='numeroPrestador'>" . $linha[13] . "</p>";
                echo "<p id='complementoPrestador'>" . $linha[14] . "</p>";
                echo "<p id='celularPrestador'>" . $linha[15] . "</p>";
                echo "<p id='loginPrestador'>" . $linha[16] . "</p>";
                echo "<p id='senhaPrestador'>" . $linha[17] . "</p>";
                echo "<p id='obsPrestador'>" . $linha[18] . "</p>";
                echo "<p id='statusPrestador'>" . $linha[19] . "</p>";
                echo "<p id='idParceiro'>" . $linha[20] . "</p>";
                echo "<p id='terminoContratoPrestador'>" . $linha[21] . "</p>";
                echo "<p id='atuacaoPrestador'>" . $linha[22] . "</p>";
                echo "<p id='recomendacaoPrestador'>" . $linha[23] . "</p>";
                echo "<p id='descricaoPrestador'>" . $linha[24] . "</p>";
                echo "<p id='avaliacaoPrestador'>" . $linha[25] . "</p>";
            }
        } else {
            echo "Usuário não existe";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
