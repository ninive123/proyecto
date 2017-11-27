<!DOCTYPE html>
<html>
<head>
	<title>menu</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="siderbar">
		<div class="toggle-btn">
		<span></span>
		<span></span>
		<span></span>
	</div>
		<ul>
			<li> FORMULARIO </li>
			<li> MODIFICAR DATOS </li>
			<li> REGISTROS </li>
		</ul>
	</div>

	<?php
		session_start();


		if (isset($_SESSION['u_usuario'])){

			echo "<a href='cerrar_sesion.php'> cerrar sesion</a>";
			
			}
			else {
				header("location: index.php");
			}
		?>
	
</body>
</html>

