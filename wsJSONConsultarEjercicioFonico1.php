<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$json=array();
		
	$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	$idEjercicioG2 = $_GET["idEjercicioG2"];
	//$password = 220;
	
	//$email = "jemail";


	$consulta="select idEjercicioG2,nameEjercicioG2,docente_iddocente,Tipo_idTipo,Tipo_Actividad_idActividad,letra_inicial_EjercicioG2,letra_final_EjercicioG2 from ejerciciog2 where idEjercicioG2='{$idEjercicioG2}' ";
	//$consulta="select * from ejerciciog2 where idEjercicioG2='{$idEjercicioG2}' ";
		$resultado=mysqli_query($conexion,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$json['ejerciciog2'][]=$registro;
			//echo $registro['idestudiante'].' - '.$registro['nameestudiante'].' - '.$registro['acudienteestudiante'].'<br/>';
			//print_r($json);
			//echo json_encode($json);
		}else{
			$resultar["idEjercicioG2"]=0;
			$resultar["nameEjercicioG2"]='no registra';
			$json['ejerciciog2'][]=$resultar;
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