<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 4.2</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <h1>Exercício 1 - Primos</h1>
            <?php
                echo"<table><tr><th>ID</th><th>NOME</th><th>DESC</th></tr>";
                for($i=0;$i<7;$i++){
                    if($i%2 == 0){
                        echo"<tr><td>id</td><td>nome</td><td>desc</td></tr>";
                    }
                    else{
                        echo"<tr class='tab'><td>id</td><td>nome</td><td>desc</td></tr>";
                    }
                }
                echo"</table>";
            ?>
        <hr><br>
        <h1>Exercício 2 - Primos</h1>
            <?php 
                $x = 113; 
                $verifica = true;
                    if ($x == 1){
                        echo"$x não é primo";
                    }
                    elseif($x == 2){
                        echo"$x é primo";
                    } 
                    elseif($x % 2 == 0){
                        echo"$x não é primo";
                    } 
                    else{
                        for ($i = 3; $i < $x; $i = $i + 2){
                            if ($x % $i == 0){
                                $verifica = false;
                            } 
                        }
                    if ($verifica == false){
                        echo"$x não é primo";
                    }
                    else{
                        echo"$x é primo";
                    }
                    }   
            ?>
        <hr><br>
        <h1>Exercício 3 - Fibonacci</h1>
            <?php 
                $a = 0;
                $b = 1;
                $aux = 0;
                
                for ($i = 0; $i <= 50; $i++){
                    if ($i == 0){
                       echo "$a, ";
                    }
                      elseif($i == 1){
                          echo "$b, ";
                      }
                      else{
                        $aux = $a + $b;
                        echo "$aux, ";
                        $a = $b;
                        $b = $aux;
                    }
                }      
            ?>
    </body>
</html>
