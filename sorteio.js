	window.onload = init;
	var numSorteio;
	function init(){
		numSorteio = Math.ceil(Math.random() * 100);	
		var botao = document.getElementById("asorteio");	
		botao.onclick = sorteio;
	}
	
		function sorteio(){		
		for(var i=1; i < 4; i++){
			numSorteio = Math.ceil(Math.random() * 100);
			var num = (window.prompt("Digite um número para sortear \n São um total de 3 tentativas!"));
			if(num == numSorteio){
				alert("Você acertou! Parabéns! O Número "+num+" é igual a"+ numSorteio);
			}else{
				/* numSorteio = Math.ceil(Math.random() * 100);
				var num = (window.prompt("Digite um número para sortear \n São um total de 3 tentativas!")); */
				alert("Você errou, o número é: " +numSorteio);
				
			}
			alert(i+"° tentativa realizada!");
				alert("Tente Novamente!");
			
		}	
}



	