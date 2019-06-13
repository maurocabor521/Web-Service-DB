<?PHP
$hostname_localhost="localhost";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost="root";
$password_localhost="";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$idejercicio = null;
	$nameejercicio = $_POST["nameEjercicio"];
	$iddocente = $_POST["docente_iddocente"];
	$idactividad = $_POST["Actividad_idActividad"];
	$idtipo = $_POST["Tipo_idTipo"];
	$imagen = null;
	$cantidadValidaEG1=$_POST["cantidadValidaEG1"];
	$oracion=$_POST["oracion"];

	$sql="INSERT INTO ejerciciog1 VALUES (?,?,?,?,?,?,?,?)";

	$stm=$conexion->prepare($sql);
	$stm->bind_param('isiiisis',$idejercicio,$nameejercicio,$iddocente,$idtipo,$idactividad,$url,$cantidadValidaEG1,$oracion);

	if($stm->execute()){
		echo "registra";
	}else{
		echo "noRegistra";
		print_r($stm);
	}
	
	mysqli_close($conexion);
?>

