$(function () {
	console.log("Entrou na pag.js");

	$("#ovidoria").submit(function () {
		return false;
	});

	$(document).ready(function () {
		$("#Enviar").click(function () {
			console.log("Cliquei no botão btoCadastrar");
			const xhr = new XMLHttpRequest();

			var formData = {
				id_ouvidoria: $("#id_ouvidoria").val(),
				email_ouvidoria: $("#email_ouvidoria").val(),
				mensagem_ouvidoria: $("#mensagem_ouvidoria").val(),
				problema_ouvidoria: $("#problema_ouvidoria").val(),
			};

			formData = JSON.stringify(formData);
			xhr.onload = function () {
				alert("Mensagem Enviada");
			};

			xhr.open("POST", "Enviarmsg.php", formData);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.send(formData);

			xhr.onreadystatechange = function () {
				console.log(formData);
			};
		});
	});
});
