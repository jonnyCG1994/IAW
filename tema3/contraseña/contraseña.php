<?php

/* escribir la función validaContraseña($contraseña): true/false 
 * la contraseña tiene que tener:
 * - longitud mínima de 8
 * - Mayúsculas y Minúsculas
 * - números
 * - símbolos especiales
 */
//strlen
//substr


function validaContraseña($contraseña) {
    if (strlen($contraseña)<=8){
     return false;
        }
            
    if(!preg_match('`[a-zñ]`', $contraseña)){
        return false;
    }
            
    if(!preg_match('`[A-ZÑ]`', $contraseña)){
        return false;
    }
            
    if(!preg_match('`[0-9]`', $contraseña)){
        return false;
    }
    if(!preg_match('`[!.$%&/()=@#]`', $contraseña)){
        return false;
    }
    return true;
}

$listaContraseñas = ['hola','11111111111','Hola_comoEstas',"Mi#contraseña@2","holamundo"];

//Recorremos la $listaContraseñas y mostramos en pantalla si es buena o no

foreach ($listaContraseñas as $contraseña) {
    echo "la contraseña $contraseña es ";
    if (validaContraseña($contraseña)) {
        echo 'Buena';
    }
    else {
        echo 'Mala';
    }
    echo '<br>';
}