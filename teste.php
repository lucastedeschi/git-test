<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 5.1</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php include 'operacoes.php' ?>
        <?php   
           $z = 5;
           $w = 7;

           $resSo = soma($z, $w);
           echo "Soma: $z + $w = $resSo";

           $resSu = subtracao($z, $w);
           echo "<br>Subtração: $z - $w = $resSu";

           $resMu = multiplicacao($z, $w);
           echo "<br>Multiplicação: $z * $w = $resMu";

           $resDi = divisao($z, $w);
           echo "<br>Divisão: $z / $w = $resDi";

        ?>
    </body>
</html>
