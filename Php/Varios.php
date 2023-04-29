<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practica 4</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<style>
		body {
			background-color: #aabe74; /* Cambia el color de fondo del body */
		}
		
	</style>
</head>
<body>
	
	<div class="container my-5  ">
		
	<form action="ArticulosTienda.php" method="POST">

	<div class="form-group row">
		<div class="col-md-12">
<table class="table table-striped" id="miTabla"> 
  <thead class="thead-dark">
    <tr>
      <th scope="col">Codigo</th>
      <th scope="col">Articulo</th>
      <th scope="col">Precio</th>
      <th scope="col">Seleccion</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td>111</td>
      <td>Motor</td>
      <td>50</td>
       <td><input type="radio" name="opc1" value="opc1"></td>
    </tr>

    <tr>
      <td>222</td>
      <td>Acetite</td>
      <td>30</td>
      <td><input type="radio" name="opc1" value="opc2"></td>
    </tr>
    <tr>
      <td>333</td>
      <td>Filtro de Aceite</td>
      <td>40</td>
       <td><input type="radio" name="opc1" value="opc3"></td>
    </tr>
  </tbody>
</table>
</div>
</div>

  <div class="form-group row justify-content-md-center">
  	<div class="col-md-4">
    <label for="Cantidad">Cantidad</label>
    <input type="number" class="form-control" name="Cantidad" id="Cantidad"  placeholder="Introduzca Cantidad ">

    </div>
  </div>
   <div class="form-group row justify-content-md-center">
  	<div class="col-md-1">

  <button type="submit" class="btn btn-primary mb-2" value="Procesar...">Submit</button>
  
    </div>
  </div>

</form>
</div>
<div class="container">
<h1>Lista de caracteres ASCII</h1>
	<?php
  $valor = 0;
	
		if(isset($_POST['valor'])) {
			$valor = $_POST['valor'];
		} else {
			$valor = 0;
		}

		echo '<table class="table table-striped" border="1">';
		echo '<tr><th>Valor</th><th>Carácter ASCII</th></tr>';
		for($i = 32; $i <= $valor; $i++) {
			echo '<tr>';
			echo '<td>' . $i . '</td>';
			echo '<td>' . chr($i) . '</td>';
			echo '</tr>';
		}
		echo '</table>';
    
	?>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="row justify-content-md-center">
      
    <div class="col-md-3">
		<label for="valor">Introduce un valor:</label>
		<input  class="form-control "  type="number" id="valor" name="valor" value="<?php echo $valor;?>" required>
  </div>
  
    <div class="col-md-1 my-3">
		<button type="submit " class="btn btn-primary mb-2 ">Generar lista</button>
    </div>
    </div>
	</form>

<div class="row justify-content-md-center ">
  <div class="col-md my-5">
  <h1>Conversor de grados</h1>
  <form action="conversionGrados.php" method="post">
    <label>Valor:</label>
    <input class="form-control " type="number" name="valor" required>
    <br>
    <label>Escala original:</label>
    <select class="custom-select" name="escala1" required>
      <option value="Celsius">Celsius</option>
      <option value="Fahrenheit">Fahrenheit</option>
      <option value="Kelvin">Kelvin</option>
    </select>
    <br>
    <label>Escala deseada:</label>
    <select class="custom-select" name="escala2" required>
      <option value="Celsius">Celsius</option>
      <option value="Fahrenheit">Fahrenheit</option>
      <option value="Kelvin">Kelvin</option>
    </select>
    <br>
    <br>
 
    <button class="btn btn-primary" type="submit">Convertir</button>
  </form>
  </div>
</div>

 


<h1>Convertir Cadenas</h1>

  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="cadena">Introduce una cadena:</label>
    <input  class="form-control " type="text" name="cadena" id="cadena">
    <button class="btn btn-secundary my-3" type="submit">Convertir</button>
  </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $texto = $_POST["cadena"];
    $texto = strtoupper(trim($texto)); 
    $texto = preg_replace('/\b\s+\b/', '', $texto); 
    echo $texto;
}
?>

 </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>