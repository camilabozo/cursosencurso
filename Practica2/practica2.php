<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> 
            <?php 
            $vector = array("1" => "Camila", "2" => "Leandro", "3" => "Ailen");
            $otroNumeroAleatorio = random_int(1,3);
            echo $vector[$otroNumeroAleatorio]; 
            ?> 
        </title>
    </head>
    <body>
        <?php 
            include "pratica22.php";
        ?>
    </body>
</html>