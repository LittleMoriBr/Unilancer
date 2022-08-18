

<?php

include_once("conexao.php");

$data = json_decode(file_get_contents('php://input'), true);
print_r($data);

extract($data);

if ($_POST) {


    echo "sadasdasdasdasdasdasdasdasdas";

    //  $id_usuario = $_POST['txtID'];
    // $nome_usuario = $_POST['txtNome'];
    // $login_usuario = $_POST['txtLogin'];
    // $senha_usuario = $_POST['txtSenha'];
    // $img_usuario = $_POST['txtIMG'];
    // $status_usuario = $_POST['txtStatus'];
    // $obs_usuario = $_POST['txtOBS'];


    $sql = $conn->prepare("insert into usuario
                (
                    
           nome_usuario,
           login_usuario,
           senha_usuario,
           img_usuario,
           status_usuario,
           obs_usuario
                )
                values
                (
                   
           :nome_usuario,
           :login_usuario,
           :senha_usuario,
           :img_usuario,
           :status_usuario,
           :obs_usuario
                    
                )");

    $sql->execute(array(

        ':nome_usuario' => $nome_usuario,
        ':login_usuario' => $login_usuario,
        ':senha_usuario' => $senha_usuario,
        ':img_usuario' => $img_usuario,
        ':status_usuario' => $status_usuario,
        ':obs_usuario' => $obs_usuario
    ));

    //echo $sql->rowCount();
    if ($sql->rowCount() == 1) {
        echo "<p>Dados cadastrados com sucesso</p>";
        echo "<p>ID Gerado - " . $conn->lastInsertId() . "</p>";
    }
} else {
    header("usuario.html");
} ?>