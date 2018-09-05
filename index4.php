<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    
<?php

    $condicao = true;
    
    while ($condicao) {
        $numero = rand(1, 10);
        
        if ($numero === 3) {
            
            echo "TRES!!!";
            $condicao = false;
            
        }
        echo $numero . " ";
    }
    echo "<br/>";
    
    $total = 100;
    $desconto = 0.9;
    
    do {
        $total *= $desconto;
    } while ($total > 100);
    
    echo $total;
     echo "<br>/";
    //////////////////////////////////////
    // -- ARRAY --
    
    $carros [0][0] = "GM";
    $carros [0][1] = "Colbalt";
    $carros [0][2] = "Onix";
    $carros [0][3] = "Camaro";

    $carros [1][0] = "Ford";
    $carros [1][1] = "Fiesta";
    $carros [1][2] = "Fusion";
    $carros [1][3] = "Eco Sport";
    
    echo $carros [0][3];
    echo "<br>/";
    echo end($carros[1]);
    
    // --  ARRAY BI DIMENSIONAL --
    $pessoas = array();
    
    array_push($pessoas, array(
        'nome'=>'Joao',
        'idade'=>20
        ));
        
         array_push($pessoas, array(
        'nome'=>'Jose',
        'idade'=>25
        ));
        print_r($pessoas);
        echo "<br>/";
        //////////////////////////////////
        //   --   JSON   --
        
        echo json_encode ($pessoas);
         echo "<br>/";
         
        $json = '[{"nome":"Joao","idade":20},{"nome":"Jose","idade":25}]';
        
        $data = json_decode($json);
        
        var_dump($data);
        echo "<br>/";
        /////////////////////
        //     ARRAY CONSTANTES
        //define: ("constante","value")
        define("SERVIDOR","127.0.0.1");
        
        echo SERVIDOR;
        
        define("BANCO_DE_DADOS",[
            '127.0.0.1',
            'root',
            'password',
            'teste'
            
            ]);
        
        print_r(BANCO_DE_DADOS);
        echo "<br>";
        echo PHP_VERSION;
        
        echo "<br/>";
        echo DIRECTORY_SEPARATOR;
        
        
        
?>
</html>