<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="id9583494_dconfo_proyecto_v8";
$username_localhost="id9583494_dconfo";
$password_localhost="americano";

$json=array();
		$grupo_estudiante_idgrupo_estudiante=$_GET["idgrupoest"];
		//$iddocente=$_GET["iddocente"];
		//$grupo_idgrupo=$_GET["idgrupo"];
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

		$consulta="select * from grupo_estudiante_has_estudiante where grupo_estudiante_idgrupo_estudiante='".$grupo_estudiante_idgrupo_estudiante."'  ";
		//$consulta="select * from grupo_estudiante g1 INNER JOIN  grupo_estudiante_has_estudiante g2  ON g1.grupo_estudiante_idgrupo_estudiante=g2.grupo_estudiante_idgrupo_estudiante";

		$resultado=mysqli_query($conexion,$consulta);

		if(mysqli_num_rows($resultado)>0){
		while($registro=mysqli_fetch_array($resultado)){
			$json['grupo_estudiante_has_estudiante'][]=$registro;

			}

		}else{
			echo "0";
		}

		mysqli_close($conexion);
		echo json_encode($json);
?>

