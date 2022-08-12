$(function () {
    console.log("Entrou na pag.js");

    $("#formularioPrestador").submit(function () {
        return false;
    });

    $(document).ready(function () {
        $("#btoCadastrar").click(function () {
            console.log("Cliquei no botão btoCadastrar");
            const xhr = new XMLHttpRequest();

            var formData = {
                id_prestador: $("#txtID").val(),
                nome_prestador: $("#txtPrestador").val(),
                sobrenome_prestador: $("#txtSobrenome").val(),
                img_prestador: $("#base64Code").val(),
                email_prestador: $("#txtEmailPrestador").val(),
                cpfnj_prestador: $("#txtCpfCnpjPrestador").val(),
                nacionalidade_prestador: $("#txtNacionalidadePrestador").val(),
                cidade_prestador: $("#txtCidadePrestador").val(),
                uf_prestador: $("#txtUfPrestador").val(),
                endereco_prestador: $("#txtEnderecoPrestador").val(),
                bairro_prestador: $("#txtBairroPrestador").val(),
                cep_prestador: $("#txtCepPrestador").val(),
                numero_prestador: $("#txtNumeroPrestador").val(),
                complemento_prestador: $("#txtComplementoPrestador").val(),
                celular_prestador: $("#txtCelularPrestador").val(),
                login_prestador: $("#txtLoginPrestador").val(),
                senha_prestador: $("#txtSenhaPrestador").val(),
                obs_prestador: $("#comment").val(),
                atuacao_prestador: $("#txtAtuacaoPrestador").val(),
                descricao_prestador: $("#txtDescricaoPrestador").val(),
            };

            formData = JSON.stringify(formData);
            xhr.onload = function () {
                const Resposta = document.getElementById("Resposta");
                Resposta.innerHTML = this.responseText;
            };

            xhr.open("POST", "prestador_cadastro.php", formData);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send(formData);

            xhr.onreadystatechange = function () {
                console.log(formData);
            };
        });

    });
});
