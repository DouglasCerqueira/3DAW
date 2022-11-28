<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "3dawmanha";
    $mensagem = "";

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $mat = $_GET["mat"];
        $conn = new mysqli ($servidor, $usuario, $senha, $banco);

        $sql="DELETE FROM `alunos` WHERE mat = '$mat'";

        $result=$conn->query($sql);

        echo $result;
        echo $sql;

        if ($result=true)
        {
            $mensagem="Sucesso";
        } 
        else 
        {
            $mensagem="Erro";
        }
    }
?>