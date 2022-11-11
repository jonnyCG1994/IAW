<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
//definimos cada uno de los array que vamos a utilizar
$personas=['Elver Galarga','Mina Botieso','Alex Cremento','Fermín Galarga','Alma Marcela Gozo','Jorge Nitales'];

$diasSemana=['lunes','martes','miércoles','jueves','viernes','sábado','domingo'];

$horas=['8:00','8:30','9:00','9:30','10:00','10:30','11:00','11:30','12:00','12:30','13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','18:30','19:00','19:30','20:00','20:30','21:00','21:30','22:00
'];

$lugares=['Mordor','La casa de tu prima','Jubilandia','Springfield','Hogwarts'];

//barajamos cada uno de los array con shuffle
shuffle($personas);
shuffle($diasSemana);
shuffle($horas);
shuffle($lugares);
//Aplicamos un foreach a cada uno de los array anteriores

foreach ($personas as $per){   
}
foreach ($diasSemana as $dias){
}
foreach ($horas as $hor) {
}
foreach ($lugares as $lug) {
}

//ejecutamos el echo
echo "Tiene usted cita con $per el $dias a las $hor en $lug, lleve protección";


