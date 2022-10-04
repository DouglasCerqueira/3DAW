<?php
    session_start();
    include_once("conexao.php");
    if($_SERVER["REQUEST_METHOD"] == "GET")
        {
        ?>

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listar UM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <header>
    <h1>Insira a Disciplina</h1>
    </header>

    <form action="listarUM.php" method="POST">
        
        <fieldset>
            
            <label for="nome">Nome da Disciplina</label><br>
            <input type="text" name="nome"><br>
            <input type="submit" value="Enviar">

        </fieldset>
    </form>
    <?php
    }elseif ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        include_once("conexao.php");

        $nome = $_POST["nome"];
        
        $sql ="SELECT * FROM `disciplina` WHERE `nome`= '$nome'";
        $result=$conn->query($sql);
        $row = $result->fetch_assoc();
        echo "Disciplina: " . $row["nome"] . " <br>Periodo: " .$row["periodo"]. " <br>ID PRÉ-REQ: " .$row["idPreRequisito"]. " <br>Creditos: " .$row["creditos"];
    }
        
        
    ?>

    <br><a href="index.php">Voltar</a>
    


</body>
</html>