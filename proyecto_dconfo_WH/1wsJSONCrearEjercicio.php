<?PHP
$hostname_localhost="localhost";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="id9583494_dconfo_proyecto_v8";
$username_localhost="id9583494_dconfo";
$password_localhost="americano";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$idejercicio = null;
	$nameejercicio = $_POST["nameEjercicioG2"];
	$iddocente = $_POST["docente_iddocente"];
	$idtipo = $_POST["Tipo_idTipo"];
	$idactividad = $_POST["Tipo_Actividad_idActividad"];
	$letraInicial=$_POST["letra_inicial_EjercicioG2"];
	$letraFinal=$_POST["letra_final_EjercicioG2"];
	$imagen = $_POST["imagen"];
	$cantidadValidaEG2=$_POST["cantidadValidadEjercicio"];
	$oracion=$_POST["oracion"];

	if($imagen!=""){
		$path = "imagenes/$nameejercicio.jpg";
		//$url = "http://$hostname_localhost/proyecto_dconfo/$path";
		$url = "imagenes/".$nameejercicio.".jpg";
		file_put_contents($path,base64_decode($imagen));
		$rutaArchivo=file_get_contents($path);
		}else{
			$url=null;
		}

	$sql="INSERT INTO ejerciciog2 VALUES (?,?,?,?,?,?,?,?,?,?)";

	$stm=$conexion->prepare($sql);
	$stm->bind_param('isiiisssss',$idejercicio,$nameejercicio,$iddocente,$idtipo,$idactividad,$letraInicial,$letraFinal,$url,$cantidadValidaEG2,$oracion);
	//$stm->bind_param('siiisis',$nameejercicio,$iddocente,$idtipo,$idactividad,$url,$cantidadValidaEG1);
		
	if($stm->execute()){
		echo "registra";
	}else{
		echo "noRegistra";
		print_r($stm);
	}
	
	mysqli_close($conexion);
?>

