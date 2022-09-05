<?php




include_once("conexao.php");

if ($_POST) {

    $data = json_decode(file_get_contents('php://input'), true);


    extract($data);



    try {
        $sql = $conn->query("select * from funcionario where id_funcionario = " . $idFuncionario);
        if ($sql->rowCount() == 1) {
            foreach ($sql as $linha) {
                $linha[9] = substr($linha[9], 0, 10);
                $linha[17] = substr($linha[17], 0, 10);
                $linha[23] = substr($linha[23], 0, 10);
                echo "<p id='idFuncionario'>" . $linha[0] . "</p>";
                echo "<p id='nomeFuncionario'>" . $linha[1] . "</p>";
                echo "<p id='imgFuncionario'>" . $linha[2] . "</p>";
                echo "<p id='cepFuncionario'>" . $linha[3] . "</p>";
                echo "<p id='sobrenomeFuncionario'>" . $linha[4] . "</p>";
                echo "<p id='enderecoFuncionario'>" . $linha[5] . "</p>";
                echo "<p id='complementoFuncionario'>" . $linha[6] . "</p>";
                echo "<p id='cpfFuncionario'>" . $linha[7] . "</p>";
                echo "<p id='nascimentoFuncionario>" . $linha[8] . "</p>";
                echo "<p id='cidadeFuncionario'>" . $linha[9] . "</p>";
                echo "<p id='ufFuncionario'>" . $linha[10] . "</p>";
                echo "<p id='nacionalidadeFuncionario'>" . $linha[11] . "</p>";
                echo "<p id='usuarioFuncionario'>" . $linha[12] . "</p>";
                echo "<p id='senhaFuncionario'>" . $linha[13] . "</p>";
                echo "<p id='obsFuncionario'>" . $linha[14] . "</p>";
                echo "<p id='statusFuncionario'>" . $linha[15] . "</p>";
                echo "<p id='iniciocontratoFuncionario'>" . $linha[16] . "</p>";
                echo "<p id='bairroFuncionario'>" . $linha[17] . "</p>";
                echo "<p id='emailFuncionario'>" . $linha[18] . "</p>";
                echo "<p id='celularFuncionario'>" . $linha[19] . "</p>";
                echo "<p id='remuneracaoFuncionario'>" . $linha[20] . "</p>";
                echo "<p id='cpfdenpendenteFuncionario'>" . $linha[21] . "</p>";
                echo "<p id='nascimentodependenteFuncionario'>" . $linha[22] . "</p>";
                echo "<p id='idDepartamento'>" . $linha[23] . "</p>";
                echo "<p id='numero_Funcionario'>" . $linha[24] . "</p>";
            }
        } else {
            echo "Usuário não existe";
        }
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }
}
