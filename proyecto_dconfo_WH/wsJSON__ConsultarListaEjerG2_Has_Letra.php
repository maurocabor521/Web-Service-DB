<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="id9583494_dconfo_proyecto_v8";
$username_localhost="id9583494_dconfo";
$password_localhost="americano";

$json=array();
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
		
		$EjercicioG2_idEjercicioG2=$_GET["idejercicioG2"];
		
		$consulta="select * from ejerciciog2_has_letrag2 where EjercicioG2_idEjercicioG2='{$EjercicioG2_idEjercicioG2}'";

		$resultado=mysqli_query($conexion,$consulta);
		//print_r("col:".$resultado->num_rows);
		while($registro=mysqli_fetch_array($resultado)){
			$json['ejerciciog2_has_letrag2'][]=$registro;
			//echo $registro['id'].' - '.$registro['nombre'].'<br/>';
			//print_r("col:".$resultado->num_rows);
		}
		mysqli_close($conexion);
		echo json_encode($json);
?>

