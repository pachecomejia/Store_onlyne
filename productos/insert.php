<!doctype html>
<html lang="en">

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
        <h1>Nuevo producto:</h1>
        <a href="index.php">Lista de productos</a>
        <form action="db/db_insert.php" method="GET">
            <div class="form-group">
                <label for="nombre">Producto:</label>
                <input type="text" class="form-control" id="producto" name="producto" aria-describedby="producto">
            </div>
            <div class="form-group">
                <label for="primer_apellido">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" aria-describedby="precio" >
            </div>
            <div class="form-group">
                <label for="primer_apellido">Existencia</label>
                <input type="number" class="form-control" id="existencia" name="existencia" aria-describedby="existencia" >
            </div>
            <button type="submit" class="btn btn-primary">Insert</button>
        </form>
    </div>
</body>
</html>