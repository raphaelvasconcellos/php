<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8"/>
    </head>
    <body>
        <?php
        
        $nome = (int)$_GET["a"];
        
        //var_dump($nome);
        
        $ip = $_SERVER["REMOTE_ADDR"];
        
        //echo $ip;
        
        //////////////////////////////
        //Função
        $nome = "Raphael";
        
        function teste() {
            global $nome;
            echo $nome;
            
        }
        
        function teste2() {
            $nome = "Joao";
            echo $nome . " ". "Agora no teste2";
        }
        
        teste();
        echo "<br/>";
        
        teste2();
        echo "<br/>";
        //operadores
            $nome = "raphael"; //igual
            echo $nome . " mais alguma coisa";  //ponto
            echo "<br/>";
            $nome .= " Treinamento";  //ponto + igual
            echo $nome;
            echo "<br/>";
            
            $valorTotal = 0;
            
            $valorTotal += 100;
            
            $valorTotal += 25;
            
            $valorTotal *= .9;
            
            echo $valorTotal;
            echo "<br/>";
            
            $a = 10;
            $b = 2;
            
            echo $a + $b;
            echo "<br/>";
            
            echo $a - $b;
            echo "<br/>";
            echo $a * $b;
            echo "<br/>";
            echo $a / $b;
            echo "<br/>";
            echo $a % $b; //resto da divisao
            
            echo "<br/>";
            
            $a = 30;
            $b = 55;
            
            var_dump ($a > $b);
            echo "<br>";
            var_dump ($a < $b);
            echo "<br>";
            var_dump($a == $b); //comparação
            echo "<br>";
            var_dump($a === $b);
            echo "<br>";
            var_dump($a != $b);
            echo "<br>";
            var_dump($a !== $b);
            
            /////////////////////////
            //INCREMENTO E DECREMENTO
            
            $a = 10;
            echo $a++;
            echo "<br>";
            echo --$a;
            echo "<br>";
            echo $a;
            
            //////////////////////////////
            
            $resultado = (10 + 3) / 2;
            echo "<br>";
            //echo $resultado;
            
            $resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;
            var_dump($resultado);
            echo "<br>";
            $resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;
            var_dump($resultado);
            
            
            echo "<br>";
            
            $nome = "Hcode"; //verifica se tem variavel
            
            $nome2 = 'Treinamento'; //não verifica se tem variavel
            
            var_dump($nome, $nome2);
            
            echo "<br>";
            
            echo "ABC $nome";
            echo "<br>";
            echo 'ABC $nome';
            echo "<br>";
            //////////////////////////////////////////
            
            $nome = "joaozinho balacerta";
            echo strtoupper ($nome); // transforma tudo em MAIUSCULO
            echo "<br/>";
            echo $nome;
            echo "<br/>";
            
            $nome = strtolower($nome); // transforma em minusculo
            echo "<br/>";
            echo $nome;
            
            echo "<br/>";
            echo ucwords($nome); // Primeira letra de cada palavra fica maiuscula
            
            echo "<br/>";
            echo ucfirst($nome); //Primeira Letra Maiuscula
            echo "<br/>";
            
            $empresa = "Hcode";
            
            $empresa = str_replace("o", "0", $empresa);
            echo $empresa;
            
            echo "<br/>";
            
            $empresa = str_replace("o", "0", $empresa);
            $empresa = str_replace("e", "3", $empresa);
            echo $empresa;
            
            echo "<br/>";
            
            $frase = "A repetição é a mãe da retenção.";
            
            $q = strpos($frase,  "mãe");
            
            var_dump($q);
            echo "<br/>";
            
            ////////////////////////////////////////
            // INCLUDE E REQUIRE
           
            function somar($a, $b){
                return $a + $b;
            }
            
            //include "/pasta/nome-do-arquivo"      (para chamar a função em outro arquivo)
            //require "/pasta/nome-do-arquivo"      (obriga a existencia do arquivo) 
            
            $resultado = somar (10, 20);
            echo $resultado;
            
            
            
            
        ?>
    <body/>
</html>
