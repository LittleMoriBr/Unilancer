<?php




include_once("conexao.php");

if ($_POST) {

    $data = json_decode(file_get_contents('php://input'), true);


    extract($data);



    try {
        $sql = $conn->query("select * from cliente where id_cliente = 2 ");
        if ($sql->rowCount() == 1) {
            foreach ($sql as $linha) {
                $linha[16] = substr($linha[16], 0, 10);
                echo "<p id='idCliente'>" . $linha[0] . "</p>";
                echo "<p id='nomeCliente'>" . $linha[1] . '</p>';
                echo "<p id='sobrenomeCliente'>" . $linha[2] . '</p>';
                echo "<p id='cpfCliente'>" . $linha[3] . '</p>';
                echo "<p id='nascimentoCliente'>" . $linha[4] . '</p>';
                echo "<p id='enderecoCliente'>" . $linha[5] . '</p>';
                echo "<p id='numeroCliente'>" . $linha[6] . '</p>';
                echo "<p id='cidadeCliente'>" . $linha[7] . '</p>';
                echo "<p id='cepCliente'>" . $linha[8] . '</p>';
                echo "<p id='complementoCliente'>" . $linha[9] . '</p>';
                echo "<p id='ufCliente'>" . $linha[10] . '</p>';
                echo "<p id='nacionalidadeCliente'>" . $linha[11] . '</p>';
                echo "<p id='usuarioCliente'>" . $linha[12] . '</p>';
                echo "<p id='senhaCliente'>" . $linha[13] . '</p>';
                echo "<p id='obsCliente'>" . $linha[14] . '</p>';
                echo "<p id='statusCliente'>" . $linha[15] . '</p>';
                echo "<p id='datacadastroCliente'>" . $linha[16] . '</p>';
                echo "<p id='dataexcluircadastroCliente'>" . $linha[17] . '</p>';
                echo "<p id='bairroCliente'>" . $linha[18] . '</p>';
                echo "<p id='emailCliente'>" . $linha[19] . '</p>';
                echo "<p id='celularCliente'>" . $linha[20] . '</p>';
                echo "<p id='imgCliente'>" . $linha[21] . '</p>';
            }
        } else {
            echo "Usuário não existe";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
