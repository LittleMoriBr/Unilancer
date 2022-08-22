$(function () {
    console.log("Entrou na pag.js");

    $("#frmCliente").submit(function () {
        return false;
    });

    $("#btoPesquisar").click(function () {
        console.log("Cliquei no botão Pesquisar");
        const xhr = new XMLHttpRequest();

        var formData = {
            idPrestador: $("#txtID").val(),


        };


        formData = JSON.stringify(formData);
        xhr.onload = function () {
            const Resposta = document.getElementById("Resposta");
            Resposta.innerHTML = this.responseText;

            $("#txtDataCadastro").val($("#dataCadastroPrestador").text());
            $("#txtPrestador").val($("#nomePrestador").text());
            $("#txtSobrenome").val($("#sobrenomePrestador").text());
            $("#base64Code").val($("#imgPrestador").text());
            $("#txtEmailPrestador").val($("#emailPrestador").text());
            $("#txtCpfCnpjPrestador").val($("#cpfjnPrestador").text());
            $("#txtNacionalidadePrestador").val($("#nacionalidadePrestador").text());
            $("#txtCidadePrestador").val($("#cidadePrestador").text());
            $("#txtUfPrestador").val($("#ufPrestador").text());
            $("#txtEnderecoPrestador").val($("#enderecoPrestador").text());
            $("#txtBairroPrestador").val($("#bairroPrestador").text());
            $("#txtCepPrestador").val($("#cepPrestador").text());
            $("#txtNumeroPrestador").val($("#numeroPrestador").text());
            $("#txtComplementoPrestador").val($("#complementoPrestador").text());
            $("#txtCelularPrestador").val($("#celularPrestador").text());
            $("#txtLoginPrestador").val($("#loginPrestador").text());
            $("#txtSenhaPrestador").val($("#senhaPrestador").text());
            $("#txtObs").val($("#obsPrestador").text());
            $("#txtStatus").val($("#statusPrestador").text());
            $("#txtIDParceiro").val($("#idParceiro").text());
            $("#txtDataTermino").val($("#terminoContratoPrestador").text());
            $("#txtAtuacaoPrestador").val($("#atuacaoPrestador").text());
            $("#txtRecomendacao").val($("#recomendacaoPrestador").text());
            $("#txtDescricaoPrestador").val($("#descricaoPrestador").text());
            $("#txtAvaliacoes").val($("#avaliacaoPrestador").text());




        };

        xhr.open("POST", "prestador_pesquisar.php", formData);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(formData);

        xhr.onreadystatechange = function () {
            console.log(formData);
        };
    });


    /*Botão Cadastrar*/
    $(document).ready(function () {
        $("#btoCadastrar").click(function () {
            console.log("Cliquei no botão btoCadastrar");
            const xhr = new XMLHttpRequest();

            var formData = {
                id_cliente: $('#txtID').val(),
                nome_cliente: $('#txtNome').val(),
                sobrenome_cliente: $('#txtSobrenome').val(),
                cpf_cliente: $('#txtCpf').val(),
                nascimento_cliente: $('#txtNascimento').val(),
                endereco_cliente: $('#txtEndereco').val(),
                numero_cliente: $('#txtNumero').val(),
                cidade_cliente: $('#txtCidade').val(),
                cep_cliente: $('#txtUF').val(),
                complemento_cliente: $('#txtComplemento').val(),
                uf_cliente: $('#txtBairro').val(),
                nacionalidade_cliente: $('#txtEndereco').val(),
                usuario_cliente: $('#txtLogin').val(),
                senha_cliente: $('#txtSenha').val(),
                obs_cliente: $('#txtNacionalidade').val(),
                status_cliente: $('#txtStatus').val(),
                datacadastro_cliente: $('#txtData').val(),
                bairro_cliente: $('#txtBairro').val(),
                email_cliente: $('#txtEmail').val(),
                celular_cliente: $('#txtCelular').val(),
                img_cliente: $('#base64Code').val(),

            };

            formData = JSON.stringify(formData);
            xhr.onload = function () {
                const Resposta = document.getElementById("Resposta");
                Resposta.innerHTML = this.responseText;
            };

            xhr.open("POST", "cliente_cadastro.php", formData);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send(formData);

            xhr.onreadystatechange = function () {
                console.log(formData);
            };
        });

    });



    /*Botão Alterar*/


    /*Botão Excluir*/
    $("#btoExcluir").click(function () {
        console.log("Cliquei no botão btoExluir");
        const xhr = new XMLHttpRequest();



        document.getElementById("preImg").src = "";

        var formData = {
            id_prestador: $("#txtID").val(),

        };

        formData = JSON.stringify(formData);
        xhr.onload = function () {
            const Resposta = document.getElementById("Resposta");
            Resposta.innerHTML = this.responseText;
        };

        xhr.open("POST", "prestador_excluir.php", formData);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(formData);

        xhr.onreadystatechange = function () {
            console.log(formData);
        };

        $("#txtID").val("");
        $("#txtPrestador").val("");
        $("#txtSobrenome").val("");
        $("#base64Code").val("");
        $("#txtEmailPrestador").val("");
        $("#txtCpfCnpjPrestador").val("");
        $("#txtCidadePrestador").val("");
        $("#txtUfPrestador").val("");
        $("#txtEnderecoPrestador").val("");
        $("#txtBairroPrestador").val("");
        $("#txtCepPrestador").val("");
        $("#txtNumeroPrestador").val("");
        $("#txtNacionalidadePrestador").val("");
        $("#txtComplementoPrestador").val("");
        $("#txtCelularPrestador").val("");
        $("#txtLoginPrestador").val("");
        $("#txtSenhaPrestador").val("");
        $("#comment").val("");
        $("#txtAtuacaoPrestador").val("");
        $("#txtDescricaoPrestador").val("");
    });


    $("#btoLimpar").click(function () {
        console.log("Cliquei no botão btoLimpar");
        $("#txtID").val("");
        $("#txtNome").val("");
        $("#txtImg").val("");
        $("#txtLogin").val("");
        $("#txtSenha").val("");
        $("#base64Code").val("");
        $("#txtStatus").val("");
        $("#txtObs").val("");
        document.getElementById("preImg").src = "";
    });

    $("#btoAlterar").click(function () {
        console.log("Cliquei no botão btoAlterar");
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
            const Resposta = document.getElementById("Resposta");
            Resposta.innerHTML = this.responseText;
        };

        xhr.open("POST", "prestador_alterar.php", formData);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(formData);

        xhr.onreadystatechange = function () {
            console.log(formData);
        };
    });


});

