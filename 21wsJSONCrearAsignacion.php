<?PHP
$hostname_localhost="localhost";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost="root";
$password_localhost="";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$idGrupoAsignacion = null;
	$nameGrupoAsignacion = $_POST["nameGrupoAsignacion"];
	$docente_iddocente = $_POST["docente_iddocente"];
	$grupo_idgrupo = $_POST["grupo_idgrupo"];
	$Actividad_idActividad = $_POST["Actividad_idActividad"];

	$sql="INSERT INTO asignacion VALUES (?,?,?,?,?)";

	$stm=$conexion->prepare($sql);
	$stm->bind_param('isiii',$idGrupoAsignacion,$nameGrupoAsignacion,$docente_iddocente,$grupo_idgrupo,$Actividad_idActividad);

	if($stm->execute()){
		echo "registra";
	}else{
		echo "noRegistra";
		print_r($stm);
	}
	
	mysqli_close($conexion);
?>

