<?php
session_start();
include_once("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$nome = $_POST["nome"];
    $periodo = $_POST["periodo"];
	$idPreRequisito = $_POST["idPreRequisito"];
	$creditos = $_POST["creditos"];

	$sql = "INSERT INTO `disciplina`(`nome`, `periodo`, `idPreRequisito`, `creditos`) VALUES ('$nome', '$periodo', '$idPreRequisito', '$creditos')";

	$conn -> query($sql);
	
}
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Criar Disciplina</title>		
	</head>
	<body>
		<h1>Criar Disciplina</h1>
		
		<form method="POST" action="criar.php">
			<label>Nome: </label>
			<input type="text" name="nome"><br><br>
			
			<label>Periodo: </label>
			<input type="periodo" name="periodo"><br><br>

			<label>Id de Pré-Requisito: </label>
			<input type="idPreRequisito" name="idPreRequisito"><br><br>
			
			<label>Créditos da Disciplina: </label>
			<input type="creditos" name="creditos"><br><br>

			<input type="submit" value="Cadastrar"><br><br>
			
			<a href = 'index.php'>Voltar</a>
		</form>
	</body>
</html>
