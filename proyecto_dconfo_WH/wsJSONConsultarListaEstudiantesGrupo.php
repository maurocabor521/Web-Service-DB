<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="id9583494_dconfo_proyecto_v8";
$username_localhost="id9583494_dconfo";
$password_localhost="americano";
$json=array();
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
		
		$idgrupo=$_GET["idgrupo"];
		
		$consulta="select grupo_idgrupo,estudiante_idestudiante from grupo_has_estudiante where grupo_idgrupo='{$idgrupo}'";

		$resultado=mysqli_query($conexion,$consulta);
		//print_r("col:".$resultado->num_rows);
		while($registro=mysqli_fetch_array($resultado)){
			$json['estudiantes'][]=$registro;
			//echo $registro['id'].' - '.$registro['nombre'].'<br/>';
			//print_r("col:".$resultado->num_rows);
		}
		mysqli_close($conexion);
		echo json_encode($json);
?>

//wsJSONConsultarListaEstudiantesGrupoDocente.php