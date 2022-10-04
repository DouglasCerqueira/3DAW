<?php
session_start();
include_once("conexao.php");

    
    $sql="SELECT `nome`, `periodo`, `idPreRequisito`, `creditos` FROM `disciplina`";
    $result = $conn -> query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Listar</title>		
	</head>
	<body>
		<h1>Lista</h1>
        <?php
            while ($posicao = $result->fetch_assoc()) { 
                echo "<tr>";
                echo "<td>" . $posicao['nome'] . "</td><br>";
                echo "<td>" . $posicao['periodo'] . "</td><br>";
                echo "<td>" . $posicao['idPreRequisito'] . "</td><br>";
                echo "<td>" . $posicao['creditos'] . "</td><br><br>";
                echo "</tr>";
            }
        ?>
	
		<a href = 'index.php'>Voltar</a>
	</body>
</html>