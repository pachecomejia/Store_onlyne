<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MAC PACHECO</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device.width. initial.scale=1. shrink-to fit-no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
    <div class="field">
    <link rel="stylesheet" 
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
    crossorigin="anonymous">
</head>
<header>
        <div class="container">
            <div class="row justify-content-between mb-5">
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                    <a class="navbar-brand" href="index.html">STORE MR.PACHECO</a> 
                </nav>
            </div>
        </div>
    </header>
    <br>

    <main>
        <div class="container">
            <div class="row mt-3">
                <div class="col">
                    <h2 class="d-flex justify-content-center mb-3">COMPRAR</h2>
    <form method="GET"action="tiket.php">
        <div class="form-group">
          <label for="cantidad">Cantidad</label>
          <input type="number" id="cantidad" name="cantidad" class="form-control">
        </div>
  <body>
        <div class="form-group">
    <label for="producto">Producto</label>
    <select class="form-control" id="producto" name="producto" class="form-control">
    <option >SELECCIONAR PRODUCTO</option>
      <option value= "6000">  IPHONE 7 $6.000.00</option>
      <option value= "8000">  IPHONE 8 $8.000.00</option>
      <option value= "10000"> IPHONE 8 Plus $10.000.00</option>
      <option value= "12450"> IPHONE X $12.450.00</option>
      <option value= "18999"> IPHONE 11 $18.999.00</option>
      <option value= "28299"> IPHONE 11 PRO MAX $28.299.00</option>
      <option value="24999"> IPHONE 12 $24.999.00</option>
      <option value="35599"> IPHONE 12 PRO MAX $35.599.00</option>
    </select>
      </div>
  </body>
        <div class="form-group">
          <input type="button"  onclick="multiplica()"id="multiplicar" value="Agregar al carrito" class="btn btn-primary">
        </div>
        <div class="form-group">
          <label for="debespagar">Debes Pagar</label>
          <input type="number" readonly id="debespagar" name="debespagar" class="form-control">
        </div>
        
        <div class="row form-group">
						<label for="detalles" 
            class="col-form-label col-md-4 h1">Detalles del carrito: </label>
            <div class="col-md-8">
              <textarea class="form-control"  id="detalles" name="detalles" readonly rows="5"></textarea>
            </div> 
            </div> 
          <style type="text/css"> 
          textarea {
            resize :  none;
          }  
          </style>
          <div class="form-group">
          <input type="reset"  value="Nueva compra" class="btn btn-primary">
        </div>

        <script type="text/javascript">
          function multiplica(){
            var articulo = document.getElementById("producto");

            var cant = document.getElementById("cantidad").value;

            var seleccionado = articulo.options [articulo.selectedIndex].text;

            var cantidad = parseFloat(document.getElementById("cantidad").value);

            var producto = parseFloat(document.getElementById("producto").value);

            var debespagar = cantidad * producto;
            document.getElementById("debespagar").value = debespagar;

            var arreglo = ["articulo" +seleccionado+"\n cantidad: "+cant+  " artículo(s).\nPrecio unitario: $"+producto+ ".\nTotal por producto: $"+ debespagar+"."];
            document.getElementById("detalles").value = arreglo;
            
            
          }

  
           </script>
          
           
           <div><label for="cantidad"> Pago</label>
           

          <input type="number" name="pago" id="pago1"></div>
          <input type="submit"  value="Generar tiket" class="btn btn-primary">

  </body>
</html>
