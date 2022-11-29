<?php
     $servidor = "localhost";
     $user = "root";
     $pass = "";
     $banco = "3dawmanhaav2";
     $retorno = "";
    
    if($_SERVER["REQUEST_METHOD"]=="GET")
    {    
        $conn = new mysqli ($servidor, $user, $pass, $banco);
        $sql="SELECT * FROM `carros`";
        
        $result=$conn->query($sql);
        $carros[] = array();
        
        $i = 0;
        
        While ($linha = $result->fetch_assoc())
        {
            $carros[$i] = $linha;
            $i++;
        }

        if ($result=true)
        {
            $retorno=json_encode($carros);

        } 
        else 
        {
            $retorno=json_encode("Erro");
        }
    }
echo $retorno;
?>
