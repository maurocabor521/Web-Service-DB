<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$grupo_idgrupo = $_POST["idgrupo"];
	$estudiante_idestudiante = $_POST["estudiante_idestudiante"];
		
	$sql="INSERT INTO grupo_has_estudiante (grupo_idgrupo,estudiante_idestudiante)VALUES (?,?)";
	$stm=$conexion->prepare($sql);
	$stm->bind_param('ii',$grupo_idgrupo,$estudiante_idestudiante);
	if($stm->execute()){
		echo "registra";
	}else{
		echo "noRegistra";
	}
	
	mysqli_close($conexion);
?>

