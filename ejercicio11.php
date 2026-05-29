<?php

//Ejercicio 11: Escribe una función llamada invertirCadena que tome una cadena como parámetro y devuelva la cadena invertida. Por ejemplo, si se pasa la cadena "Hola", la función debe devolver "aloH".
//Complejidad: ALTA (3 puntos)

//Pista: Puedes usar la función strlen para obtener la longitud de una cadena. Por ejemplo, strlen("Hola") devolvería el valor 4.

function invertirCadena($cadena) {
    $invertida = "";
    for ($i = strlen($cadena) - 1; $i >= 0; $i--) {
        $invertida .= $cadena[$i];
    }
    return $invertida;
}