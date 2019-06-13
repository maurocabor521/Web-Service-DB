<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="id9583494_dconfo_proyecto_v8";
$username_localhost="id9583494_dconfo";
$password_localhost="americano";

$json=array();

	//if(isset($_POST["documento"])){
		$email=$_GET["email"];
		$password=$_GET["password"];
		//$documento="331";
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

		//$consulta="select idestudiante,nameestudiante,dniestudiante,acudienteestudiante from estudiante where idestudiante= '{$documento}'";
		$consulta="select iddocente,namedocente from docente where email_docente= '".$email."' and passwork_docente= '".$password."'";
		$resultado=mysqli_query($conexion,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$json['docente'][]=$registro;
			//echo $registro['idestudiante'].' - '.$registro['nameestudiante'].' - '.$registro['acudienteestudiante'].'<br/>';
			//print_r($json);
			//echo json_encode($json);
		}else{
			$resultar["iddocente"]=0;
			$resultar["namedocente"]='no registra';
			$json['docente'][]=$resultar;
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