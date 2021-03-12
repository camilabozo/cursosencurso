<?php
    //Cambio la zona horaria del servidor e imprimo la fecha y hora actual en argentina al momento en que se abrió la página
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    echo date("d/m/Y h:i");

    $unNumero = 12;
?>

<!-- Imprimo una variable numérica que declaré anteriormente con php en una etiqueta html  -->
<h1> <?php echo $unNumero; ?> </h1>

<?php 
    //Imprimo html con php
    echo "<h1>Hola HTML con PHP</h1>";

    $unNumeroAleatorio = random_int(1,10);

    echo "número aleatorio entre 1 y 10: ".$unNumeroAleatorio;

    if ($unNumeroAleatorio < 5){
        echo "<body bgcolor='#00FF00'>";
    }else{
        echo "<body bgcolor='#FF0000'>";
    }

    function sumaDeAleatorios($unNumeroAleatorio, $otroNumeroAleatorio){
        return $unNumeroAleatorio + $otroNumeroAleatorio;
    }

    echo "<br>";

    $suma = sumaDeAleatorios($unNumeroAleatorio, $otroNumeroAleatorio);

    echo "La suma de ".$unNumeroAleatorio." y ".$otroNumeroAleatorio. " es de ".$suma;

?>



