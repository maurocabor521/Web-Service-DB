<?PHP
$hostname_localhost="localhost";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost="root";
$password_localhost="";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$idejercicio = $_POST["idejercicio"];
	$nameejercicio = $_POST["nameEjercicioG2"];
	//$iddocente = $_POST["docente_iddocente"];
	//$idtipo = $_POST["Tipo_idTipo"];
	//$idactividad = $_POST["Tipo_Actividad_idActividad"];
	//$letraInicial=$_POST["letra_inicial_EjercicioG2"];
	//$letraFinal=$_POST["letra_final_EjercicioG2"];
	$imagen = $_POST["imagen"];
	$cantidadValidaEG2=$_POST["cantidadValidadEjercicio"];
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
	if($de_galeria==""){
	   $url = ""; 
	}
	
	
	file_put_contents($path,base64_decode($imagen));
	$rutaArchivo=file_get_contents($path);

	//************************** */


	/*if($imagen!=""){
		$path = "imagenes/$nameejercicio.jpg";
		//$url = "http://$hostname_localhost/proyecto_dconfo/$path";
		$url = "imagenes/".$nameejercicio.".jpg";
		file_put_contents($path,base64_decode($imagen));
		$rutaArchivo=file_get_contents($path);
		}else{
			$url=null;
		}*/

		if ($conexion->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		//UPDATE `ejerciciog2` SET `nameEjercicioG2` = 'E_LEX_2', `oracionEjercicio` = 'osito blancp' WHERE `ejerciciog2`.`idEjercicioG2` = 13;
		$sql = "UPDATE `ejerciciog2` SET `nameEjercicioG2` ='{$nameejercicio}', `oracionEjercicio` ='{$oracion}' , 
		`rutaImagen_Ejercicio`='{$url}',`cantidadValidadEjercicio`='{$cantidadValidaEG2}' WHERE `ejerciciog2`.`idEjercicioG2` = '{$idejercicio}';";
		
		if ($conexion->query($sql) === TRUE) {
			echo "registra";
		} else {
			echo "noRegistra" . $conn->error;
		}

//UPDATE `ejerciciog2` SET `nameEjercicioG2` = 'ELEX_2' WHERE `ejerciciog2`.`idEjercicioG2` = 13;
/*	$sql="INSERT INTO ejerciciog2 VALUES (?,?,?,?,?,?,?,?,?,?)";

	$stm=$conexion->prepare($sql);
	$stm->bind_param('isiiisssss',$idejercicio,$nameejercicio,$iddocente,$idtipo,$idactividad,$letraInicial,$letraFinal,$url,$cantidadValidaEG2,$oracion);
	//$stm->bind_param('siiisis',$nameejercicio,$iddocente,$idtipo,$idactividad,$url,$cantidadValidaEG1);
		
	if($stm->execute()){
		echo "registra";
	}else{
		echo "noRegistra";
		print_r($stm);
	}*/

	/*		
if ($conexion->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE `ejerciciog2` SET `nameEjercicioG2` = 'ELEX_2' WHERE `ejerciciog2`.`idEjercicioG2` = 13;";

if ($conexion->query($sql) === TRUE) {
    echo "registra";
} else {
    echo "noRegistra" . $conn->error;
}

		}*/
	
	
	mysqli_close($conexion);
?>

