<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$idestudiante = $_POST["idestudiante"];
	$nameestudiante = $_POST["nameestudiante"];
	$dniestudiante = $_POST["dniestudiante"];
	$acudienteestudiante = $_POST["acudienteestudiante"];
	$emailAcudienteestudiante = $_POST["emailAcudienteestudiante"];
	$passwork_estudiante = $_POST["passwork_estudiante"];

/*
	$path = "imagenes/$nombre.jpg";

	//$url = "http://$hostname_localhost/ejemploBDRemota/$path";
	$url = "imagenes/".$nombre.".jpg";

	file_put_contents($path,base64_decode($imagen));
	$bytesArchivo=file_get_contents($path);
*/
	$sql="INSERT INTO estudiante VALUES (?,?,?,?,?,?)";
	$stm=$conexion->prepare($sql);
	//$stm->bind_param('isis',$idestudiante,$nameestudiante,$dniestudiante,$acudienteestudiante);
	$stm->bind_param('isisss',$idestudiante,$nameestudiante,$dniestudiante,$acudienteestudiante,$emailAcudienteestudiante,$passwork_estudiante);
		
	if($stm->execute()){
		echo "registra";
	}else{
		echo "noRegistra";
	}
	
	mysqli_close($conexion);
?>

