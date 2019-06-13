<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$json=array();
		
$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

$consulta= "select idEjercicioG1 from `ejerciciog1`";
//$sql = "SELECT idEjercicioG1,nameEjercicioG1 FROM `ejerciciog1`";
$sql = "SELECT * FROM `ejerciciog1`";
$resultado=mysqli_query($conexion,$sql);

while($registro=mysqli_fetch_array($resultado)){
	$json['ejerciciog1'][]=$registro;
	//echo $registro['idEjercicioG1'].' - '.$registro['nameEjercicioG1'].'<br/>';
}
mysqli_close($conexion);
echo json_encode($json);
				

?>

