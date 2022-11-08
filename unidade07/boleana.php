<?php
    $fumante = false;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        echo "É Fumante ?" . $fumante . "<br>";
        echo "É Booleana? " . is_bool($fumante); 

        ?>
    </body>
</html>