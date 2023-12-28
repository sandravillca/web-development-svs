<?php
$a=[];
$a["nombre"]="Juan";
$a["apellido"]="Perez";
$a["edad"]=30;
$a["telefono"]="12345678";
echo "<br>";

echo "<h1>Recorrer con el ciclo foreach indices</h1>";
foreach($a as $indice=>$elemento)
{
    echo $indice . "=>" . $elemento;
    echo "<br>";
}
?>