<?php
    function getProductos () {
        return [
            ["id" => "1", "nombre" => "DRON Xiaomi Mi Drone", "descripcion" => "Vendo Xiaomi Mi Drone por falta de uso. Su estado es impecable. Se han efectuado pocos vuelos.", "precio" => "103.25", "imagen" => "https://cdn.wallapop.com/images/10420/9y/6y/__/c10420p601627540/i1868314003.jpg?pictureSize=W320"],
            ["id" => "2", "nombre" => "DRON Samsung", "descripcion" => "Vendo Xiaomi Mi Drone por falta de uso. Su estado es impecable. Se han efectuado pocos vuelos.", "precio" => "79.99", "imagen" => "https://cdn.wallapop.com/images/10420/bk/i4/__/c10420p699565314/i2236494456.jpg?pictureSize=W320"],
            ["id" => "3", "nombre" => "DRON Apple", "descripcion" => "Vendo Xiaomi Mi Drone por falta de uso. Su estado es impecable. Se han efectuado pocos vuelos.", "precio" => "95", "imagen" => "https://cdn.wallapop.com/images/10420/bk/6w/__/c10420p699042618/i2234620612.jpg?pictureSize=W320"]
        ];
    }

    function getProducto ($id) {
        $productos = getProductos();

        foreach ($productos as $p) {
            if ($p["id"] == $id)
                return $p;
        }

    }
?>
