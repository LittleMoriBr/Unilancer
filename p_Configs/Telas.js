console.log("Entrou na pagina js");

$(function () {
	$(document).ready(function () {
		$("#tuplaco").click(function () {
			console.log("tuplac");

			var tuplac = "usuario";

			console.log(tuplac);

			const xhr = new XMLHttpRequest();

			xhr.onload = function () {
				const Resposta = document.getElementById("Resposta");
				Resposta.innerHTML = this.responseText;
			};

			xhr.open("get", "telas.php?tela=" + tuplac);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.send();

			return false;
		});
	});
});
