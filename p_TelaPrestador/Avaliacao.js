$(function () {
	console.log("Entrou na pag.js");

	/*Botão Cadastrar*/
	$(document).ready(function () {
		$("#valval").submit(function () {
			return false;
		});

		$("#btoCadastrar").click(function () {
			console.log("Cliquei no botão btoCadastrar");
			const xhr = new XMLHttpRequest();

			var formData = {
				titulo_avaliacoes: $("#inputtexto").val(),
				descricao_avaliacoes: $("#text_area").val(),
				id_cliente: $("#txtSobrenome").val(),
				id_prestador: $("#base64Code").val(),
			};

			formData = JSON.stringify(formData);
			xhr.onload = function () {
				const Resposta2 = document.getElementById("Resposta2");
				Resposta2.innerHTML = this.responseText;
			};

			xhr.open("POST", "CadastroAval.php", formData);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.send(formData);

			xhr.onreadystatechange = function () {
				console.log(formData);
			};
		});
	});
});
