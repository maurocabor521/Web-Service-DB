<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="id9583494_dconfo_proyecto_v8";
$username_localhost="id9583494_dconfo";
$password_localhost="americano";

$json=array();
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
		$estudiante_idestudiante=$_GET["estudiante_idestudiante"];
		//$docente_iddocente=$_GET["docente_iddocente"];
		//$consulta="select EjercicioG1_idEjercicioG1,EjercicioG2_idEjercicioG2,tipoDeber from estudiante_has_deber where estudiante_idestudiante='{$estudiante_idestudiante}' and docente_iddocente='{$docente_iddocente}'";
		//$consulta="select EjercicioG1_idEjercicioG1,EjercicioG2_idEjercicioG2,tipoDeber from estudiante_has_deber where estudiante_idestudiante='{$estudiante_idestudiante}'";
		$consulta="SELECT ejerciciog1.idEjercicioG1, ejerciciog1.Tipo_Actividad_idActividad FROM estudiante_has_deber where estudiante_idestudiante='{$estudiante_idestudiante}' 
		INNER JOIN  ON ejerciciog1.idEjercicioG1=estudiante_has_deber.EjercicioG1_idEjercicioG1 ";

		$resultado=mysqli_query($conexion,$consulta);
		//print_r("col:".$resultado->num_rows);
		while($registro=mysqli_fetch_array($resultado)){
			$json['deber'][]=$registro;
			//echo $registro['id'].' - '.$registro['nombre'].'<br/>';
			//print_r("col:".$resultado->num_rows);
		}
		mysqli_close($conexion);
		echo json_encode($json);
?>

