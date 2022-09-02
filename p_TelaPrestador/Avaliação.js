$(function () {
	console.log("Entrou na pag.js");

	$("#formularioPrestador").submit(function () {
		return false;
	});

	/*Botão Cadastrar*/
	$(document).ready(function () {
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
});
