<html>
    <head>
        <meta charset="UTF-8">
    </head>
<?php

    $suaIdade = 11;

    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;
    
    if ($suaIdade < $idadeCrianca) {
        
        echo "Criança";
        
    } else if ($suaIdade < $idadeMaior){
        
        echo "Adolecente";
        
    } else if($suaIdade < $idadeMelhor){
        
        echo "Adulto";
        
    } else
    
        echo "Idoso";
        
        echo "<br/>";
        
        echo ($suaIdade < $idadeMaior)?"Menor de idade":"Maior de idade";
        
        echo "<br/>"; 
    /////////////////////////////////////////////////////////////////////////////////
    
    $diaDaSemana = date("w");
    
    switch ($diaDaSemana) {
        
        case 0:
            echo "Domingo";
        break;
        
        case 1:
            echo "Segunda-feira";
        break;
        
        case 2:
            echo "Terça-feira";
        break;
        
        case 3:
            echo "Quarta-feira";
        break;
        
        case 4:
            echo "Quinta-feira";
        break;
        
        case 5:
            echo "Sexta-feira";
        break;
        
        case 6:
            echo "Sábado";
        break;
        
        default:
            echo "Data Invalida!";
        break;
    }
    echo "<br/>";
    /////////////////////////////////////////////////////////////////////
    //Contador
    
    for($i = 0; $i < 10; $i++){
       echo $i . "<br/>" ;
    }
    
     for($i = 0; $i < 100; $i+=5){  //soma i de 5 em 5
       
        if ($i > 20 && $i < 100) continue;
       
        if ($i === 90) break;
       
        echo $i . "<br/>" ;
    }
    
    ///////////////////////////////////////////////////////////
    
    echo "<select>";
    
    for ($i = date("Y"); $i >= date("Y")-40 ; $i--) {
         
         echo '<option value="' .$i.'">' .$i.'</option>';
    }
    
    echo "</select>";
    echo "<br/>";
    /////////////////////////////////
    //FOREACH (PARA CADA) percorre array e coleções
    
    $meses = array(
        "Janeiro", "Fevereiro", "Março",
        "Abril", "Maio", "Junho", "Julho",
        "Agosto", "Setembro", "Outubro",
        "Novembro", "Dezembro"
    );
    foreach ($meses as $mes) {
        
        echo "O mês é: ".mes."<br/>";
    }
   ///////////////////////////////////////////////////////////////
   //Formulario
    if (isset($_GET)) {
        
        foreach ($_GET as $key => $value) {
            
            echo "Nome do Campo: " . $key . "<br/>";
            
            echo "Valor do Campo: " . $value;
            
            echo "<hr/>";
        }
    }
    
?>
  <form>
        <input type="text" name="nome">
        <input type="date" name="nascimento">
        <input type="submit" value="Enviar">
        
    </form>
 

</html>