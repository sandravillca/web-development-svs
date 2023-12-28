<?php
function PalabraMasLarga($cadena)
{
    $palabras = explode(" ", $cadena);
    $palabraMasLarga = "";  // Inicializar en vacio para la primera comparación
    foreach($palabras as $palabra){
        if(strlen($palabra) > strlen($palabraMasLarga)){
            $palabraMasLarga = $palabra;
        }
    }
    return $palabraMasLarga;
}

?>