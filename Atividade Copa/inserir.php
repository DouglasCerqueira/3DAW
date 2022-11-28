<?php
     $ehGET = true;
     $servidor = "localhost";
     $usuario = "root";
     $senha = "";
     $bancodeDados = "3dawmanhacopa";
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome = $_GET["nome"];
        $grupo= $_GET["grupo"];
        $tecnico= $_GET["tecnico"];
        
        $conn = new mysqli ($servidor, $usuario, $senha, $bancodeDados);
        $sql="INSERT INTO `selecao`(`nome`, `grupo`, `tecnico`, `pontos`) VALUES ('$nome', '$grupo', '$tecnico', 0)";
        $result=$conn->query($sql);
    } else {
        $ehGET = false;
    }
?>
