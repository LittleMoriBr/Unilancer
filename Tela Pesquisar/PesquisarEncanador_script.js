$(function () {
    console.log("Entrou na pag.js");

    $("#principal_Servico").submit(function () {
        return false;
    });

    $(document).ready(function () {
        $("#Encanador").click(function () {
            console.log("Cliquei no botão Encanador");
            const xhr = new XMLHttpRequest();

            var formData = {
                pesquisar: $("#Encanador2").val(),
            };

            formData = JSON.stringify(formData);
            xhr.onload = function () {
                const Resposta = document.getElementById("Resposta");
                Resposta.innerHTML = this.responseText;
            };

            xhr.open("POST", "Pesquisar_Servico.php", formData);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send(formData);

            /*(Para ver Se está OK)
            xhr.onreadystatechange = function () {
                console.log(formData);
            };*/

        });
    })
});

