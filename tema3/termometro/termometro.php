<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$meses = array("Enero"=>'12', "Febrero"=>'13', "Marzo"=>'17', "Abril"=>'19',
"Mayo"=>'25', "Junio"=>'31', "Julio"=>'34', "Agosto"=>'34', "Septiembre"=>'28',
"Octubre"=>'23', "Noviembre"=>'16', "Diciembre"=>'13');

foreach ($meses as $mes => $temperatura) {

      echo str_pad($mes,15,'-').">".str_repeat("<img src=\"barraTemp.PNG\"style=\"border: 1px
    solid black; width:10px; height:10px\"/>",$temperatura).$temperatura."ºC"."<br>";
      
}

    
    