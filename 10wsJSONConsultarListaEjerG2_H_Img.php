<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$json=array();
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
		
		$EjercicioG2_idEjercicioG2=$_GET["idejercicioG2"];
		
		$consulta="select EjercicioG2_idEjercicioG2,Imagen_idImagen_Ejercicio,fila_E_h_I,columna_E_H_I from ejerciciog2_has_imagen where EjercicioG2_idEjercicioG2='{$EjercicioG2_idEjercicioG2}'";

		$resultado=mysqli_query($conexion,$consulta);
		//print_r("col:".$resultado->num_rows);
		while($registro=mysqli_fetch_array($resultado)){
			$json['ejerg2hasimagen'][]=$registro;
			//echo $registro['id'].' - '.$registro['nombre'].'<br/>';
			//print_r("col:".$resultado->num_rows);
		}
		mysqli_close($conexion);
		echo json_encode($json);
?>

