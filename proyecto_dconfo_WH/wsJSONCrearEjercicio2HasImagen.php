<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="id9583494_dconfo_proyecto_v8";
$username_localhost="id9583494_dconfo";
$password_localhost="americano";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$EjercicioG2_idEjercicioG2 = $_POST["EjercicioG2_idEjercicioG2"];
	$Imagen_idImagen_Ejercicio = $_POST["Imagen_idImagen_Ejercicio"];
	$fila_E_h_I = $_POST["fila_E_h_I"];
	$columna_E_H_I = $_POST["columna_E_H_I"];
	
	$sql="INSERT INTO ejerciciog2_has_imagen VALUES (?,?,?,?)";
	$stm=$conexion->prepare($sql);
	$stm->bind_param('iiii',$EjercicioG2_idEjercicioG2,$Imagen_idImagen_Ejercicio,$fila_E_h_I,$columna_E_H_I);
		
	if($stm->execute()){
		echo "registra";
	}else{
		echo "noRegistra";
	}
	
	mysqli_close($conexion);
?>

