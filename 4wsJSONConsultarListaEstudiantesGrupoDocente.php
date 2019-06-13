<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$json=array();
		$idgrupo=$_GET["idgrupo"];
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

		$consulta="select estudiante_idestudiante,nameEstudiante from grupo_has_estudiante where grupo_idgrupo='".$idgrupo."'";

		$resultado=mysqli_query($conexion,$consulta);
		//print_r("col:".$resultado->num_rows);
	/*	while($registro=mysqli_fetch_array($resultado)){
			$json['grupo_h_e'][]=$registro;
			//echo $registro['id'].' - '.$registro['nombre'].'<br/>';
			//print_r("col:".$resultado->num_rows);

			wsJSONConsultarListaEstudiantesGrupo
		}*/
		if(mysqli_num_rows($resultado)>0){
			/*$datos=array();
			$datos[] = array_map("utf8_encode", mysqli_fetch_assoc($resultado));
			$json_array = json_encode($datos);
			echo $json_array; //solo devuelve el primero de la lista no toda la lista */

				while($registro=mysqli_fetch_array($resultado)){
			$json['grupo_h_e'][]=$registro;
			//echo $registro['id'].' - '.$registro['nombre'].'<br/>';
			//print_r("col:".$resultado->num_rows);
			}

		}else{
			echo "0";
		}

		mysqli_close($conexion);
		echo json_encode($json);
?>

