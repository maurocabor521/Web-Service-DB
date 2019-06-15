<?PHP
$hostname_localhost="localhost";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost="root";
$password_localhost="";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$idejercicio = null;
	$name_grupo_estudiante = $_POST["name_grupo_estudiante"];
	$docente_iddocente = $_POST["docente_iddocente"];
	$grupo_idgrupo = $_POST["grupo_idgrupo"];


	$sql="INSERT INTO grupo_estudiante VALUES (?,?,?,?)";

	$stm=$conexion->prepare($sql);
	$stm->bind_param('isii',$idejercicio,$name_grupo_estudiante,$docente_iddocente,$grupo_idgrupo);
	//$stm->bind_param('siiisis',$nameejercicio,$iddocente,$idtipo,$idactividad,$url,$cantidadValidaEG1);
		
	if($stm->execute()){
		echo "registra";
	}else{
		echo "noRegistra";
		print_r($stm);
	}
	
	mysqli_close($conexion);
?>

