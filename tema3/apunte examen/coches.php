<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

//Coche más económico del año:

//Categoría: Turismos, Deportivos, Familiar, SUV

//Marcas: VW, Mercedes, Mazda, Ford, Citroen

//Buscar de cada marca una categoría
$precio="154878163354";
$modelo;
$coches= [
$mazda=["mazda 2"=>"26682","MX-5"=>"30555","mazda 6 wagon"=>"35155","cx-5"=>"22295"],
$mercedes=["Clase S"=>"110000", "AMG GT"=>"130000", "Clase C"=>"16272", "GLA SUV"=>"39000"],
$ford = array("Fiesta" => '24222', "Mustang" => '56731', "Focus" => '29776', "Kuga" => '36869'),
$VW = array ("Passat"=>"40000", "Golf"=>"30000", "Touran"=> "22900", "SUV"=>"29990"),
$citroen = ["C3"=>"17250", "C5 X"=>"38500", "Berlingo"=>"18550", "C5 Aircross"=>"55360"]
    ];
    
foreach ($coches as $modelocoche => $preciocoche) {
    if ($preciocoche<$precio){
        $precio=$preciocoche;
        $modelo=$modelocoche;
        
    }
}
echo "el coche más barato es: ".$modelo. "con precio".$precio;

/*$mazda=["mazda 2"=>"26682","MX-5"=>"30555","mazda 6 wagon"=>"35155","cx-5"=>"22295"];
$mercedes=["Clase S"=>"110000", "AMG GT"=>"130000", "Clase C"=>"16272", "GLA SUV"=>"39000"];
$ford = array("Fiesta" => '24222', "Mustang" => '56731', "Focus" => '29776', "Kuga" => '36869');
$VW = array ("Passat"=>"40000", "Golf"=>"30000", "Touran"=> "22900", "SUV"=>"29990");
$citroen = ["C3"=>"17250", "C5 X"=>"38500", "Berlingo"=>"18550", "C5 Aircross"=>"55360"];
*/
/*
foreach ($mazda as $maz => $preciomaz){
    if ($preciomaz<$precio) {
        $precio=$preciomaz;
        $modelo=$maz;
    } 

}
    echo "el más barato es: ".$precio." y el modelo es: ".$modelo;
 */
 /*
foreach ($mercedes as $mer => $preciomer) {}
foreach ($VW as $volk =>$preciovw){}
foreach ($ford as $frd=>$precioford){}
foreach ($citroen as $ctr=>$precioctr){}
*/
