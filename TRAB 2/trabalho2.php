<?php
$ehPost=true;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST["nome"];
    $mat = $_POST["matricula"];
    $av1 = $_POST["av1"];
    $av2 = $_POST["av2"];
    $media = ($av1 + $av2) / 2;
    $arquivoAluno = fopen("Alunos.txt", "a");
    $txt = "nome;matricula;av1;av2;media\n";
    fwrite($arquivoAluno, $txt);
    $txt = $nome . ";" . $mat . ";" . $av1 . ";"  . $av2 . ";" . $media . ";" . "\n";
    fwrite($arquivoAluno, $txt);
    fclose($arquivoAluno);
} else {
    $ehPost = false;
}
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário para Calcular a Média</title>
</head>
<body>
    <form method="POST">
        <fieldset>
            <label>Nome</label>
            <br>
            <input type="text" name="nome" >
            <br>
            <br>
            <label>Matricula</label>
            <br>
            <input type="text" name="matricula" >
            <br>
            <br>
            <label>AV1</label>
            <br>
            <input type="text" name="av1">
            <br>
            <br>
            <label>AV2</label>
            <br>
            <input type="text" name="av2">
            <br>
            <br>
            <button type="submit">Enviar</button>
        </fieldset>
    </form>
</body>
</html>