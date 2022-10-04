<?php
session_start();
include_once("conexao.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $periodo = $_POST["periodo"];
        $idPreRequisito = $_POST["idPreRequisito"];
        $creditos = $_POST["creditos"];

        $nomeA = $_POST["nomeA"];
        $periodoA = $_POST["periodoA"];
        $idPreRequisitoA = $_POST["idPreRequisitoA"];
        $creditos = $_POST["creditos"];

        if($conn->connect_error){
            die("Conexao com banco de dados falhou.");
        }

        if ($nomeA != "" || $nomeA != NULL)
        {
            $sql = "UPDATE `disciplina` SET `nome` = '$nomeA'  WHERE `nome` = '$nome'";
            $result = $conn->query($sql);
        } 
        else 
        {
            if ($periodoA != "" || $periodoA != NULL)
            {
                $sql = "UPDATE `disciplina` SET `periodo` = $periodoA WHERE `periodo` = $periodo";
                $result = $conn->query($sql);
            } 
            else 
            {
                if ($idPreRequisitoA != "" || $idPreRequisitoA != NULL)
                {
                    $sql = "UPDATE `disciplina` SET `idPreRequisito` = '$idPreRequisitoA'  WHERE `idPreRequisito` = '$idPreRequisito'";
                    $result = $conn->query($sql);
                } 
                else
                {
                    if ($creditos != "" || $creditosA != NULL)
                    {
                        $sql = "UPDATE `disciplina` SET `creditos` = '$creditosA'  WHERE `creditos` = '$creditos'";
                        $result = $conn->query($sql);
                    } 
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Alterar Disciplina</title>		
	</head>
	<body>
    <h1> Alterar Disciplina </h1>
    <form action="alterar.php" method="POST">
        <fieldset>
            <label for="nome">Nome da Disciplina: </label>
            <br><input type="text" id="nome" name="nome">

            <br><br><label for="nomeA">Nome da Disciplina NOVA: </label>
            <br><input type="text" id="nomeA" name="nomeA">

            <br><br><label for="periodo">Periodo: </label>
            <br><input type="text" id="periodo" name="periodo">

            <br><br><label for="periodoA">Periodo NOVO: </label>
            <br><input type="text" id="periodoA" name="periodoA">

            <br><br><label for="idPreRequisito">ID de Pré-Requisito: </label>
            <br><input type="text" id="idPreRequisito" name="idPreRequisito">

            <br><br><label for="idPreRequisitoA">ID Pré-Requisito NOVO: </label>
            <br><input type="text" id="idPreRequisitoA" name="idPreRequisitoA">

            <br><br><label for="creditos">Creditos: </label>
            <br><input type="text" id="creditos" name="creditos">

            <br><br><label for="creditosA">Creditos NOVO: </label>
            <br><input type="text" id="creditos" name="creditos"><br><br>

            <input type="submit" value="Enviar" id="button">

            <br><br><a href = 'index.php'>Voltar</a>
        </fieldset>
    </form>
    </body>
</html>