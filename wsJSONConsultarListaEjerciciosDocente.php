<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$json=array();
		
		$iddocente=$_GET["iddocente"];
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

		//$consulta="select idcurso,Instituto_idInstituto,namecurso,periodocurso from curso";
		$consulta= "select idEjercicioG1,nameEjercicioG1,docente_iddocente,Tipo_idTipo,Tipo_Actividad_idActividad from `ejerciciog1` where docente_iddocente='{$iddocente}'";

		$resultado=mysqli_query($conexion,$consulta);


		while($registro=mysqli_fetch_array($resultado)){
			$json['ejerciciog1'][]=$registro;

		}

		mysqli_close($conexion);
		echo json_encode($json);
?>

