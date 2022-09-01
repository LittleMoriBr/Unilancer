$(document).ready(function () {
    $(".menu-button").click(function () {
        $(".menu-bar").toggleClass("open");
    })
})
$(function () {
    console.log("Entrou na pag.js");

    $("#frmCliente").submit(function () {
        return false;
    });

    $("#Conta").click(function () {
        console.log("Cliquei no botão Pesquisar");
        const xhr = new XMLHttpRequest();

        var formData = {
            idCliente: $("#txtID").val(),


        };


        formData = JSON.stringify(formData);
        xhr.onload = function () {
            const Resposta2 = document.getElementById("Resposta2");
            Resposta2.innerHTML = this.responseText;


            $('#txtNome').val($('#nomeCliente').text());
            $('#txtSobrenome').val($('#sobrenomeCliente').text());
            $('#txtCpf').val($('#cpfCliente').text());
            $('#txtNascimento').val($('#nascimentoCliente').text());
            $('#txtEndereco').val($('#enderecoCliente').text());
            $('#txtNumero').val($('#numeroCliente').text());
            $('#txtCidade').val($('#cidadeCliente').text());
            $('#txtCep').val($('#cepCliente').text());
            $('#txtComplemento').val($('#complementoCliente').text());
            $('#txtUF').val($('#ufCliente').text());
            $('#txtNacionalidade').val($('#nacionalidadeCliente').text());
            $('#txtLogin').val($('#usuarioCliente').text());
            $('#txtSenha').val($('#senhaCliente').text());
            $('#txtObs').val($('#obsCliente').text());
            $('#txtStatus').val($('#statusCliente').text());
            $('#txtData').val($('#datacadastroCliente').text());
            $('#txtExcluirData').val($('#dataexcluircadastroCliente').text());
            $('#txtBairro').val($('#bairroCliente').text());
            $('#txtEmail').val($('#emailCliente').text());
            $('#txtCelular').val($('#celularCliente').text());
            $('#base64Code').val($('#imgCliente').text());

        };

        xhr.open("POST", "conf_pesquisar.php", formData);
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
            id_cliente: $("#txtID").val(),

        };

        formData = JSON.stringify(formData);
        xhr.onload = function () {
            const Resposta = document.getElementById("Resposta");
            Resposta.innerHTML = this.responseText;
        };

        xhr.open("POST", "cliente_excluir.php", formData);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(formData);

        xhr.onreadystatechange = function () {
            console.log(formData);
        };

        $('#txtID').val('');
        $('#txtNome').val('');
        $('#txtSobrenome').val('');
        $('#txtNascimento').val('');
        $('#txtImg').val('');
        $('#txtCpf').val('');
        $('#txtCep').val('');
        $('#txtUF').val('');
        $('#txtCidade').val('');
        $('#txtBairro').val('');
        $('#txtEndereco').val('');
        $('#txtNumero').val('');
        $('#txtComplemento').val('');
        $('#txtNacionalidade').val('');
        $('#txtCelular').val('');
        $('#txtEmail').val('');
        $('#txtLogin').val('');
        $('#txtSenha').val('');
        $('#txtStatus').val('');
        $('#txtData').val('');
        $('#txtObs').val('');
    });


    $("#btoLimpar").click(function () {
        console.log("Cliquei no botão btoLimpar");

        $('#txtID').val('');
        $('#txtNome').val('');
        $('#txtSobrenome').val('');
        $('#txtNascimento').val('');
        $('#txtImg').val('');
        $('#txtCpf').val('');
        $('#txtCep').val('');
        $('#txtUF').val('');
        $('#txtCidade').val('');
        $('#txtBairro').val('');
        $('#txtEndereco').val('');
        $('#txtNumero').val('');
        $('#txtComplemento').val('');
        $('#txtNacionalidade').val('');
        $('#txtCelular').val('');
        $('#txtEmail').val('');
        $('#txtLogin').val('');
        $('#txtSenha').val('');
        $('#txtStatus').val('');
        $('#txtData').val('');
        $('#txtObs').val('');

        document.getElementById("preImg").src = "";
    });

    $("#btoAlterar").click(function () {
        console.log("Cliquei no botão btoAlterar");
        const xhr = new XMLHttpRequest();

        var formData = {

            id_cliente: $('#txtID').val(),
            nome_cliente: $('#txtNome').val(),
            sobrenome_cliente: $('#txtSobrenome').val(),
            nascimento_cliente: $('#txtNascimento').val(),
            img_cliente: $('#base64Code').val(),
            cpf_cliente: $('#txtCpf').val(),
            cep_cliente: $('#txtCep').val(),
            uf_cliente: $('#txtUF').val(),
            cidade_cliente: $('#txtCidade').val(),
            bairro_cliente: $('#txtBairro').val(),
            endereco_cliente: $('#txtEndereco').val(),
            numero_cliente: $('#txtNumero').val(),
            complemento_cliente: $('#txtComplemento').val(),
            nacionalidade_cliente: $('#txtNacionalidade').val(),
            celular_cliente: $('#txtCelular').val(),
            email_cliente: $('#txtEmail').val(),
            usuario_cliente: $('#txtLogin').val(),
            senha_cliente: $('#txtSenha').val(),
            status_cliente: $('#txtStatus').val(),
            datacadastro_cliente: $('#txtData').val(),
            obs_cliente: $('#txtObs').val(),

        };

        formData = JSON.stringify(formData);
        xhr.onload = function () {
            const Resposta = document.getElementById("Resposta");
            Resposta.innerHTML = this.responseText;
        };

        xhr.open("POST", "config_alterar.php", formData);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(formData);

        xhr.onreadystatechange = function () {
            console.log(formData);
        };
    });


});

