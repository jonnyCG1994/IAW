<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
//llamamos a las variables declaradas en cocina.php
include "cocina.php";
//Declaramos una funcion para cada uno de los platos.
function mediaPreciosPrimeros($primeros){
   $mediaPrimeros= array_sum($primeros)/count($primeros);
   echo $mediaPrimeros;
}
function mediaPreciosSegundos($segundos){
     $mediaSegundos= array_sum($segundos)/count($segundos);
   echo $mediaSegundos;
}

function mediaPreciosPostres($postres){
     $mediaPostres= array_sum($postres)/count($postres);
   echo $mediaPostres;
}