<?php


  //almacenamos el día de la semana (en número)
  $diaSemanaNumero=date('w');

  //usamos un switch
  switch ($diaSemanaNumero) {
  case 0: echo'Domingo';
  break;
  case 1: echo'Lunes';
  break;
  case 2: echo'Martes';
  break;
  case 3: echo'Miercoles';
  break;
  case 4: echo'Jueves';
  break;
  case 5: echo'Viernes';
  break;
  case 6: echo 'Sábado';
  }

/*
  //variantes....
  //sin break ... se ejecuta el resto! hasta un break
  $diaSemanaNumero = 2;
  //usamos un switch
  switch ($diaSemanaNumero) {
  case 0: echo'Domingo';
  case 1: echo'Lunes';
  case 2: echo'Martes';
  case 3: echo'Miercoles';
  case 4: echo'Jueves';
  break;
  case 5: echo'Viernes';
  case 6: echo 'Sábado';
  }
*/
/*  //dos cases seguidos para la misma sentencia
  $diaSemanaNumero = 0;
  //usamos un switch
  switch ($diaSemanaNumero) {

  case 1: echo'Lunes';
  break;
  case 2: echo'Martes';
  break;
  case 3: echo'Miercoles';
  break;
  case 4: echo'Jueves';
  break;
  case 5: echo'Viernes';
  case 0:;
  case 6: echo 'fin de semana';
  }
 */
/*
//default
$diaSemanaNumero = 70;
//usamos un switch
switch ($diaSemanaNumero) {

    case 1:
        echo'Lunes';
        break;
    case 2:
        echo'Martes';
        break;
    case 3:
        echo'Miercoles';
        break;
    case 4:
        echo'Jueves';
        break;
    case 5:
        echo'Viernes';
    default :
        echo 'fin de semana';
        break;
}

*/
