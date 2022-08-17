$(function(){
    
    debuga = $("#joaquim");
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
        
        $("#txtID").val($("#txtIDParceiro").text());

        $("#txtNomeParceiro").val($("#txtNomeParceiro").text());
        $("#txtCnpjParceiro").val($("#txtCnpjParceiro").text());
        $("#txtAreaParceiro").val($("#txtAreaParceiro").text());
        $("#txtEmailParceiro").val($("#txtEmailParceiro").text());
        $("#txtNacionalidadeParceiro").val($("#txtNacionalidadeParceiro").text());
        $("#txtCelularParceiro").val($("#txtCelularParceiro").text());
        $("#txtDataParceiro").val($("#txtDataParceiro").text());
        $("#txtStatusParceiro").val($("#txtStatusParceiro").text());
        $("#txtObsParceiro").val($("#txtObsParceiro").text());
        $("#txtCepParceiro").val($("#txtCepParceiro").text());
        $("#txtEnderecoParceiro").val($("#txtEnderecoParceiro").text());
        $("#txtCelularParceiro").val($("#txtCelularParceiro").text());
        $("#txtComplementoParceiro").val($("#txtComplementoParceiro").text());
        $("#txtCidadeParceiro").val($("#txtCidadeParceiro").text());
        $("#txtUFParceiro").val($("#txtUFParceiro").text());
        $("#txtBairroParceiro").val($("#txtBairroParceiro").text());
        $("#txtLoginParceiro").val($("#txtLoginParceiro").text());
        $("#txtSenhaParceiro").val($("#txtSenhaParceiro").text());
        $("#base64Code").val($("#txtImgParceiro").text());
    
        document.getElementById("preImg").value = "";
        var preview = document.getElementById("preImg");
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

        console.log("teste");
        debuga.html("apertei");
        
        action = 'CadastrarParceiro.php';

        $.ajax({
            url: action,
            data: {
                id_parceiro: $("#txtIDParceiro").val(),
                nome_parceiro: $("#txtNomeParceiro").val(),
                cnpj_parceiro: $("#txtCnpjParceiro").val(),
                area_parceiro: $("#txtAreaParceiro").val(),
                email_parceiro: $("#txtEmailParceiro").val(),
                nacionalidade_parceiro: $("#txtNacionalidadeParceiro").val(),
                celular_parceiro: $("#txtCelularParceiro").val(),
                datacadastro_parceiro: $("#txtDataParceiro").val(),
                status_parceiro: $("#txtStatusParceiro").val(),
                obs_parceiro: $("#txtObsParceiro").val(),
                cep_parceiro: $("#txtCepParceiro").val(),
                endereco_parceiro: $("#txtEnderecoParceiro").val(),
                numero_parceiro: $("#txtCelularParceiro").val(),
                complemento_parceiro: $("#txtComplementoParceiro").val(),
                cidade_parceiro: $("#txtCidadeParceiro").val(),
                uf_parceiro: $("#txtUFParceiro").val(),
                bairro_parceiro: $("#txtBairroParceiro").val(),
                login_parceiro: $("#txtLoginParceiro").val(),
                senha_parceiro: $("#txtSenhaParceiro").val(),
                img_parceiro: $("#base64Code").val(),
            }
        });
    });


});