<?php
    $salada = array("Maçã", "Abacaxi", "Laranja");
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo $salada[0] . "<br>";
            echo $salada[1] . "<br>";
            echo $salada[2] . "<br>";
            $salada[] = "Abacate";
            $salada[] = "Morango";
            echo $salada[3] . "<br>";
            echo count($salada) . "<br>";
        ?> 
        <pre>
        <?php
            print_r($salada) . "<br>";
        ?>
        </pre>
    </body>
</html>