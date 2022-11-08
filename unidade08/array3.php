<?php
    $_salada = array("Laranja","Uva","Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
        
            // Verifica se o elemento existe dentro da array
            echo "Existe o elemento? " . in_array("Laranja", $_salada) . "<br>";
            // Retorna qual posição está o elemento dentro da array
            echo "Existe o elemento? " . array_search("Uva", $_salada) . "<br>";

        ?>
    </body>
</html>