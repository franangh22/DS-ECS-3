<?php

    require_once "modelo/producto.php";
    require_once "modelo/TipoProducto.php";

    #Instanciar TipoProducto
    $Tp = new TipoProducto();
    $Tp -> Id = 2;
    $Tp -> Description = "Galletitas";

    #Instanciar Producto
    $Prod = new Producto();
    $Prod -> Id = 1;
    $Prod -> Nombre = "Merenguitas";
    $Prod -> Precio = 1000;
    $Prod -> Stock = 10;
    $Prod -> TipoProducto = $Tp;
    $Prod -> MostrarDatos();
?>