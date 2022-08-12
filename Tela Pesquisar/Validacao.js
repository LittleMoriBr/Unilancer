$(function () {
	console.log("Entrou na pag.js");

	$("#FrmUsuario").submit(function () {
		return false;
	});

	$(document).ready(function () {
		$("#BtoCadastrar").click(function () {
			console.log("Cliquei no botão btoCadastrar");
			const xhr = new XMLHttpRequest();

			var formData = {
				id_usuario: $("#txtID").val(),
				nome_usuario: $("#txtNome").val(),
				login_usuario: $("#txtLogin").val(),
				senha_usuario: $("#txtSenha").val(),
				img_usuario: $("#base64Code").val(),
				status_usuario: $("#txtStatus").val(),
				obs_usuario: $("#txtOBS").val(),
			};

			formData = JSON.stringify(formData);
			xhr.onload = function () {
				const Resposta = document.getElementById("Resposta");
				Resposta.innerHTML = this.responseText;
			};

			xhr.open("POST", "CadastrarUsuario.php", formData);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.send(formData);

			xhr.onreadystatechange = function () {
				console.log(formData);
			};
		});

		$("#BtoAlterar").click(function () {
			console.log("Cliquei no botão btoAlterar");
			const xhr = new XMLHttpRequest();

			var formData = {
				id_usuario: $("#txtID").val(),
				nome_usuario: $("#txtNome").val(),
				login_usuario: $("#txtLogin").val(),
				senha_usuario: $("#txtSenha").val(),
				img_usuario: $("#base64Code").val(),
				status_usuario: $("#txtStatus").val(),
				obs_usuario: $("#txtOBS").val(),
			};

			formData = JSON.stringify(formData);
			xhr.onload = function () {
				const Resposta = document.getElementById("Resposta");
				Resposta.innerHTML = this.responseText;
			};

			xhr.open("POST", "AlterarUsuario.php", formData);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.send(formData);

			xhr.onreadystatechange = function () {
				console.log(formData);
			};
		});

		$("#BtoExcluir").click(function () {
			console.log("Cliquei no botão btoExluir");
			const xhr = new XMLHttpRequest();

			var formData = {
				id_usuario: $("#txtID").val(),
				nome_usuario: $("#txtNome").val(),
				login_usuario: $("#txtLogin").val(),
				senha_usuario: $("#txtSenha").val(),
				img_usuario: $("#base64Code").val(),
				status_usuario: $("#txtStatus").val(),
				obs_usuario: $("#txtOBS").val(),
			};

			formData = JSON.stringify(formData);
			xhr.onload = function () {
				const Resposta = document.getElementById("Resposta");
				Resposta.innerHTML = this.responseText;
			};

			xhr.open("POST", "ExcluirUsuario.php", formData);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.send(formData);

			xhr.onreadystatechange = function () {
				console.log(formData);
			};
		});

		$("#pesquisa").click(function () {
			console.log("Cliquei no botão btoExluir");
			const xhr = new XMLHttpRequest();

			var formData = {
				id_usuario: $("#txtID").val(),
				nome_usuario: $("#txtNome").val(),
				login_usuario: $("#txtLogin").val(),
				senha_usuario: $("#txtSenha").val(),
				img_usuario: $("#base64Code").val(),
				status_usuario: $("#txtStatus").val(),
				obs_usuario: $("#txtOBS").val(),
			};

			formData = JSON.stringify(formData);
			xhr.onload = function () {
				const Resposta = document.getElementById("Resposta");
				Resposta.innerHTML = this.responseText;
			};

			xhr.open("POST", "PesquisarUsuario.php", formData);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.send(formData);

			xhr.onreadystatechange = function () {
				console.log(formData);
			};
		});
	});
});
