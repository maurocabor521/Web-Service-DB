<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="id9583494_dconfo_proyecto_v8";
$username_localhost="id9583494_dconfo";
$password_localhost="americano";

$json=array();
		$idgrupo=$_GET["idgrupo"];
		$iddocente=$_GET["iddocente"];
		$idactividad=$_GET["idactividad"];
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

		$consulta="select * from asignacion where docente_iddocente='".$iddocente."' and grupo_idgrupo='".$idgrupo."' and Actividad_idActividad='".$idactividad."'";

		$resultado=mysqli_query($conexion,$consulta);

		if(mysqli_num_rows($resultado)>0){
		while($registro=mysqli_fetch_array($resultado)){
			$json['asignacion'][]=$registro;

			}

		}else{
			echo "0";
		}

		mysqli_close($conexion);
		echo json_encode($json);
?>

