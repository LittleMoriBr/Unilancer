$(function () {
    console.log("Entrou na pag.js");

    $("#principal_Servico").submit(function () {
        return false;
    });

    $(document).ready(function () {
        $("#Pintor2").click(function () {
            console.log("Cliquei no botão Pitores");
            const xhr = new XMLHttpRequest();

            var formData = {
                pesquisar: $("#Pintor2").val(),
            };

            formData = JSON.stringify(formData);
            xhr.onload = function () {
                const Resposta = document.getElementById("Resposta");
                Resposta.innerHTML = this.responseText;
            };

            xhr.open("POST", "Pesquisar_Servico.php", formData);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send(formData);

            xhr.onreadystatechange = function () {
                console.log(formData);
            };
        });
    })
});

