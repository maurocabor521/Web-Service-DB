<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$json=array();
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
		$id_grupo_estudiante=$_GET["id_grupo_estudiante"];
		//$docente_iddocente=$_GET["docente_iddocente"];
		//$consulta="select EjercicioG1_idEjercicioG1,EjercicioG2_idEjercicioG2,tipoDeber from estudiante_has_deber where estudiante_idestudiante='{$estudiante_idestudiante}' and docente_iddocente='{$docente_iddocente}'";

		//$consulta1="select * from estudiante_has_deber where estudiante_idestudiante='{$estudiante_idestudiante}'";
		if($id_grupo_estudiante!=""){

			/*SELECT grupo_estudiante_idgrupo_estudiante
			FROM grupo_estudiante_has_deber
			INNER JOIN estudiante_has_deber
			ON grupo_estudiante_has_deber.grupo_estudiante_has_deber_id_GE_H_D=estudiante_has_deber.grupo_estudiante_has_deber_id_GE_H_D;*/

			//***************************************************************************************** */
			//echo "vacio";
			$consulta="select * from grupo_estudiante_has_deber where grupo_estudiante_idgrupo_estudiante='{$id_grupo_estudiante}'  
			ORDER BY SUBSTR(fecha_gehd,2,4) + SUBSTR(fecha_gehd, 0, 4) DESC";
			$resultado=mysqli_query($conexion,$consulta);
			
			while($registro=mysqli_fetch_array($resultado)){
				$json['deber_nota'][]=$registro;

			}


		}else if($id_grupo_estudiante==""){
			$consulta="select * from estudiante_has_deber where grupo_estudiante_has_deber_id_GE_H_D='{$id_grupo_estudiante}' and calificacionestudiante_has_Deber IS NOT NULL 
			ORDER BY SUBSTR(fechaestudiante_has_Deber,2,4) + SUBSTR(fechaestudiante_has_Deber, 0, 4) DESC";
			$resultado=mysqli_query($conexion,$consulta);
			
			while($registro=mysqli_fetch_array($resultado)){
				$json['deber_nota_grupo'][]=$registro;
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

