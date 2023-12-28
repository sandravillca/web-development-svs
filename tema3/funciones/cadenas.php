<?php
include("funciones.php");
$cadena = $_GET['cadena'];

echo "Cadena recibida: " .$cadena;
echo "<br>";
echo "Cadena en mayúsculas: ".strtoupper($cadena);
echo "<br>";
echo "Cadena en minúsculas: ".strtolower($cadena);

//Separar la cadena por los espacios. Se crea el array $palabras
$palabras = explode(" ",$cadena);
echo "<br>";
echo "Palabras en la cadena: ".count($palabras);
echo "<br>";

//Recorrer el array $palabras con foreach
foreach($palabras as $palabra)
{
    echo $palabra;
    echo "<br>";
}

$separadocomas = implode('-',$palabras);
echo $separadocomas . "<br>\n";

$resultado = sprintf("8x5=%d<br>",8*5);
echo $resultado,"<br>";

echo substr($cadena,6,3),"<br>";

if(chop("Cadena\n\n")=="Cadena")
    echo "Iguales<br><br>";

echo strpos($cadena,"hola"),"<br><br>";
echo str_replace("a","u",$cadena),"<br>";

echo "La primera letra es: ", PrimeraLetra($cadena);
?>

