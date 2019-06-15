<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$json=array();
		$idgrupo=$_GET["idgrupo"];
		$iddocente=$_GET["iddocente"];
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

		//$consulta="select * from grupo_estudiante where grupo_idgrupo='".$idgrupo."' and docente_iddocente='".$iddocente."' ";
		$consulta="select * from grupo_estudiante where grupo_idgrupo='".$idgrupo."' and docente_iddocente='".$iddocente."' order by idgrupo_estudiante asc";
		$resultado=mysqli_query($conexion,$consulta);

		if(mysqli_num_rows($resultado)>0){
			while($registro=mysqli_fetch_array($resultado)){
			$json['grupo_estudiante'][]=$registro;

			}

		}else{
			echo "0";
		}

		mysqli_close($conexion);
		echo json_encode($json);
?>

