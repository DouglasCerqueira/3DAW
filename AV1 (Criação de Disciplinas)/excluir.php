<?php
session_start();
include_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$nome = $_POST["nome"];

	$sql  = "DELETE FROM `disciplina` WHERE `nome`= '$nome'";

	$conn -> query($sql);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Excluir Disciplina</title>		
	</head>
	<body>
		<h1>Excluir Disciplina</h1>
		
		<form method="POST" action="excluir.php">
			<label>Nome: </label>
			<input type="text" name="nome"><br><br>
			
			<input type="submit" value="Excluir"><br><br>
			
			<a href = 'index.php'>Voltar</a>
		</form>
	</body>
</html>