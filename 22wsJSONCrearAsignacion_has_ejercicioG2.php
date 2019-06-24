<?PHP
$hostname_localhost="localhost";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost="root";
$password_localhost="";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);


	$Asignacion_idGrupoAsignacion = $_POST["asignacion_idGrupoAsignacion"];
	$EjercicioG2_idEjercicioG2 = $_POST["ejercicioG2_idEjercicioG2"];


	$sql="INSERT INTO asignacion_has_ejerciciog2 VALUES (?,?)order by id_GE_H_D asc";

	$stm=$conexion->prepare($sql);
	$stm->bind_param('ii',$Asignacion_idGrupoAsignacion,EjercicioG2_idEjercicioG2);

	if($stm->execute()){
		echo "registra";
	}else{
		echo "noRegistra";
		print_r($stm);
	}
	
	mysqli_close($conexion);
?>

