<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $_dia = "segunda";
            // Condição Or "Ou"
            if($_dia == "sabado" || $_dia == "domingo"){
                echo "Pode descansar." . "<br>";
            }
            else{
                echo "Dia de trabalho." . "<br>";
            }

            // Condição and "E"
            $idade = 17;
            $sexo = "feminino";
            
            if($idade >= 18 && $sexo == "feminino"){
                echo "Pode entrar";
            }
            else{
                echo "Não pode entrar na festa.";
            }
        ?>
    </body>
</html>