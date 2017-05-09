<?php

// include './Producto.php';

class ConsultaProductos {

    private function Conexion() {
        $miconexion = new mysqli("localhost", "root", "avaras08", "ventas");
        if ($miconexion->connect_errno) {
            return "Failed to connect to MySQL: (" . $miconexion->connect_errno . ") " . $miconexion->connect_error;
        }
        return $miconexion;
    }

    public function Lista() {
        $sql = "SELECT * FROM productos";
        /* Uso del método conexión */
        $resultado = $this->Conexion()->query($sql);

        /* Obtención de los elementos */
        $i = 0;
        while ($fila = $resultado->fetch_assoc()) {
            $oProducto = new Producto($fila["nombre"], $fila["precio"], $fila["codigo"]);
            $aProductos [$i] = $oProducto;
        }
        /*Se devuelve "Retorna el arreglo de productos"*/
        return $aProductos;
    }

}
