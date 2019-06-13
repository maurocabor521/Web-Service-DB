<?PHP
$hostname_localhost="localhost";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost="root";
$password_localhost="";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$id_GE_H_D = null;
	$grupo_estudiante_idgrupo_estudiante = $_POST["idgrupoestudiante"];
	$EjercicioG2_idEjercicioG2 = $_POST["idEjercicio"];
	$Asignacion_idGrupoAsignacion = $_POST["idAsignacion"];
	$fecha_gehd=$_POST["fecha_gehd"];
	$tipo_gehd=$_POST["tipo_gehd"];

	if($Asignacion_idGrupoAsignacion==0 ){
		//echo "si";
		$Asignacion_idGrupoAsignacion = null;

		$sql="INSERT INTO grupo_estudiante_has_deber VALUES (?,?,?,?,?,?)";

		$stm=$conexion->prepare($sql);
		$stm->bind_param('iiiiss',$id_GE_H_D,$grupo_estudiante_idgrupo_estudiante,$EjercicioG2_idEjercicioG2,$Asignacion_idGrupoAsignacion,$fecha_gehd,$tipo_gehd);
		//$stm->bind_param('siiisis',$nameejercicio,$iddocente,$idtipo,$idactividad,$url,$cantidadValidaEG1);
			
		if($stm->execute()){
			echo "registra";
		}else{
			echo "noRegistra_a_gehd";
			print_r($stm);
		}
		
		mysqli_close($conexion);
	}else if($EjercicioG2_idEjercicioG2==0 ){
				//echo "si";
				$EjercicioG2_idEjercicioG2=null;
				$sql="INSERT INTO grupo_estudiante_has_deber VALUES (?,?,?,?,?,?)";

				$stm=$conexion->prepare($sql);
				$stm->bind_param('iiiiss',$id_GE_H_D,$grupo_estudiante_idgrupo_estudiante,$EjercicioG2_idEjercicioG2,$Asignacion_idGrupoAsignacion,$fecha_gehd,$tipo_gehd);
				//$stm->bind_param('siiisis',$nameejercicio,$iddocente,$idtipo,$idactividad,$url,$cantidadValidaEG1);
					
				if($stm->execute()){
					echo "registra";
				}else{
					echo "noRegistra_e_gehd";
					print_r($stm);
				}
				
				mysqli_close($conexion);

	}


?>

