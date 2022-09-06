<?php

$nomes = ["Sandro", "Moreira", "Ritch", "Fernando"];
$notas = [4.3, 8.7, 9.8, 1.9]; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1360, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
</head>
<body>
<table>
    <tr>
    <td><b>Nome</b></td>
    <?php
        for ($i = 0; $i < 4; $i++)
        {
            echo "<td>{$nomes[$i]}</td>"; 
        }
    ?>
    </tr>
    <tr>
    <td><b>Nota</b></td>
    <?php
        for($i = 0; $i < 4; $i++){
            echo "<td>{$notas[$i]}</td>" ;
        }
    ?>
    </tr>
</table>
</body>
</html>