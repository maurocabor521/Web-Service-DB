<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	//$id_GE_H_D=null;
	$estudiante_idestudiante = $_POST["estudiante_idestudiante"];
	$docente_iddocente = $_POST["docente_iddocente"];
	$EjercicioG2_idEjercicioG2 = $_POST["EjercicioG2_idEjercicioG2"];
	$grupo_estudiante_has_deber_id_GE_H_D = $_POST["grupo_estudiante_has_deber"];
	$Asignacion_idGrupoAsignacion = $_POST["estudiante_has_Asignacion"];
	$idgrupo = $_POST["idgrupo"];
	$fechaestudiante_has_Deber = $_POST["fechaestudiante_has_Deber"];
	$tipoDeber = $_POST["tipoDeber"];

	//echo $grupo_estudiante_has_deber;

	if($grupo_estudiante_has_deber_id_GE_H_D==0 AND $Asignacion_idGrupoAsignacion==0){
		//echo "si";
		$sql="INSERT INTO estudiante_has_deber(`estudiante_idestudiante`, `docente_iddocente`, `EjercicioG2_idEjercicioG2`,`grupo_idgrupo`,  `fechaestudiante_has_Deber`, `tipoDeber`)VALUES (?,?,?,?,?,?)";
		$stm=$conexion->prepare($sql);
		$stm->bind_param('iiiiss',$estudiante_idestudiante,$docente_iddocente,$EjercicioG2_idEjercicioG2,$idgrupo,$fechaestudiante_has_Deber,$tipoDeber);
		if($stm->execute()){
			echo "registra";
		}else{
			echo "noRegistra_g_a_";
		}
		
		mysqli_close($conexion);
	}else if($grupo_estudiante_has_deber_id_GE_H_D==0 ){
		//echo "si";
		$sql="INSERT INTO estudiante_has_deber(`estudiante_idestudiante`, `docente_iddocente`, `EjercicioG2_idEjercicioG2`, `Asignacion_idGrupoAsignacion`,`grupo_idgrupo`,  `fechaestudiante_has_Deber`, `tipoDeber`)VALUES (?,?,?,?,?,?,?)";
		$stm=$conexion->prepare($sql);
		$stm->bind_param('iiiiiss',$estudiante_idestudiante,$docente_iddocente,$EjercicioG2_idEjercicioG2,$Asignacion_idGrupoAsignacion,$idgrupo,$fechaestudiante_has_Deber,$tipoDeber);
		if($stm->execute()){
			echo "registra";
		}else{
			echo "noRegistra_g_";
		}
		
		mysqli_close($conexion);
	}else if($Asignacion_idGrupoAsignacion==0 ){
		//echo "si";
		$sql="INSERT INTO estudiante_has_deber(`estudiante_idestudiante`, `docente_iddocente`, `EjercicioG2_idEjercicioG2`,`grupo_estudiante_has_deber_id_GE_H_D`,`grupo_idgrupo`,  `fechaestudiante_has_Deber`, `tipoDeber`)VALUES (?,?,?,?,?,?,?)";
		$stm=$conexion->prepare($sql);
		$stm->bind_param('iiiiiss',$estudiante_idestudiante,$docente_iddocente,$EjercicioG2_idEjercicioG2,$grupo_estudiante_has_deber_id_GE_H_D,$idgrupo,$fechaestudiante_has_Deber,$tipoDeber);
		if($stm->execute()){
			echo "registra";
		}else{
			echo "noRegistra_a_";
		}
		
		mysqli_close($conexion);
	}
	else if($grupo_estudiante_has_deber_id_GE_H_D!=0 AND $Asignacion_idGrupoAsignacion!=0 ){
		//echo "si";
		$sql="INSERT INTO estudiante_has_deber(`estudiante_idestudiante`, `docente_iddocente`, `EjercicioG2_idEjercicioG2`,`grupo_estudiante_has_deber_id_GE_H_D`,`Asignacion_idGrupoAsignacion`,`grupo_idgrupo`,  `fechaestudiante_has_Deber`, `tipoDeber`)VALUES (?,?,?,?,?,?,?,?)";
		$stm=$conexion->prepare($sql);
		$stm->bind_param('iiiiiiss',$estudiante_idestudiante,$docente_iddocente,$EjercicioG2_idEjercicioG2,$grupo_estudiante_has_deber_id_GE_H_D,$Asignacion_idGrupoAsignacion,$idgrupo,$fechaestudiante_has_Deber,$tipoDeber);
		if($stm->execute()){
			echo "registra";
		}else{
			echo "noRegistra_si_a_g";
		}
		
		mysqli_close($conexion);
	}
	//$calificacionestudiante_has_Deber = $_POST["calificacionestudiante_has_Deber"];

	//$sql="INSERT INTO estudiante_has_deber(estudiante_idestudiante,docente_iddocente,EjercicioG2_idEjercicioG2,fechaestudiante_has_Deber,tipoDeber,calificacionestudiante_has_Deber)VALUES (?,?,?,?,?,?)";

	//$sql = "INSERT INTO `estudiante_has_deber` (`id_estudiante_has_Debercol`, `estudiante_idestudiante`, `docente_iddocente`, `EjercicioG2_idEjercicioG2`, `grupo_estudiante_has_deber_id_GE_H_D`, `estudiante_has_Asignacion_id_estudiante_has_Asi`, `grupo_idgrupo`, `fechaestudiante_has_Deber`, `tipoDeber`, `calificacionestudiante_has_Deber`) VALUES (NULL, \'331\', \'220\', \'100\', NULL, NULL, \'5\', \'04/06/2019\', \'EVALUAR\', NULL)";	
	
	//$sql="INSERT INTO estudiante_has_deber(`estudiante_idestudiante`, `docente_iddocente`, `EjercicioG2_idEjercicioG2`, `grupo_estudiante_has_deber_id_GE_H_D`, `estudiante_has_Asignacion_id_estudiante_has_Asi`, `grupo_idgrupo`, `fechaestudiante_has_Deber`, `tipoDeber`, `calificacionestudiante_has_Deber`)VALUES (?,?,?,?,?,?,?,?,?)";
	
	//$sql="INSERT INTO estudiante_has_deber(`estudiante_idestudiante`, `docente_iddocente`, `EjercicioG2_idEjercicioG2`,`grupo_idgrupo`,  `fechaestudiante_has_Deber`, `tipoDeber`)VALUES (?,?,?,?,?,?)";
	//$stm=$conexion->prepare($sql);

	//$stm->bind_param('iiissi',$estudiante_idestudiante,$docente_iddocente,$EjercicioG2_idEjercicioG2,$fechaestudiante_has_Deber,$tipoDeber,$calificacionestudiante_has_Deber);
	
	//$stm->bind_param('iiiiiissi',$estudiante_idestudiante,$docente_iddocente,$EjercicioG2_idEjercicioG2,$grupo_estudiante_has_deber,$estudiante_has_Asignacion,$idgrupo,$fechaestudiante_has_Deber,$tipoDeber,$calificacionestudiante_has_Deber);

?>

