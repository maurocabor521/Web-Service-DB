<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$json=array();
		
	$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	$password = $_GET["passwork_estudiante"];
	//$password = 220;
	$email = $_GET["emailAcudienteestudiante"];
	//$email = "jemail";


	$consulta="select * from estudiante where emailAcudienteestudiante='{$email}' and passwork_estudiante= '{$password}' ";
		$resultado=mysqli_query($conexion,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$json['estudiante'][]=$registro;
			//echo $registro['idestudiante'].' - '.$registro['nameestudiante'].' - '.$registro['acudienteestudiante'].'<br/>';
			//print_r($json);
			//echo json_encode($json);
		}else{
			$resultar["idestudiante"]=0;
			$resultar["nameestudiante"]='no registra';
			$resultar["dniestudiante"]='no registra';
			$resultar["acudienteestudiante"]='no registra';
			$json['estudiante'][]=$resultar;
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