	window.onload = init;
	
	function init(){
	var botao = document.getElementById("bmudacor");	
	botao.onclick=mudaCorDeFundo;
	}
	
	
	function mudaCorDeFundo(){
		document.body.style.backgroundColor = "black";
	}