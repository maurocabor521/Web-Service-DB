<?PHP
$hostname_localhost ="localhost";
$database_localhost ="id9583494_dconfo_proyecto_v8";
$username_localhost="id9583494_dconfo";
$password_localhost="americano";

$json=array();

	if(isset($_GET["iddocente"])){
		$iddocente=$_GET["iddocente"];
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

		$consulta= "select * from `ejerciciog1` where docente_iddocente='{$iddocente}'";
		$resultado=mysqli_query($conexion,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$result["idEjercicioG1"]=$registro['idEjercicioG1'];
			$result["nameEjercicioG1"]=$registro['nameEjercicioG1'];
			$json['ejerciciog1'][]=$result;
		}else{
			$result["idEjercicioG1"]=0;
			$result["nameEjercicioG1"]="no registra";
			$json['ejerciciog1'][]=$result;
		}
		
		mysqli_close($conexion);
		echo json_encode($json);
	}
	else{
		$resultar["success"]=0;
		$resultar["message"]='Ws no Retorna';
		$json['ejerciciog1'][]=$resultar;
		echo json_encode($json);
	}
?>