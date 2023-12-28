<?php
//Primera forma para definir un array
$a = array('a','b','c','d','e');

echo $a[0];
echo $a[3];
echo "<br>";
echo $a[1];
echo "<br>";

echo "<h1> Recorrer con el ciclo for </h1>";
for($i=0; $i<count($a); $i++)
{
    echo $a[$i];
    echo "<br>";
}
echo "<br>";

echo "<h1>Recorrer con el ciclo foreach</h1>";
foreach($a as $elemento)
{
    echo $elemento;
    echo "<br>";
}
echo "<br>";

echo "<h1>Recorrer con el ciclo foreach indices</h1>";
foreach($a as $indice=>$elemento)
{
    echo $indice . "=>" . $elemento;
    echo "<br>";
}

//Segunda forma para definir un array
$letras2 = ["a","c","f"];
echo "<br>";
echo "<h1>Recorrer con el ciclo foreach indices</h1>";
foreach($letras2 as $indice=>$elemento)
{
    echo $indice ."=>". $elemento;
    echo "<br>";
}

//Tercera forma para definir un array
$letras3 = [0=>"a",1=>"b",3=>"c"];
echo "<br>";
echo "<h1>Recorrer con el ciclo foreach indices</h1>";
foreach($letras3 as $indice=>$elemento)
{
    echo $indice ."=>" . $elemento;
    echo "<br>";
}

?>