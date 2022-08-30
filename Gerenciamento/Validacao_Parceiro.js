$(document).ready(function () {
    $(".menu-button").click(function () {
        $(".menu-bar").toggleClass("open");
    })
})
$(function () {
    console.log("Entrou na pag.js");

    $("#FrmAdmParceiro").submit(function () {
        return false;
    });

    $("#btoPesquisar").click(function () {
        console.log("Cliquei no botão Pesquisar");
        const xhr = new XMLHttpRequest();

        var formData = {
            idParceiro: $("#txtID").val(),


        };


        formData = JSON.stringify(formData);
        xhr.onload = function () {
            const Resposta = document.getElementById("Resposta");
            Resposta.innerHTML = this.responseText;

            $("#txtDataCadastro").val($("#datacadastroParceiro").text());
            $("#txtNome").val($("#nomeParceiro").text());
            $("#txtCnpj").val($("#cnpjParceiro").text());
            $("#txtArea").val($("#areaParceiro").text());
            $("#txtEmail").val($("#emailParceiro").text());
            $("#txtNacionalidade").val($("#nacionalidadeParceiro").text());
            $("#txtCelular").val($("#celularParceiro").text());
            $("#txtData").val($("#datacadastroParceiro").text());
            $("#txtExcluirData").val($("#excluircadastroParceiro").text());
            $("#txtStatus").val($("#statusParceiro").text());
            $("#txtObs").val($("#obsParceiro").text());
            $("#txtCep").val($("#cepParceiro").text());
            $("#txtEndereco").val($("#enderecoParceiro").text());
            $("#txtNumero").val($("#numeroParceiro").text());
            $("#txtComplemento").val($("#complementoParceiro").text());
            $("#txtCidade").val($("#cidadeParceiro").text());
            $("#txtUF").val($("#ufParceiro").text());
            $("#txtBairro").val($("#bairroParceiro").text());
            $("#txtLogin").val($("#loginParceiro").text());
            $("#txtSenha").val($("#senhaParceiro").text());
            $("#base64Code").val($("#imgParceiro").text());



        };

        xhr.open("POST", "parceiro_pesquisar.php", formData);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(formData);

        xhr.onreadystatechange = function () {
            console.log(formData);
        };
    });

    $("#btoCadastrar").click(function () {
        console.log("Cliquei no botão Pesquisar");
        const xhr = new XMLHttpRequest();

        var formData = {
            id_parceiro: $("#txtID").val(),
            nome_parceiro: $("#txtNome").val(),
            cnpj_parceiro: $("#txtCnpj").val(),
            area_parceiro: $("#txtArea").val(),
            email_parceiro: $("#txtEmail").val(),
            nacionalidade_parceiro: $("#txtNacionalidade").val(),
            celular_parceiro: $("#txtCelular").val(),
            status_parceiro: $("#txtStatus").val(),
            obs_parceiro: $("#comment").val(),
            cep_parceiro: $("#txtCep").val(),
            endereco_parceiro: $("#txtEndereco").val(),
            numero_parceiro: $("#txtNumero").val(),
            complemento_parceiro: $("#txtComplemento").val(),
            cidade_parceiro: $("#txtCidade").val(),
            uf_parceiro: $("#txtUF").val(),
            bairro_parceiro: $("#txtBairro").val(),
            login_parceiro: $("#txtLogin").val(),
            senha_parceiro: $("#txtSenha").val(),
            img_parceiro: $("#base64Code").val(),
        };


        formData = JSON.stringify(formData);
        xhr.onload = function () {
            const Resposta = document.getElementById("Resposta");
            Resposta.innerHTML = this.responseText;
        };

        xhr.open("POST", "parceiro_cadastro.php", formData);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(formData);

        xhr.onreadystatechange = function () {
            console.log(formData);
        };
    });

    $("#btoLimpar").click(function () {
        console.log("Cliquei no botão btoLimpar");
        $('#txtID').val('');
        $('#txtData').val('');
        $('#txtNome').val('');
        $('#txtImg').val('');
        $('#base64Code').val('');
        $('#txtArea').val('');
        $('#txtCnpj').val('');
        $('#txtNacionalidade').val('');
        $('#txtCidade').val('');
        $('#txtUF').val('');
        $('#txtBairro').val('');
        $('#txtEndereco').val('');
        $('#txtNumero').val('');
        $('#txtComplemento').val('');
        $('#txtCelular').val('');
        $('#txtCep').val('');
        $('#txtEmail').val('');
        $('#txtStatus').val('');
        $('#txtLogin').val('');
        $('#txtSenha').val('');
        $('#comment').val('');
        $('#txtExcluirData').val('');


        document.getElementById("preImg").src = "";
    });

    $("#btoAlterar").click(function () {
        console.log("Cliquei no botão btoAlterar");
        const xhr = new XMLHttpRequest();

        var formData = {
            datacadastro_parceiro: $('#txtData').val(),
            id_parceiro: $("#txtID").val(),
            nome_parceiro: $('#txtNome').val(),
            cnpj_parceiro: $('#txtCnpj').val(),
            area_parceiro: $('#txtArea').val(),
            email_parceiro: $('#txtEmail').val(),
            nacionalidade_parceiro: $('#txtNacionalidade').val(),
            celular_parceiro: $('#txtCelular').val(),
            status_parceiro: $('#txtStatus').val(),
            obs_parceiro: $('#comment').val(),
            cep_parceiro: $('#txtCep').val(),
            endereco_parceiro: $('#txtEndereco').val(),
            numero_parceiro: $('#txtNumero').val(),
            complemento_parceiro: $('#txtComplemento').val(),
            cidade_parceiro: $('#txtCidade').val(),
            uf_parceiro: $('#txtUF').val(),
            bairro_parceiro: $('#txtBairro').val(),
            login_parceiro: $('#txtLogin').val(),
            senha_parceiro: $('#txtSenha').val(),
            img_parceiro: $('#base64Code').val(),

        };

        formData = JSON.stringify(formData);
        xhr.onload = function () {
            const Resposta = document.getElementById("Resposta");
            Resposta.innerHTML = this.responseText;
        };

        xhr.open("POST", "parceiro_alterar.php", formData);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(formData);

        xhr.onreadystatechange = function () {
            console.log(formData);
        };
    });

    /*Botão Excluir*/
    $("#btoExcluir").click(function () {
        console.log("Cliquei no botão btoExluir");
        const xhr = new XMLHttpRequest();



        document.getElementById("preImg").src = "";

        var formData = {
            id_parceiro: $("#txtID").val(),

        };

        formData = JSON.stringify(formData);
        xhr.onload = function () {
            const Resposta = document.getElementById("Resposta");
            Resposta.innerHTML = this.responseText;
        };

        xhr.open("POST", "parceiro_excluir.php", formData);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(formData);

        xhr.onreadystatechange = function () {
            console.log(formData);
        };

        $('#txtID').val('');
        $('#txtData').val('');
        $('#txtNome').val('');
        $('#txtImg').val('');
        $('#base64Code').val('');
        $('#txtArea').val('');
        $('#txtCnpj').val('');
        $('#txtNacionalidade').val('');
        $('#txtCidade').val('');
        $('#txtUF').val('');
        $('#txtBairro').val('');
        $('#txtEndereco').val('');
        $('#txtNumero').val('');
        $('#txtComplemento').val('');
        $('#txtCelular').val('');
        $('#txtCep').val('');
        $('#txtEmail').val('');
        $('#txtStatus').val('');
        $('#txtLogin').val('');
        $('#txtSenha').val('');
        $('#comment').val('');
        $('#txtExcluirData').val('');
    });

});

