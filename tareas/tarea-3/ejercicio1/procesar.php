<?php
include("funcion.php");
$cadena = $_GET['cadena'];
echo "Cadena recibida: " . $cadena, "<br>";
echo "La palabra mas larga es: " . PalabraMasLarga($cadena);
?>