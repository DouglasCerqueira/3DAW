<?php
    $ehGET = true;
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodeDados = "3dawmanhacopa";
    $retorno = "";    
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $nome = $_GET["nome"];
        $conn = new mysqli ($servidor, $usuario, $senha, $bancodeDados);
        $sql="SELECT * FROM `jogo` WHERE `selecao1` = '$nome' OR `selecao2` = '$nome'";
        
        $result=$conn->query($sql);
        $vetJogos[] = array();
        
        $i = 0;
        
        While ($linha = $result->fetch_assoc()){
            $vetJogos[$i] = $linha;
            $i++;
        }

        if ($result=true){
            $retorno=json_encode($vetJogos);

        } else {
            $retorno=json_encode("Erro");
        }
    } else {
        $ehGET = false;
    }
echo $retorno;
?>
