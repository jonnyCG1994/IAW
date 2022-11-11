<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$entrada = 4;
$contador = 1;
$resultado = 0;
for ($index = 1; $index <=($entrada); $index++) {
        echo "vuelta bucle 1:".$index;
    for ($index1 = 1; $index1 <=($index); $index1++) {
        $contador = $contador + 2;
        echo "vuelta 2:".$index1;
        if ($entrada-1 == $index) {
            $resultado = $resultado + $contador;
        }
    }
}

echo $resultado;
