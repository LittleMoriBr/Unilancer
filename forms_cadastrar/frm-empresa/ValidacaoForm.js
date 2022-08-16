$(function(){
    
    debuga = $("#resposta");
    enviar = $("#frmCliente");
    action = '';

    function carregando(datas){
        debuga.empty().html('Carregando...');
    };

    function sucesso(datas){
        debuga.empty().html(datas);
        $("#txtID").val($("#IDGerado").text());
    };

    function sucessoPesquisa(datas){

        debuga.empty().html(datas);
        
        $("#txtID").val($("#idUsuario").text());
    
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
    
        document.getElementById("preFto").value = "";
        var preview = document.getElementById("preFto");
        preview.src =  $("#base64Code").val();
    }
    
    function errosend(datas){
        debuga.empty().html('Erro ao enviar os dados');
    };



    $.ajaxSetup({
        type:           'POST',
        beforeSend:     carregando,
        error:          errosend,
        success:        sucesso
    });

    enviar.submit(function(){
        return false;
    });


    $("#btoCadastrar").click(function(){

        if($('#txtNome').val() == ""){
            alert("Nome não informado");
        }
        if($('#txtSenha').val() == ""){
            alert("Senha não informada");
        }
        
        if($('#txtSenhaConfirm').val() == ""){
            alert("Confirmação de senha não informada");
        }
        
        if($('#txtStatus').val() == ""){
            alert("Status não informado");
        }
        
        
        

        action = 'CadastrarParceiro.php';

        $.ajax({
            url: action,
            data: {
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
            }
        });
    });


});