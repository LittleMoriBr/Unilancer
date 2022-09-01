console.log("Entrou na pagina js");

$(function () {
	$(document).ready(function () {
		$("#Conta").click(function () {
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

	$(document).ready(function () {
		$("#Some").click(function () {
			console.log("tuplac");

			var tuplac = "Some";

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

	$(document).ready(function () {
		$("#Preferencias").click(function () {
			console.log("tuplac");

			var tuplac = "Preferencias";

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

	$(document).ready(function () {
		$("#Historico").click(function () {
			console.log("tuplac");

			var tuplac = "Historico";

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
