$(document).ready(function () {
    $(".menu-button").click(function () {
        $(".menu-bar").toggleClass("open");
    })
})
$(function () {
    console.log("Entrou na pag.js");

    $("#formularioFuncionario").submit(function () {
        return false;
    });

    $("#btoPesquisar").click(function () {
        console.log("Cliquei no botão Pesquisar");
        const xhr = new XMLHttpRequest();

        var formData = {
            idFuncionario: $("#txtID").val(),


        };


        formData = JSON.stringify(formData);
        xhr.onload = function () {
            const Resposta = document.getElementById("Resposta");
            Resposta.innerHTML = this.responseText;

            $('#txtNome').val($('#nomeFuncionario)').text());
            $('#base64Code').val($('#imgFuncionario)').text());
            $('#txtNumero').val($('#numero_Funcionario)').text());
            $('#txtCep').val($('#cepFuncionario)').text());
            $('#txtSobrenome').val($('#sobrenomeFuncionario)').text());
            $('#txtEndereco').val($('#enderecoFuncionario)').text());
            $('#txtComplemento').val($('#complementoFuncionario)').text());
            $('#txtCpf').val($('#cpfFuncionario)').text());
            $('#txtNascimento').val($('#nascimentoFuncionario)').text());
            $('#txtCidade').val($('#cidadeFuncionario)').text());
            $('#txtUF').val($('#ufFuncionario)').text());
            $('#txtNacionalidade').val($('#nacionalidadeFuncionario)').text());
            $('#txtLogin').val($('#usuarioFuncionario)').text());
            $('#txtSenha').val($('#senhaFuncionario)').text());
            $('#txtObs').val($('#obsFuncionario)').text());
            $('#txtStatus').val($('#statusFuncionario)').text());
            $('#txtDataContrato').val($('#iniciocontratoFuncionario)').text());
            $('#txtBairro').val($('#bairroFuncionario)').text());
            $('#txtEmail').val($('#emailFuncionario)').text());
            $('#txtCelular').val($('#celularFuncionario)').text());
            $('#txtRemuneracao').val($('#remuneracaoFuncionario)').text());
            $('#txtCpfDenpedente').val($('#cpfdenpendenteFuncionario)').text());
            $('#txtNascimentoDepedendete').val($('#nascimentodependenteFuncionario)').text());
            $('# txtIDDepartamento').val($('#idDepartamento)').text());
            

        };

        xhr.open("POST", "funcionario_pesquisar.php", formData);
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
                id_funcionario : $('#txtID').val(),
                nome_funcionario: $('#txtNome').val(),
                img_funcionario: $('#base64Code').val(),
                cep_funcionario: $('#txtCep').val(),
                sobrenome_funcionario: $('#txtSobrenome').val(),
                endereco_funcionario: $('#txtEndereco').val(),
                complemento_funcionario: $('#txtEndereco').val(),
                sexo_funcionario: $('#txtSexo').val(),
                cpf_funcionario: $('#txtCpf').val(),
                nascimento_funcionario: $('#txtNascimento').val(),
                cidade_funcionario: $('#txtCidade').val(),
                uf_funcionario: $('#txtUF').val(),
                nacionalidade_funcionario: $('#txtNacionalidade').val(),
                usuario_funcionario: $('#txtLogin').val(),
                senha_funcionario: $('#txtSenha').val(),
                obs_funcionario: $('#txtObs').val(),
                status_funcionario: $('#txtStatus').val(),
                iniciocontrato_funcionario: $('#txtDataContrato').val(),
                bairro_funcionario: $('#txtBairro').val(),
                email_funcionario: $('#txtEmail').val(),
                celular_funcionario: $('#txtCelular').val(),
                remuneracao_funcionario: $('#txtRemuneracao').val(),
                cpfdenpendente_funcionario: $('#txtCpfDenpedente').val(),
                nascimentodependente_funcionario: $('#txtNascimentoDepedendete').val(),
                id_departamento: $('#txtIDDepartamento').val(),
                numero_funcionario: $('#txtNumero').val(),
            };

            formData = JSON.stringify(formData);
            xhr.onload = function () {
                const Resposta = document.getElementById("Resposta");
                Resposta.innerHTML = this.responseText;
            };

            xhr.open("POST", "funcionario_cadastro.php", formData);
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

