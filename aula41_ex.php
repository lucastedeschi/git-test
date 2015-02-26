<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercícios</title>
    </head>
    <body>
        <?php 
            $P1 = 6.0;
            $M1 = 4.0;
            $M2 = 5.0;
            $Proj1 = 5.0;
            $Proj2 = 5.0;
            $Proj3 = 5.0;
            $Proj4 = 5.0;
            $TrabF = 5.0;
            $Proc = 5.0;
            $PF = 4.0;
            $MI = ((30*$P1 + 10*$M1 + 10*$M2 + 5*$Proj1 + 5*$Proj2 + 5*$Proj3 +5*$Proj4 + 10*$TrabF + 20*$Proc)/100); 
            
            if ($MI >= 7.5){
                $MF = $MI;
                echo "Aprovado sem Prova Final<br>Parabéns!!! Boas Férias";
            }
            else{
                $MF = (($PF + $MI)/2);
                if ($MF >= 5.0){
                echo "Aprovado com Prova Final<br>Agora já pode descansar tranquilo";
                }    
                else{
                    echo "Reprovado<br>Não foi dessa vez. Ano que vem tem mais TWII";
                } 
                echo "<br>Média Intermediária: $MI<br>Media Final: $MF";
            }
        ?>
    </body>
</html>
