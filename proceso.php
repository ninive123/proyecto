

<?php  

session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

include("serv.php");

$proceso = $conexion->query("SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena' ");
	if ($resultado = mysqli_fetch_array($proceso)){
		$_SESSION['u_usuario'] = $usuario;
		header("location: sesion.php");
		
	}
	else{
		 header("location: index.php ");
		 
		
	}

?>



