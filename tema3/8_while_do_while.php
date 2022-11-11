<?php

//-----------------------------------------------------------------
echo" 1 ----  while    ----------------------------<br>";
//-----------------------------------------------------------------
//vamos a tirar el dado MIENTRAS no salga un 6
$dado = rand(1, 6);
//mientras NO sea 6 (!=)
while ($dado != 6) {
    $dado = rand(1, 6);
}
echo "ha salido un 6";

//-----------------------------------------------------------------
echo" 2 ----  do .. while    ----------------------------<br>";
//-----------------------------------------------------------------
//vamos a tirar el dado HASTA que salga un 6
do {
    $dado = rand(1, 6);
} while ($dado != 6);
echo "ha salido un 6";

//modificaciones para hacer en clase:
# poner un $contador para ver a las de cuantas tiradas ha salido!!
# ha salido un 6  ala de 4 veces!
# fastidiar el while para que siempre se ejecute!
//ejercicio, tirar el dado y que ponga "hola" tantas veces como salga en el dado!!
