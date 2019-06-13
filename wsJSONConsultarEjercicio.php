<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$json=array();
		
	$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	$idEjercicioG1 = $_GET["idEjercicioG1"];
	//$password = 220;
	
	//$email = "jemail";


	$consulta="select Tipo_Actividad_idActividad,idEjercicioG1,nameEjercicioG1,Tipo_idTipo,rutaImagen_EjercicioG1,cantidadValidaEjercicioG1,oracionEjercicioG1 from ejerciciog1 where idEjercicioG1='{$idEjercicioG1}' ";
		$resultado=mysqli_query($conexion,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$json['ejerciciog1'][]=$registro;
			//echo $registro['idestudiante'].' - '.$registro['nameestudiante'].' - '.$registro['acudienteestudiante'].'<br/>';
			//print_r($json);
			//echo json_encode($json);
		}else{
			$resultar["idEjercicioG1"]=0;
			$resultar["nameEjercicioG1"]='no registra';
			$json['ejerciciog1'][]=$resultar;
		}
		
		mysqli_close($conexion);
		echo json_encode($json);
	//}
	/*else{
		$resultar["success"]=0;
		$resultar["message"]='Ws no Retorna';
		$json['estudiante'][]=$resultar;
		echo json_encode($json);
	}*/
?>