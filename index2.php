<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8"/>
    </head>
    <body>
        <?php

        //echo "Meu primeiro codigo <strong>PHP</strong>";
    
        $nome = "Raphael";
        //echo $nome;
        //var_dump ($nome); especifica o tipo da variavel 
        
        //variaveis
        $anoNascimento = "1991";
        $nomeCompleto = "Raphael Vasconcellos";
        $sobrenome = "Guimaraes";
        
        echo "Meu nome e " . $nomeCompleto;
        
        echo "<br/>";
        
       // unset ($nome);
        
        echo ($nome);
        echo "<br/>";
        if (isset($nome)){
            echo $nome;
        }
        
        echo "<br/>";
        $nomeCompleto = $nome . " " . $sobrenome;
        echo $nomeCompleto;
        
        ///////////////////////////////////
        $nome = "Raphael";
        $site = 'Vasconcellos';
        $ano = 1991;
        $salario = 400.99;
        $bloqueado = false;
        ///////////////////
        echo "<br/>";
        
        // Array (vetor)
        $frutas = array("abacaxi", "laranja", "manga");
        echo $frutas[2];
        echo "<br/>";
        
        //Objeto
        $nascimento = new DateTime();
        
        //var_dump($nascimento);
        /////////////////////////////////
        //resource
        $arquivo = fopen("index.php", "r");
        //var_dump($arquivo);
        
        $nulo = NULL; //ausencia de valor
        $vazio = ""; //reserva espaço na memoria
        
        ?>
    </body>
</html>

