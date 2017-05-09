<?php
include ('./lib/Producto.php');
include ('./lib/ConsultaProductos.php');

$oproducto1 = new Producto();
$oproducto1->nombre = "Nuevo Producto";
$oproducto1->codigo = "001";

$oproducto2 = new Producto("Nuevo Producto 2", 100000, "002");
$oproducto3 = new Producto("Nuevo Producto 3", 250000, "003");

$aproductos[0] = $oproducto1;
$aproductos[1] = $oproducto2;
$aproductos[2] = $oproducto3;
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $aProductos2 = new ConsultaProductos();

        foreach ($aProductos2->Lista() as $oPro) {
            echo $oPro->codigo . " " . $oPro->nombre . "/" . $oPro->precio . "/USD " . $oPro->totalUSD();
            echo "<br>";
        }
        ?>
    </body>
</html>
