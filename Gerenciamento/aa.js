$(function () {
    console.log("Entrou na pag.js");

    $("#principal_Servico").submit(function () {
        return false;
    });

    $(document).ready(function () {
        $("#Designer").click(function () {
            console.log("Cliquei no botão Fotografo");
            const xhr = new XMLHttpRequest();

            var formData = {
                pesquisar: $("#Designer2").val(),
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



$(document).ready(function () {
    $(".menu-button").click(function () {
        $(".menu-bar").toggleClass("open");
    })
})