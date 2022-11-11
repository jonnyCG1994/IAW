<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // variables que vamos a usar: 
        $nombreCliente = "Fulanito Pérez Pérez";
        $entrega = 520.5;
        $recibe = 614.19;
        $cambioEuroDolar=0.99;
        $resultado=round($entrega *$cambioEuroDolar);
        $fecha = date('d-m-Y');
        //generamos la variable $recibo
        echo "SU RECIBO DE CAMBIO DE EUROS A DÓLARES";
        $recibo = "<table border=1>";
        $recibo .= "<tr><td colspan=2>Sr/a. "
                . $nombreCliente . "</td></tr>";
        $recibo .="<tr><td>entrega ".
                $entrega."</td><td>recibe ".
                $resultado."</td></tr>";
        $recibo .= "<tr><td colspan=2>
            . en Granada, a ". "$fecha . </td></tr>";
        $recibo .= "</table>";
        echo $recibo;
        //Escriibimos la variable con echo
        ?>
    </body>
</html>
