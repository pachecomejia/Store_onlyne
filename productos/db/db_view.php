<?php

    $id_producto = $_GET["id_producto"];

    $db = new SQLite3("../tienda.db");

    $resultado = $db->query("SELECT * from productos where id_producto='$id_producto';");

    while ($row = $resultado->fetchArray()) {
        $id_producto = $row["id_producto"];
        $producto = $row['producto'];
        $precio = $row['precio'];
        $existencia = $row['existencia'];
    }

    $form = "
        <div class='form-group'>
            <label for='id_producto'>ID de producto:</label>
            <input type='text' class='form-control' id='id_producto' name='id_producto' aria-describedby='ID producto' value='$id_producto'readonly>
        </div>
        <div class='form-group'>
            <label for='producto'>Producto:</label>
            <input type='text' class='form-control' id='producto' name='producto' aria-describedby='producto' value='$producto'readonly>
        </div>
        <div class='form-group'>
            <label for='precio'>Precio:</label>
            <input type='number' class='form-control' id='precio' name='precio' aria-describedby='precio' value='$precio'readonly>
        </div>
        <div class='form-group'>
            <label for='existencias'>Existencia:</label>
            <input type='number'class='form-control' id='existencia' name='existencia' aria-describedby='precio' value='$existencia'readonly>
        </div>
        ";

    print($form);
?>