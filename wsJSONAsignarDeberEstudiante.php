<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$estudiante_idestudiante = $_POST["estudiante_idestudiante"];
	$docente_iddocente = $_POST["docente_iddocente"];
	$EjercicioG1_idEjercicioG1 = $_POST["EjercicioG1_idEjercicioG1"];
	$EjercicioG2_idEjercicioG2 = $_POST["EjercicioG1_idEjercicioG2"];
	//$fechaestudiante_has_Deber = "10/03/19";
	$fechaestudiante_has_Deber = $_POST["fechaestudiante_has_Deber"];
	$tipoDeber = "Ejercicio Clase";
	$calificacionestudiante_has_Deber = null;
		
	$sql="INSERT INTO estudiante_has_deber(estudiante_idestudiante,docente_iddocente,EjercicioG1_idEjercicioG1,EjercicioG2_idEjercicioG2,fechaestudiante_has_Deber,tipoDeber,calificacionestudiante_has_Deber)VALUES (?,?,?,?,?,?,?)";
	$stm=$conexion->prepare($sql);
	$stm->bind_param('iiiissi',$estudiante_idestudiante,$docente_iddocente,$EjercicioG1_idEjercicioG1,$EjercicioG2_idEjercicioG2,$fechaestudiante_has_Deber,$tipoDeber,$calificacionestudiante_has_Deber);
	if($stm->execute()){
		echo "registra";
	}else{
		echo "noRegistra";
	}
	
	mysqli_close($conexion);
?>

