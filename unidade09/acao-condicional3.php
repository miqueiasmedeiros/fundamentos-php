<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $_idade = 19;
            $_maioridade = ($_idade >= 18)? "De maior" : "De menor";
            echo $_maioridade;
        ?>
    </body>
</html>