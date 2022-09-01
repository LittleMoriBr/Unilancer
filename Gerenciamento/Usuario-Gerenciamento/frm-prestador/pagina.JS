
    /*Botão Cadastrar*/
    $(document).ready(function () 
{

        $(function () {
            console.log("Entrou na pag.js");
        
            $("#frmPrestador").submit(function () {
                return false;
            });
        

            
        $("#btoCadastrar").click(function () {
            console.log("Cliquei no botão btoCadastrar");
            const xhr = new XMLHttpRequest();

            var formData = {
                datacadastro_prestador: $("#txtDataCadastro").val(),
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
                status_prestador: $("#txtStatus").val(),
                id_parceiro: $("#txtIDParceiro").val(),
                atuacao_prestador: $("#txtAtuacaoPrestador").val(),
                recomendacoes_prestador: $("#txtRecomendacoes").val(),
                descricao_prestador: $("#txtDescricaoPrestador").val(),
                avaliacoes_prestador: $("#txtAvaliacoes").val(),
            };

            formData = JSON.stringify(formData);
            xhr.onload = function () {
                const Resposta = document.getElementById("Lucas");
                Resposta.innerHTML = this.responseText;
            };

            xhr.open("POST", "CadastrarPrestador.php", formData);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send(formData);

            xhr.onreadystatechange = function () {
                console.log(formData);
            };
        });

        

    });

});
