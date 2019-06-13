<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="id9583494_dconfo_proyecto_v8";
$username_localhost="id9583494_dconfo";
$password_localhost="americano";

$json=array();
		$idactividad=$_GET["idactividad"];
		//$iddocente=$_GET["iddocente"];
		//$idgrupo=$_GET["idgrupo"];
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

		$consulta="select EjercicioG2_idEjercicioG2 from asignacion_has_ejerciciog2 where Asignacion_idGrupoAsignacion='".$idactividad."' ";

		$resultado=mysqli_query($conexion,$consulta);

		if(mysqli_num_rows($resultado)>0){
		while($registro=mysqli_fetch_array($resultado)){
			$json['asignacion_has_ejerciciog2'][]=$registro;

			}

		}else{
			echo "0";
		}

		mysqli_close($conexion);
		echo json_encode($json);
?>

