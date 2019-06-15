<?PHP
$hostname_localhost="localhost";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost="root";
$password_localhost="";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$grupo_estudiante_idgrupo_estudiante = $_POST["grupo_estudiante_idgrupo_estudiante"];
	$estudiante_idestudiante = $_POST["estudiante_idestudiante"];

	$sql="INSERT INTO grupo_estudiante_has_estudiante VALUES (?,?)";

	$stm=$conexion->prepare($sql);
	$stm->bind_param('ii',$grupo_estudiante_idgrupo_estudiante,$estudiante_idestudiante);
		
	if($stm->execute()){
		echo "registra";
	}else{
		echo "no_Registra_19_ge_h_est";
		print_r($stm);
	}
		
	mysqli_close($conexion);

?>

