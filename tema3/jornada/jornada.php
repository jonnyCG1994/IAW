
<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
//generamos un array con todos los equipos
$equipos = ["Real Madrid", "Real Betis", "Real Sociedad", "Villarreal", "FC Barcelona", "Sevilla",
    "Getafe", "Valencia", "Cádiz", "Granada", "CA Osasuna", "Atlético de Madrid", "Celta de Vigo",
    "Eibar", "Huesca", "Elche", "Alavés", "Levante", "Athletic Club", "Real Valladolid"];

//Mezclamos el array anterior 
shuffle($equipos);
echo '--------------APARTADO A) -------------';
echo "<h5> LOCALES </h5> ";

//con "FOR" establecemos un contandor delimitado a 10 y lo aplicamos al array anterior
//generando una variable nueva (locales) donde se guardarán los datos del array

//CORRECCIÓN
//LAS CARPETAS SE CREAN CON FC:
//<editor-fold defaultstate="collapsed" desc="Apartado A">
  //$equipos = ["Real Madrid", "Real Betis", "Real Sociedad", "Villarreal", "FC Barcelona", "Sevilla",
  //"Getafe", "Valencia", "Cádiz", "Granada", "CA Osasuna", "Atlético de Madrid", "Celta de Vigo",
  //"Eibar", "Huesca", "Elche", "Alavés", "Levante", "Athletic Club", "Real Valladolid"];

 
 //* shuffle{$equipos};
 //* ¡OJO! para dividir el array y que coja un número concreto
 //* $locales=array_slice($equipos,0,10);
 //* $visitantes array_slice($equipos,10); no especificamos límite porque va a coger hasta el final
//echo "<h5> LOCALES </h5> ";
//var_dump($locales);
//echo "<h5> VISITANTES </h5> ";
//var_dump($visitantes);
// </editor-fold>
for ($contador = 0; $contador < 10;) {
    $locales[] = $equipos[$contador];
    $contador++;
}

var_dump($locales);
//Aquí seguimos la misma técnica que en el apartado anterior
echo "<h5> VISITANTES </h5> ";
for ($contador2 = 10; $contador2 < 20;) {
    $visitantes[] = $equipos[$contador2];
    $contador2++;
}
var_dump($visitantes);



echo '<br><br>--------------APARTADO B) -------------';
//CORRECCIÓN
////  <editor-fold defaultstate="collapsed" desc="Apartado B">
//$golesLocales=[rand(0.6),]
//aquí generamos dos array con un rand dentro de acada uno para que genere un número aleatorio 
//entre 0 y 6 para cada uno de los grupos
//GOLES LOCALES
//for($contador=0; $contador<10; $contador++){
        //golesLocales[$contador]=rand(0,6);
        //golesVisitantes[$contador]=rand(0,6);
        //}
// </editor-fold>

for ($contador3 = 0; $contador3 < 10;) {
    $golesLocales[] = rand(0, 6);
    $contador3++;
}

//GOLES VISITANTES    
for ($contador4 = 0; $contador4 < 10;) {
    $golesVisitantes[] = rand(0, 6);
    $contador4++;
}
echo "<h5> GOLES LOCALES </h5> ";
var_dump($golesLocales);
shuffle($golesLocales);
echo "<h5> GOLES VISITANTES </h5> ";
var_dump($golesVisitantes);
shuffle($golesVisitantes);

echo '<br><br>--------------APARTADO C) Y D) -------------';
// <editor-fold defaultstate="collapsed" desc="Apartado C">
// $tabla="<table border='1'><caption RESULTADO DE LA JORNADA</caption>";
// for ($p=0;$p<10; $p++){
// Atlético de Madrid  3-4  Real Betis
// $tabla .=<tr><td>$locales[$p]</td>"."<td>$golesLocales[$p] - $golesVisitantes[$p]</td>
// ."<td>$golesVisitantes[$p]</td>
// }
// </editor-fold>

//generamos la cabecera de la tabla
$tabla = "<table border=1px>";
$tabla .= "<tr>";
$tabla .= "<th>Local</th>";
$tabla .= "<th>Resultado</th>";
$tabla .= "<th>Visitante</th>";
$tabla .= "/tr>";


for ($index = 0; $index < 10;) {
    $tabla .= "<tr><td>$locales[$index]</td><td>$golesLocales[$index]" . " - "
            . "$golesVisitantes[$index]</td><td>$visitantes[$index]</td></tr>";
    $index++;
}
echo $tabla;

$tabla1 = "<table border=1px>";
$tabla1 .= "<tr>";
$tabla1 .= "<th>Local</th>";
$tabla1 .= "<th>Resultado</th>";
$tabla1 .= "<th>Visitante</th>";
$tabla1 .= "/tr>";
for ($index1 = 0; $index1 < 10;) {
    $tabla1 .= "<tr><td style=\"text-align:center;\"><img align=\"right\" src=\"escudosEquipos\\$locales[$index1].jpg\" width= \"50\" height=\"50\"/>$locales[$index1]</td><td style=\"text-align:center; background-color:black; color:white\">$golesLocales[$index1] - $golesVisitantes[$index1]" . " </td><td style=\"text-align:center;\"><img align=\"left\" src=\"escudosEquipos\\$visitantes[$index1].jpg\" width= \"50\" height=\"50\"/>$visitantes[$index1]</td></tr>";
    $index1++;
}
$tabla1 .= "</table>";
echo $tabla1;

