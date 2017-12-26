<?php

//Insertar Datos en la Tabla contrato

$conexion = mysqli_connect("localhost","root","","colirutas");
mysqli_set_charset($conexion, "utf8");

	$peticion = "INSERT INTO users VALUES (
		NULL,
		'".$_POST['email']."',
		'".$_POST['password']."',
		'".$_POST['name']."',
		'".$_POST['phone']."',
		'".$_POST['tipouser']."',
		'".$_POST['tiporequest']."'
		)";
	$resultado = mysqli_query($conexion, $peticion);
	mysqli_close($conexion);

	echo '
	<script>
		window.location="../index.php"
	</script>
	';

?>
