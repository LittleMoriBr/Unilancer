$(document).ready(function () {
    $(".menu-button").click(function () {
        $(".menu-bar").toggleClass("open");
    })
})
$(function () {
    console.log("Entrou na pag.js");

    $("#formularioPrestador").submit(function () {
        return false;
    });

    $("#Conta").click(function () {
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

            if ($("#txtPrestador").val() == "") {

                alert("Informe O nome")
                return;

            }

            if ($("#txtSobrenome").val() == "") {

                alert("Informe O sobrenome")
                return;

            }

            if ($("#txtEmailPrestador").val() == "") {

                alert("Informe O Email")
                return;

            }

            if ($("#txtCpfCnpjPrestador").val() == "") {

                alert("Informe O Cpf Cnpj")
                return;

            }

            if ($("#txtNacionalidadePrestador").val() == "") {

                alert("Informe O Nacionalidade")
                return;

            }

            if ($("#txtCidadePrestador").val() == "") {

                alert("Informe O Cidade")
                return;

            }

            if ($("#txtUfPrestador").val() == "") {

                alert("Informe O Uf")
                return;

            }

            if ($("#txtEnderecoPrestador").val() == "") {

                alert("Informe O Endereco")
                return;

            }

            if ($("#txtBairroPrestador").val() == "") {

                alert("Informe O Bairro")
                return;

            }

            if ($("#txtCepPrestador").val() == "") {

                alert("Informe O Cep")
                return;

            }

            if ($("#txtNumeroPrestador").val() == "") {

                alert("Informe o Numero")
                return;

            }

            if ($("#txtComplementoPrestador").val() == "") {

                alert("Informe o Numero")
                return;

            }

            if ($("#txtCelularPrestador").val() == "") {

                alert("Informe o Celular")
                return;

            }

            if ($("#txtLoginPrestador").val() == "") {

                alert("Informe o Login")
                return;

            }

            if ($("#txtSenhaPrestador").val() == "") {

                alert("Informe o Senha")
                return;

            }

            if ($("#txtAtuacaoPrestador").val() == "") {

                alert("Informe o Senha")
                return;

            }

            if ($("#txtDescricaoPrestador").val() == "") {

                alert("Informe o Descrição")
                return;

            }

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
        $("#txtIDParceiro").val("");
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

