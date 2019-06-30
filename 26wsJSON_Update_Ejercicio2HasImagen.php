<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$idejercicio = $_POST["idejercicio"];
$idimagen = $_POST["idimagen"];
$fila=$_POST["fila"];
$columna=$_POST["columna"];


$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

//file_put_contents($path,base64_decode($imagen));
//$rutaArchivo=file_get_contents($path);

	if ($conexion->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	//if($nameejercicio !="" && $letraInicial!=""){

			$sql = "UPDATE `ejerciciog2_has_imagen` SET `EjercicioG2_idEjercicioG2` ='{$idejercicio}', 
			`Imagen_idImagen_Ejercicio`='{$idimagen}',
			 WHERE `ejerciciog2_has_imagen`.`EjercicioG2_idEjercicioG2` = '{$idejercicio}', AND `fila_E_h_I`='{$fila}' AND `columna_E_H_I`='{$columna}'";
	
			if ($conexion->query($sql) === TRUE) {
			echo "registra";
			} else {
			echo "noRegistra" ;
			}
		//}

mysqli_close($conexion);
?>

