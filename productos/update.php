<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>MAC PACHECO</title>
</head>

<body>
    <div class="container-fluid">
        <h1>Actualizar producto:</h1> <br>
        <a href="index.php">Lista de productos</a>

        <form action='db/db_update.php' method='GET'> <br>
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
        <div class='form-group font-weight-bold'>
            <label for='id_producto'>ID de producto:</label>
            <input type='text'readonly class='form-control' id='id_producto' name='id_producto' aria-describedby='ID producto' value='$id_producto'>
        </div>
        <div class='form-group font-weight-bold'>
            <label for='producto'>Nombre del producto:</label>
            <input type='text'class='form-control' id='producto' name='producto' aria-describedby='producto' value='$producto'>
        </div>
        <div class='form-group font-weight-bold'>
            <label for='precio'>Precio del producto:</label>
            <input type='number'class='form-control' id='precio' name='precio' aria-describedby='precio' value='$precio'>
        </div>
        <div class='form-group font-weight-bold'>
            <label for='existencias'>Existencia:</label>
            <input type='number'class='form-control' id='existencia' name='existencia' aria-describedby='precio' value='$existencia'>
        </div>
        ";

    print($form);
?>
            <button type='submit' class="btn btn-primary">Update</button>
        </form>

    </div>
</body>

</html>