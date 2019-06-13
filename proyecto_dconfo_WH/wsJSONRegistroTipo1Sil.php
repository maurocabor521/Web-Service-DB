<?PHP
$hostname_localhost="localhost";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="id9583494_dconfo_proyecto_v8";
$username_localhost="id9583494_dconfo";
$password_localhost="americano";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$idejercicio = null;
	$nameejercicio = $_POST["nameEjercicio"];
	$iddocente = $_POST["docente_iddocente"];
	$idactividad = $_POST["Actividad_idActividad"];
	$idtipo = $_POST["Tipo_idTipo"];
	$imagen = $_POST["imagen"];
	$cantidadValidaEG1=$_POST["cantidadValidaEG1"];
	$oracion=$_POST["oracion"];
	//agregados para tipo1 silabico
	$rutaImagen=$_POST["rutaImagen"];
	$de_galeria=$_POST["de_galeria"];

	$path = "imagenes/$nameejercicio.jpg";

	//$url = "http://$hostname_localhost/proyecto_dconfo/$path";

	//agregados para tipo1 silabico
	if($de_galeria=="si"){
		$url = "imagenes/".$nameejercicio.".jpg";
	}else if($de_galeria=="no"){
		$url = $rutaImagen;
	}


	file_put_contents($path,base64_decode($imagen));
	$rutaArchivo=file_get_contents($path);

	$sql="INSERT INTO ejerciciog1 VALUES (?,?,?,?,?,?,?,?)";
	/*$sql = "INSERT INTO `ejerciciog1` 
	(`idEjercicioG1`, `nameEjercicioG1`, `docente_iddocente`, `Tipo_idTipo`, `Tipo_Actividad_idActividad`, 
	`rutaImagen_EjercicioG1`, `cantidadValidaEjercicioG1`, `oracionEjercicioG1`) 
	VALUES (NULL, \'léxico3\', \'220\', \'3\', \'2\', NULL, \'2\', \'el patico\')";*/
	$stm=$conexion->prepare($sql);
	$stm->bind_param('isiiisis',$idejercicio,$nameejercicio,$iddocente,$idtipo,$idactividad,$url,$cantidadValidaEG1,$oracion);
	//$stm->bind_param('siiisis',$nameejercicio,$iddocente,$idtipo,$idactividad,$url,$cantidadValidaEG1);
		
	if($stm->execute()){
		echo "registra";
	}else{
		echo "noRegistra";
		print_r($stm);
	}
	
	mysqli_close($conexion);
?>

