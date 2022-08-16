$(function () {
    console.log("Entrou na pag.js");

    $("#FrmAdmParceiro").submit(function () {
        return false;
    });

    $("#btoCadastrarParceiro").click(function () {
        console.log("Cliquei no botão Pesquisar");
        const xhr = new XMLHttpRequest();

        var formData = {
            IdParceiro: $("#txtIDParceiro").val(),
            NomeParceiro: $("#txtNomeParceiro").val(),
            CnpjParceiro: $("#txtCnpjParceiro").val(),
            AreaParceiro: $("#txtAreaParceiro").val(),
            EmailParceiro: $("#txtEmailParceiro").val(),
            NacionalidadeParceiro: $("#txtNacionalidadeParceiro").val(),
            CelularParceiro: $("#txtCelularParceiro").val(),
            DataParceiro: $("#txtDataParceiro").val(),
            StatusParceiro: $("#txtStatusParceiro").val(),
            ObsParceiro: $("#txtObsParceiro").val(),
            CepParceiro: $("#txtCepParceiro").val(),
            EnderecoParceiro: $("#txtEnderecoParceiro").val(),
            NumeroParceiro: $("#txtCelularParceiro").val(),
            ComplementoParceiro: $("#txtComplementoParceiro").val(),
            CidadeParceiro: $("#txtCidadeParceiro").val(),
            UFParceiro: $("#txtUFParceiro").val(),
            BairroParceiro: $("#txtBairroParceiro").val(),
            LoginParceiro: $("#txtLoginParceiro").val(),
            SenhaParceiro: $("#txtSenhaParceiro").val(),
            img: $("#base64Code").val(),
        };


        formData = JSON.stringify(formData);
        xhr.onload = function () {
            const Resposta = document.getElementById("Resposta");
            Resposta.innerHTML = this.responseText;
        };

        xhr.open("POST", "CadastrarParceiro.php", formData);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.send(formData);

        xhr.onreadystatechange = function () {
            console.log(formData);
        };
    });

}); 