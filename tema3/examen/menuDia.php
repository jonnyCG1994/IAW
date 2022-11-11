<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include "datosRestaurante.php";
include "cocina.php";
include "funcionesRestaurante.php";

echo "Rte.-->".restaurante."<--"."<br>";
//volvemos a declarar los foreach
echo "menú de hoy ".date("w")."<br>";
echo "PRIMER PLATO"."<br>";
//declaramos un array_rand para cada uno de los platos que queremos
//aleatorizar
$platoA=array_rand($primeros,2);
echo $platoA[0]."-".$platoA [1];
echo"</br>";
echo"</br>";
echo "SEGUNDOS PLATOS"."<br>";
$platoB=array_rand($segundos,2);
echo $platoB[0]."*".$platoB [1];
echo"</br>";
echo"</br>";
echo "POSTRES"."<br>";
$platoC=array_rand($postres,2);
echo $platoC[0]."-".$platoC [1];
echo"<hr></hr>";
echo "PRECIO MENU";



