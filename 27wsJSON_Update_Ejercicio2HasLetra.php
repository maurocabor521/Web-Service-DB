<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$idejercicio = $_POST["idejercicio"];
$letra = $_POST["letra"];
$fila=$_POST["fila"];
$columna=$_POST["columna"];


$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

//file_put_contents($path,base64_decode($imagen));
//$rutaArchivo=file_get_contents($path);

	if ($conexion->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	//if($nameejercicio !="" && $letraInicial!=""){

			$sql = "UPDATE `ejerciciog2_has_letrag2` SET `Letra` ='{$letra}', 
			`fila_Eg2H_Lg2`='{$fila}',`col_Eg2H_Lge`='{$columna}',
			 WHERE `ejerciciog2_has_letrag2`.`EjercicioG2_idEjercicioG2` = '{$idejercicio}'";
	
			if ($conexion->query($sql) === TRUE) {
			echo "registra";
			} else {
			echo "noRegistra" ;
			}
		//}

mysqli_close($conexion);
?>

