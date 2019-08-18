<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$json=array();
		
	$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	$password = $_GET["passwork_administrador"];
	//$password = 220;
	$email = $_GET["emailAdministrador"];
	//$email = "jemail";


	$consulta="select * from adminstrador where emailAdminstrador='{$email}' and passwork_Adminstrador= '{$password}' ";
		$resultado=mysqli_query($conexion,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$json['adminstrador'][]=$registro;
			//echo $registro['idestudiante'].' - '.$registro['nameestudiante'].' - '.$registro['acudienteestudiante'].'<br/>';
			//print_r($json);
			//echo json_encode($json);
		}else{
			$resultar["idAdminstrador"]=0;
			$resultar["nameAdminstrador"]='no registra';
			$resultar["emailAdminstrador"]='no registra';
			$resultar["passwork_Adminstrador"]='no registra';
			$json['adminstrador'][]=$resultar;
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