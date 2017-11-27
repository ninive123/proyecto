<?php 
	session_start();
	include 'serv.php';
	if(isset($_SESSION['Usuario'])){
		echo '<script> window.location="sesion.php"; </script>';
	}
?>

<!DOCTYPE php>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login |CodigoMasters|</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="contenedor-form">
		<div class="toggle">
	</div>

	<div class="formulario">
	<h2>PORTAL ESTACIONAMIENTO UPLA</h2>

	<form  method="post" action="proceso.php">
		<input type="text" name="usuario" value="" placeholder="usuario..." />
		<input type="password" name="contrasena" value="" placeholder="contrasena..." />
		<input type="submit"  value="Iniciar Sesion">
	</form>
	</div>

</body>
</html>