<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$json=array();
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
		$estudiante_idestudiante=$_GET["estudiante_idestudiante"];
		$actividad=$_GET["actividad"];
		//$docente_iddocente=$_GET["docente_iddocente"];
		//$consulta="select EjercicioG1_idEjercicioG1,EjercicioG2_idEjercicioG2,tipoDeber from estudiante_has_deber where estudiante_idestudiante='{$estudiante_idestudiante}' and docente_iddocente='{$docente_iddocente}'";

		//$consulta1="select * from estudiante_has_deber where estudiante_idestudiante='{$estudiante_idestudiante}'";
		if($estudiante_idestudiante!="" && $actividad=="g"){
			$consulta="select * from estudiante_has_deber where estudiante_idestudiante='{$estudiante_idestudiante}' and calificacionestudiante_has_Deber IS NOT NULL
			and grupo_estudiante_has_deber_id_GE_H_D IS NOT NULL 
			ORDER BY SUBSTR(fechaestudiante_has_Deber,2,4) + SUBSTR(fechaestudiante_has_Deber, 0, 4) DESC";
			$resultado=mysqli_query($conexion,$consulta);
			
			while($registro=mysqli_fetch_array($resultado)){
				$json['deber_nota3'][]=$registro;
			}


		}else 
		if($estudiante_idestudiante!="" && $actividad=="a"){
			//echo "lleno";
			$consulta="select * from estudiante_has_deber where estudiante_idestudiante='{$estudiante_idestudiante}' and calificacionestudiante_has_Deber IS NOT NULL
			and Asignacion_idGrupoAsignacion IS NOT NULL 
			ORDER BY SUBSTR(fechaestudiante_has_Deber,2,4) + SUBSTR(fechaestudiante_has_Deber, 0, 4) DESC";
			$resultado=mysqli_query($conexion,$consulta);
			
			while($registro=mysqli_fetch_array($resultado)){
				$json['deber_nota3'][]=$registro;
			}
			/*echo "no vacio";
			$consulta1="select * from estudiante where idestudiante='{$estudiante_idestudiante}'";

			$resultado1=mysqli_query($conexion,$consulta1);
		
			while($registro1=mysqli_fetch_array($resultado1)){
			$json['deber_nota1'][]=$registro1;

			}*/
		}

		mysqli_close($conexion);
		echo json_encode($json);
		

?>

