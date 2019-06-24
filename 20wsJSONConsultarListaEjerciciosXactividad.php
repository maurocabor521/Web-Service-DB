<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$json=array();
		
		$iddocente=$_GET["iddocente"];
		$idactividad=$_GET["idactividad"];
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

		//$consulta="select idcurso,Instituto_idInstituto,namecurso,periodocurso from curso";
		$consulta= "select * from `ejerciciog2` where docente_iddocente='{$iddocente}' and Tipo_Actividad_idActividad='{$idactividad}' ";
		//$consulta= "select * from `ejerciciog2`";

		$resultado=mysqli_query($conexion,$consulta);


		while($registro=mysqli_fetch_array($resultado)){
			$json['ejerciciog2'][]=$registro;

		}

		mysqli_close($conexion);
		echo json_encode($json);
?>

