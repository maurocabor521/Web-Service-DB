<?PHP
$hostname_localhost="localhost";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost="root";
$password_localhost="";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$idejercicio = $_POST["idejercicio"];
	$nameejercicio = $_POST["nameEjercicioG2"];
	$letraInicial=$_POST["letra_inicial_EjercicioG2"];

	//file_put_contents($path,base64_decode($imagen));
	//$rutaArchivo=file_get_contents($path);

		if ($conexion->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 

		if($nameejercicio !="" && $letraInicial!=""){
	
				$sql = "UPDATE `ejerciciog2` SET `nameEjercicioG2` ='{$nameejercicio}', `letra_inicial_EjercicioG2`='{$letraInicial}' WHERE `ejerciciog2`.`idEjercicioG2` = '{$idejercicio}';";
		
				if ($conexion->query($sql) === TRUE) {
				echo "registra";
				} else {
				echo "noRegistra" . $conn->error;
				}
			}

	mysqli_close($conexion);
?>

