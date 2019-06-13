<?PHP
$hostname_localhost="localhost";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="id9583494_dconfo_proyecto_v8";
$username_localhost="id9583494_dconfo";
$password_localhost="americano";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	//$idEjercicioG2 = $_POST["idEjercicio"];
	$idEjercicioG2 = "";
	$nameEjercicioG2 = $_POST["nameEjercicio"];
	$docente_iddocente = $_POST["docente_iddocente"];
	$Tipo_idTipo = $_POST["Tipo_idTipo"];
	$Tipo_Actividad_idActividad = $_POST["Actividad_idActividad"];
	$letra_inicial_EjercicioG2=$_POST["letra_inicial"];
	$letra_Final_EjercicioG2=$_POST["letra_final"];



	$sql="INSERT INTO ejerciciog2 VALUES (?,?,?,?,?,?,?)";

	$stm=$conexion->prepare($sql);
	$stm->bind_param('isiiiss',$idEjercicioG2,$nameEjercicioG2,$docente_iddocente,$Tipo_idTipo,$Tipo_Actividad_idActividad,$letra_inicial_EjercicioG2,$letra_Final_EjercicioG2);
	//$stm->bind_param('siiiss',$nameEjercicioG2,$docente_iddocente,$Tipo_idTipo,$Tipo_Actividad_idActividad,$letra_inicial_EjercicioG2,$letra_Final_EjercicioG2);
	//$stm->bind_param('siiisis',$nameejercicio,$iddocente,$idtipo,$idactividad,$url,$cantidadValidaEG1);
		
	if($stm->execute()){
		echo "registra";
	}else{
		echo "noRegistra";
		print_r($stm);
	}
	
	mysqli_close($conexion);
?>

