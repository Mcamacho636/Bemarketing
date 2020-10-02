<?php
    include 'mysql.php';
	$valores=$_POST['values'];
	$campos = $_POST['campos'];
	$tabla = $_POST['tabla'];
	$tipo = $_POST['tipo'];
	$correo = $_POST['correo'];

	$claves = explode(',', $valores);
	for($i=0; $i<$clave.length; $i++){
	    $claves[$i] = trim($claves[$i], "'");
	}
    
	$sql = "INSERT INTO $tabla($campos) 
	VALUES ($valores)";
	if (mysqli_query($conn, $sql)) {
        echo json_encode(array("statusCode"=>200));
        if($correo == true){
			include 'correo.php';
		}
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
	mysqli_close($conn);
?>