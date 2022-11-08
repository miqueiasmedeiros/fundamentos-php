<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo $salario * $meses . "<br>";
            echo $salario / 2 ."<br>";

            // Exponencial
            echo "Exponencial: " . pow(2,3) . "</br>";

            // Raiz Quadrada
            echo "Raiz Quadrada: " . sqrt(81) . "</br>";

            // Randômico Generica
            echo "Randomico: " . rand() . "</br>";

            // Randômico entre um intervalo
            echo "Randomico no intervalo " . rand(1,9) . "</br>";
            
            // Valor absoluto
            echo "Número absoluto: " . abs(-250);
        ?>
    </body>
</html>