<?php
    $cadena = $_GET['cadena'];
    echo $cadena;
    echo "<br>";
    $palabras = explode(" ", $cadena);
    for($i = count($palabras)-1; $i >= 0; $i--){
        echo "$palabras[$i] ";
    }
    echo "<br>";

    for($i = strlen($cadena)-1; $i >= 0; $i--){
        echo $cadena[$i];
    }
?>
