<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

//Ponemos todos los platos que tiene nuestro restaurante
include "cocina.php";
include "datosRestaurante.php";
//Aquí empezamos a preparar la carta
echo restaurante."<br>";
echo "Lista de precios"."<br>";
echo "<hr></hr>";
echo"PRIMEROS PLATOS"."<br>";
//Declaramos un foreach para cada plato
foreach ($primeros as $primer => $precioPrimero) {
//dentro de cada foreach, especificamos las partes que queramos que se repitan
echo str_pad("-",10,"-",2).str_pad($primer,25,"-",2).$precioPrimero."€"."<br>";


}
echo"</br>";
echo "SEGUNDOS PLATOS"."<br>";

foreach ($segundos as $segund=>$precioSegundo){
    echo $segund.str_pad("-",25,"-",2).$precioSegundo."€"."<br>";


}
echo"</br>";
echo "POSTRES"."<br>";
foreach ($postres as $postr=>$precioPostre){
      echo $postr.str_pad("-",25,"-",2).$precioPostre."€"."<br>";

}
echo"</br>";
echo"</br>";
echo "Abierto desde ". $horaApertura." hasta las ".$horaCierre;

