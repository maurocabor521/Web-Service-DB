<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$id_estudiante_has_Debercol = $_POST["idEstudiantehasDeber"];
$calificacionestudiante = $_POST["calificacionestudiante"];

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	//$id_GE_H_D=null;

	if ($conexion->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

		$sql="UPDATE `estudiante_has_deber` SET `calificacionestudiante_has_Deber` = '{$calificacionestudiante}' WHERE `id_estudiante_has_Debercol` = '{$id_estudiante_has_Debercol}' "; 
		//$sql="UPDATE `estudiante_has_deber` SET `calificacionestudiante_has_Deber` = 5 WHERE `id_estudiante_has_Debercol` = 3733 "; 



			if ($conexion->query($sql) === TRUE) {
				echo "registra";
				} else {
				echo "noRegistra " ;
				}
		
		mysqli_close($conexion);
	


?>

