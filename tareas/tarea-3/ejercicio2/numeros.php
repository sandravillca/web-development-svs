<?php
$numeros = array();
for($i=0; $i<10; $i++){
    $numeros[$i] = rand(1,20);    
}
echo "<h1>Array de numeros</h1>";
echo "<br>";
foreach($numeros as $n){
    echo "$n, ";
}

$numeros_pares = array();
$numeros_impares = array();

foreach($numeros as $numero)
{
    if($numero%2 == 0){
        array_push($numeros_pares,$numero);
    }
    else{
        array_push($numeros_impares,$numero);
    }
}

echo "<h1>Numeros impares</h1>";
echo "<br>";
foreach($numeros_impares as $n){
    echo "$n, ";
}
echo "<br>";

echo "<h1>Numeros pares</h1>";
echo "<br>";
foreach($numeros_pares as $n){
    echo "$n, ";
}

?>