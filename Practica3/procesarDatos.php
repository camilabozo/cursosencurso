<?php 

if(isset($_POST['texto'])){
    $elTextoObtenido = $_POST['texto'];
    echo $elTextoObtenido;
}else{
    $elTextoObtenidoPorGET = $_GET['texto'];
    echo $elTextoObtenidoPorGET;    
}


?>