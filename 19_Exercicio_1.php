<?php 
//recebendo os dados por post

//array de cidades selecionadas
$cidade = $_POST["cidade"];

//regiao
$base = $_POST["base"];

//frase
$frase = $_POST["frase"];

//nome do aluno
$nome = $_POST["nome"];

//turma
$turma = $_POST["turma"];

//data
$data = $_POST["data"];

//usuario
$usuario = $_POST["usuario"];

//senha
$senha = $_POST["senha"];


?>

 <!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Exercício 2 </title>

</head>
<body>
<Style>

table, th, td {
  border: 1px solid black;
   border-collapse: collapse;
}

th, td {
  padding: 15px;
  background-color:#dddddd;
}

th {
  text-align: left;
   background-color: #4dff4d;
}

table {
  border-spacing: 5px;
  background-color: #f2f2f2;
}

</Style>
<table style="width:100%">

<table>
  <tr>
    <th>Name</th>
    <th>Turma</th>
    <th>Data</th>
  </tr>
  <tr>
    <td><?php echo $nome; ?></td>
    <td><?php echo $turma; ?></td>
    <td><?php echo $_POST["data"] ?></td>
  </tr>
  </table><br>
  
  <table>
    <tr>
    <th>Usuário</th>
  </tr>
  <tr>
    <td><?php echo $usuario; ?></td>
  </tr>
  </table> <br>
  
      <table>
      <tr>
    <th>Frase</th>
  </tr>
  <tr>
    <td><?php echo $frase; ?></td>
  </tr>
  </table><br>
  
      <table>
      <tr>
    <th>Cidades Selecionadas: </th>
  </tr>
  <tr>
    <td><?php foreach ($cidade as $elemento){
        echo "$elemento<br>";
    }
     ?></td>
    </td>
  </tr>
  </table>
<br>

<table>
      <tr>
    <th>Região Selecionada</th>
  </tr>
  <tr>
    <td><?php echo $base; ?></td>
  </tr></table>
  
</body>
</html>