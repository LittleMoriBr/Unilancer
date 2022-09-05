$(function () {
	debuga = $("#Resposta");
	enviar = $("#valval");
	action = "";

	function carregando(datas) {
		debuga.empty().html("Carregando...");
	}

	function sucesso(datas) {
		debuga.empty().html(datas);
	}

	function errosend(datas) {
		debuga.empty().html("Erro ao enviar os dados");
	}

	$.ajaxSetup({
		type: "POST",
		beforeSend: carregando,
		error: errosend,
		success: sucesso,
	});

	enviar.submit(function () {
		return false;
	});

	$("#Avaliacoes").click(function () {
		console.log("teste");
		debuga.html("apertei");

		action = "Avaliacoes.html";

		$.ajax({
			url: action,
			data: {},
		});
	});
});
