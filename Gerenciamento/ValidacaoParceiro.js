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

    $("#btoAlterar").click(function () {
        console.log("Cliquei no botão btoAlterar");
        const xhr = new XMLHttpRequest();

        var formData = {
            datacadastro_parceiro:$('#txtData').val(),	
            id_parceiro: $("#txtID").val(),
            nome_parceiro:$('#txtNome').val(),	
            cnpj_parceiro:$('#txtCnpj').val(),	
            area_parceiro:$('#txtArea').val(),	
            email_parceiro:$('#txtEmail').val(),	
            nacionalidade_parceiro:$('#txtNacionalidade').val(),	
            celular_parceiro:$('#txtCelular').val(),
            status_parceiro:$('#txtStatus').val(),	
            obs_parceiro:$('#comment').val(),	
            cep_parceiro:$('#txtCep').val(),	
            endereco_parceiro:$('#txtEndereco').val(),	
            numero_parceiro:$('#txtNumero').val(),	
            complemento_parceiro:$('#txtComplemento').val(),	
            cidade_parceiro:$('#txtCidade').val(),	
            uf_parceiro:$('#txtUF').val(),	
            bairro_parceiro:$('#txtBairro').val(),	
            login_parceiro:$('#txtLogin').val(),	
            senha_parceiro:$('#txtSenha').val(),	
            img_parceiro:$('#base64Code').val(),	

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

}); 

