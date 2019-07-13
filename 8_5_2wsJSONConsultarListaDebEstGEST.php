<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$json=array();
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
		$idgrupoesthasdeber=$_GET["idgrupoesthasdeber"];
		//$docente_iddocente=$_GET["docente_iddocente"];
		//$consulta="select EjercicioG1_idEjercicioG1,EjercicioG2_idEjercicioG2,tipoDeber from estudiante_has_deber where estudiante_idestudiante='{$estudiante_idestudiante}' and docente_iddocente='{$docente_iddocente}'";

		//$consulta1="select * from estudiante_has_deber where estudiante_idestudiante='{$estudiante_idestudiante}'";
		$consulta="select * from estudiante_has_deber where grupo_estudiante_has_deber_id_GE_H_D='{$idgrupoesthasdeber}' AND calificacionestudiante_has_Deber IS NULL 
		ORDER BY SUBSTR(fechaestudiante_has_Deber,2,4) + SUBSTR(fechaestudiante_has_Deber, 0, 4) DESC";

		$resultado=mysqli_query($conexion,$consulta);
		//print_r("col:".$resultado->num_rows);
		while($registro=mysqli_fetch_array($resultado)){
			$json['notasdeberxgehd'][]=$registro;
			//echo $registro['id'].' - '.$registro['nombre'].'<br/>';
			//print_r("col:".$resultado->num_rows);
		}

		/*$resultado1=mysqli_query($conexion,$consulta1);
		//print_r("col:".$resultado->num_rows);
		while($registro1=mysqli_fetch_array($resultado1)){
			$json['deber1'][]=$registro1;
			//echo $registro['id'].' - '.$registro['nombre'].'<br/>';
			//print_r("col:".$resultado->num_rows);
		}*/
		
		mysqli_close($conexion);
		echo json_encode($json);
?>

