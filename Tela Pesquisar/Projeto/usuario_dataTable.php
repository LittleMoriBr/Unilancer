<table id="example" class="table table-striped" style="width:100%">
    <thead>
       <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>img</th>
            <th>Email</th>
            <th>cpf/cnpj</th>
            <th>nacionalidade</th>
            <th>Cidade</th>
            <th>UF</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cep</th>
            <th>Número</th>
            <th>Complemento</th>
            <th>Celular</th>
            <th>Login</th>
            <th>Senha</th>
            <th>Obs</th>
            <th>Status</th>
            <th>ID Parceiro</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        
<?php
include_once("conexao.php");

try
{
    $sql = $conn->query("select * from prestador");

    foreach($sql as $linha)
    {
        echo "<tr>";

            echo "<td>".$linha['id_prestador']."</td>";
            echo "<td>".$linha['nome_prestador']."</td>";
            echo "<td>".$linha['sobrenome_prestador']."</td>";
            echo "<td>".$linha['img_prestador']."</td>";
            echo "<td>".$linha['email_prestador']."</p>";
            echo "<td>".$linha['cpfnj_prestador']."</td>";
            echo "<td>".$linha['nacionalidade_prestador']."</td>";
            echo "<td>".$linha['cidade_prestador']."</td>";
            echo "<td>".$linha['uf_prestador']."</td>";
            echo "<td>".$linha['endereco_prestador']."</td>";
            echo "<td>".$linha['bairro_prestador']."</td>";
            echo "<td>".$linha['cep_prestador']."</td>";
            echo "<td>".$linha['numero_prestador']."</td>";
            echo "<td>".$linha['complemento_prestador']."</td>";
            echo "<td>".$linha['celular_prestador']."</td>";
            echo "<td>".$linha['login_prestador']."</td>";
            echo "<td>".$linha['senha_prestador']."</td>";
            echo "<td>".$linha['obs_prestador']."</td>";
            echo "<td>".$linha['status_prestador']."</td>";
            echo "<td>".$linha['id_parceiro']."</td>";
            



        echo "</tr>";
    }    
}
catch(PDOException $e)
{
    echo "Erro: ".$e->getMessage();
}
?>
        
    </tbody>
    <tfoot>
            <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>img</th>
            <th>Email</th>
            <th>cpf/cnpj</th>
            <th>nacionalidade</th>
            <th>Cidade</th>
            <th>UF</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cep</th>
            <th>Número</th>
            <th>Complemento</th>
            <th>Celular</th>
            <th>Login</th>
            <th>Senha</th>
            <th>Obs</th>
            <th>Status</th>
            <th>ID Parceiro</th>
            <th>Status</th>
            </tr>
        </tfoot>
</table>


</body>
</html>