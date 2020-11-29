<?php
	$detalles = $_GET['detalles'];
  $debespagar = $_GET['debespagar'];
  $pago = $_GET['pago'];
  $cambio = $pago - $debespagar;

?>
<!DOCTYPE>
<hmlt>
	<head>
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
                    <h2 class="d-flex justify-content-center mb-3">TICKET DE COMPRA </h2>
	<body>
		<div class="container">
			<div class="colums">
				<div class="colums is-4"></div>
					
          <label class="label">
            	<?php
                echo "Fecha " . date("d") . " del " . date("m") . " de " . date("Y");
              ?>
          </label>
          <label class="label">
            <?php
              print("Compras ".$detalles);
            ?>
          </label>
          <label class="label">
            <?php
              print("total a pagar: $".$debespagar);
            ?>
          </label>
          <label class="label">
            <?php
              print("Pago: $".$pago);
            ?>
          </label>
          <label class="label">
            <?php
              print("Cambio: $".$cambio);
            ?>
          </label>
          <img src="https://cnnespanol.cnn.com/wp-content/uploads/2019/09/cnn-iphone-precio.jpg?quality=100&strip=info" border="1" align=”center”  width="400" height="300">
				</div>
			</div>
		</div>
	</body>
</hmlt>