<?php
    $megasena = array(47,29,42,04,27,21);
    sort($megasena);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo min($megasena) . "<br>";
            echo max($megasena) . "<br>";
        ?>

        <pre>
        <?php 
            print_r($megasena);   
        ?>
        </pre>
    </body>
</html>