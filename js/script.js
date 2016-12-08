function validarCadastro(){
	var nome = form1.nome.value;
	var idade = form1.email.value;
	var cpf = form1.cpf.value;

	if (nome == ""){
		alert("Preencha o campo com seu nome");
		fomr1.nome.focus();
		return false;
	}
}

function alteraMaiusculo(){
	
	document.getElementById("uppCase").onblur = function() {altera()};
	
	function altera(){
	var valor = document.getElementById("campo").texto;
	
		var novoTexto = valor.value.toUpperCase();
		valor.value = novoTexto;
	}
}



var plus = false;
document.getElementById("textoinfo").ondblclick = function() {more()};

function more() {
    document.getElementById("textoinfo").style.fontSize = "20px";
    plus = true;
    if (plus == true) {
    	document.getElementById("textoinfo").ondblclick = function() {less()};
    }

 }

function less() {
    document.getElementById("textoinfo").style.fontSize = "17px";
    plus = false;
      if (plus == false) {
    	document.getElementById("textoinfo").ondblclick = function() {more()};
    }
}


