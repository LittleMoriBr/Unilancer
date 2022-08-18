
    /*Botão Cadastrar*/
    $(document).ready(function () {

        $(function () {
            console.log("Entrou na pag.js");
        
            $("#frmEmpresa").submit(function () {
                return false;
            });
        

            
        $("#btoCadastrar").click(function () {
            console.log("Cliquei no botão btoCadastrar");
            const xhr = new XMLHttpRequest();

            var formData = {
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
