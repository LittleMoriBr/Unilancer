//console.log("Entrou na pagina js");

$("#Info").click(function () {
  console.log("tuplac");

  var tuplac = "Informacoes";

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

$("#Portifolio").click(function () {
  console.log("tuplac");

  var tuplac = "Portifolio";

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

$("#Avaliacoes").click(function () {
  function Aval() {
    console.log("tuplac");

    var tuplac = "Avaliacoes";

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
  }
});

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
