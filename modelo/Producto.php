<?php

    class Producto{
        public $Id;
        public $Nombre;
        public $Precio;
        public $Stock;
        public $TipoProducto;

        public function MostrarDatos(){
            
            echo "<----Producto----> <br>";
            echo "ID: " . $this->Id . "<br>";
            echo "Nombre: " . $this->Nombre . "<br>";
            echo "Precio: " . $this->Precio . "<br>";
            echo "Stock: " . $this->Stock . "<br>";

            echo "<hr>";

            echo "<----Tipo de Producto----> <br>";
            echo "ID: " . $this->TipoProducto->Id . "<br>";
            echo "Descripción: " . $this->TipoProducto->Description . "<br>";
        }
    }

?>