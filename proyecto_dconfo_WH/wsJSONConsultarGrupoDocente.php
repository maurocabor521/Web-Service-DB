<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="id9583494_dconfo_proyecto_v8";
$username_localhost="id9583494_dconfo";
$password_localhost="americano";

$json=array();

	if(isset($_POST["iddocente"])){
		//$iddocente=$_GET["iddocente"];
		$iddocente=$_POST["iddocente"];
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

		//$consulta="select idgrupo,namegrupo,curso_idcurso,curso_Instituto_idInstituto from grupo where iddocente= '{$iddocente}'";
		$consulta= "select idgrupo,namegrupo,curso_idcurso,curso_Instituto_idInstituto from `grupo` where docente_iddocente='{$iddocente}'";
		$resultado=mysqli_query($conexion,$consulta);
			
		if($registro=mysqli_fetch_array($resultado)){
			$json['grupo'][]=$registro;
			echo $registro['idgrupo'];
		}else{
			$resultar["idgrupo"]=0;
			$resultar["namegrupo"]='no registra';
			$resultar["idcurso"]=0;
			$resultar["idinstituto"]=0;
			$resultar["iddocente"]=0;
			$json['grupo'][]=$resultar;
		}
		
		mysqli_close($conexion);
		echo json_encode($json);
	}
	else{
		//print_r($resultado);
		$resultar["success"]=0;
		$resultar["message"]='Ws no Retorna';
		$json['grupo'][]=$resultar;
		echo json_encode($json);
	}
?>