<?php 
	session_start();

	if(isset($_SESSION['user'])) {
		header('Location: contenido.php');
	}

	$usuario = htmlspecialchars($_POST['user']);

	$pass = htmlspecialchars($_POST['pass']);

	$pass2 =htmlspecialchars($_POST['pass2']); 


	define("host", "localhost");
	define("user", "root");
	define("password", "");
	define("db_name", "trivial");

	if ($pass != $pass2) {
		header('Location: registro.php');
		echo "<div class='alert alert-danger'><h5>Las contraseñas no son iguales</h5></div>";
	} else {
		//conecto con la BBDD y cifro contraseña
		$con = mysqli_connect(host, user, password, db_name);
		$pass = hash("sha256", $pass);

		if (mysqli_connect_errno()) {
			echo "Imposible realizar la conexión de la Base de Datos.";
		} else {
			$sql = "INSERT INTO trivial.usuarios (user, password) VALUE ('$usuario','$pass')";
			$resultado = mysqli_query($con, $sql);

			if(mysqli_errno($con)){
				die(mysqli_error($con));
			}
		}

		header('Location: index.php');
	}

 ?>