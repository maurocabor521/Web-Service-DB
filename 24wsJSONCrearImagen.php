<?PHP
$hostname_localhost="localhost";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost="root";
$password_localhost="";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$idImagen_Ejercicio = null;
	$name_Imagen_Ejercicio = $_POST["name_Imagen"];
	$letra_inicial_Imagen = $_POST["letra_inicial"];
	$letra_final_Imagen = $_POST["letra_final"];
	$cant_silabas_Imagen=$_POST["cant_silabas"];
	$imagen=$_POST["imagen"];

	if($imagen!=""){
		$path = "imagenes/$name_Imagen_Ejercicio.jpg";
		$ruta_Imagen_Ejercicio = "imagenes/".$name_Imagen_Ejercicio.".jpg";
		file_put_contents($path,base64_decode($imagen));
		$ruta_Imagen_Ejercicio_1=file_get_contents($path);
		}else{
			$url=null;
			//echo "Sin Imagen";
		}

	$sql="INSERT INTO imagen VALUES (?,?,?,?,?,?)";

	$stm=$conexion->prepare($sql);
	$stm->bind_param('issssi',$idImagen_Ejercicio,$name_Imagen_Ejercicio,$ruta_Imagen_Ejercicio,$letra_inicial_Imagen,$letra_final_Imagen,$cant_silabas_Imagen);

	if($stm->execute()){
		echo "registra";
	}else{
		echo "noRegistra"+$ruta_Imagen_Ejercicio;
		print_r($stm);
	}
	
	mysqli_close($conexion);
?>

