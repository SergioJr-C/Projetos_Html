<html>
 <head>
  <title> Exercício 2 1b </title>
  <link rel="stylesheet" href="w3.css">
  
  <div class="w3-container w3-teal">
  <h1>Assinale as Opções Corretamente</h1>
   <p>Avaliação de Conhecimentos</p>
  </div>
  
 </head>
  <body>
  
  <h2>Qual cidade pertence ao Rio Grande do Sul </h2>
  
  <form action="19_Exercicio_1.php" method="post">
  <fieldset>
	<input type="checkbox" name="cidade[]" value="Campinas"/>Campinas<br/>
	<input type="checkbox" name="cidade[]" value="Cachoeira do Sul"/>Cachoeira do Sul<br/>
	<input type="checkbox" name="cidade[]" value="Santiago"/>Santiago<br/>
	<input type="checkbox" name="cidade[]" value="São vicente do Sul"/>São vicente do Sul<br/>
	<input type="checkbox" name="cidade[]" value="Rosário"/>Rosário<br/>
	</fieldset>
	
	<br>
	
	<h2> Brasília está localizado em qual região: </h2>
	<fieldset>
	<input type="radio" name="base" value="Região Centro-Oeste"/>Região Centro-Oeste<br/>
	<input type="radio" name="base" value="Região Norte"/>Região Norte<br/>
	</fieldset>
	<br>
	
	<h2>Escreva uma frase: </h2>
	<textarea name= "frase" rows="4" cols="40">
	Digite sua frase aqui. 
	Respeitando as regras de acentuação e pontuação.
	</textarea>
	<br>
	
	<h2>Digite os dados do estudante: </h2>
	<fieldset>
	<legend>Dados do Aluno: </legend>
	Nome: <input type="text" name="nome" id="nome" size="40" maxlength="100"/><br/>
	Turma: <input type="text" name="turma" id="turma" size="20" maxlength="100"/><br/>
	Data: <input type="date" name="data" id="data" size="20" maxlength="100"/><br/>
	</fieldset>
	
	<br>
	<h2>Digite seu usuário e senha:</h2><br>
	<fieldset>
	Nome: <input type="text" Placeholder="* Nome" name="usuario" size="40" maxlength="100"/><br/>
	Senha: 	<input type="password" Placeholder="* Senha" name="senha">
	</fieldset>
	<br><br>
	<input type="reset"  name="limpar" value="Limpar Respostas">
	&nbsp;&nbsp;&nbsp;&nbsp;
	<INPUT type="submit" name="enviar" value="Enviar">
	
	
</form>

  <div class="w3-container w3-red">
  <h5>Página feito por: </h5> 
  <p>Sérgio Júnior dos Santos de Almeida</p>
  <p>Estudante em Análise e Desenvolvimento de Sistemas</p>
</div>

  <style>
  
  body{
  background-color: hsla(89, 43%, 51%, 0.3);
  margin-left: 40px;
  margin-right: 40px;
  margin-bottom: 40px;
  }

  </style>
  </body>
</html>
