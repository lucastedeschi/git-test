<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 5.0</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            $campos [0][0] = '02K01';
            $campos [0][1] = 'Tecnologia Web II';
            $campos [0][2] = 'Segunda';
            $campos [0][3] = 'Charles';
            $campos [1][0] = '02J01';
            $campos [1][1] = 'Linguagem de Programação I';
            $campos [1][2] = 'Terça';
            $campos [1][3] = 'João';
            $campos [2][0] = '02K01';
            $campos [2][1] = 'Linguagem de Programação I';
            $campos [2][2] = 'Quarta';
            $campos [2][3] = 'Charles';
            
            echo"<table><tr><th>Turma</th><th>Disciplina</th><th>Semana</th><th>Professor</th></tr>";
            for($i=0;$i<=2;$i++){
                echo"<tr>";
                $vet = $campos[$i];
                    for($j=0;$j<=3;$j++){
                        echo"<td> $vet[$j] </td>";
                    }
                echo"</tr>";
            }
            echo"</table>"
        ?>
    </body>
</html>

