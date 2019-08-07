<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$json=array();
		//$grupo_estudiante_idgrupo_estudiante=$_GET["idgrupoest"];
		$iddocente=$_GET["iddocente"];
		$grupo_estudiante_idgrupo_estudiante=$_GET["idgrupoEst"];
				
		$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

		
		/*$consulta="select * from grupo_estudiante_has_deber INNER JOIN grupo_estudiante 
		ON  (grupo_estudiante.idgrupo_estudiante='{$grupo_estudiante_idgrupo_estudiante}')=grupo_estudiante_has_deber.grupo_estudiante_idgrupo_estudiante
		AND  grupo_estudiante.docente_iddocente='".$iddocente."'  order by id_GE_H_D asc";*/

		$consulta="select * from grupo_estudiante_has_deber where grupo_estudiante_idgrupo_estudiante='{$grupo_estudiante_idgrupo_estudiante}'";
		//AND  grupo_estudiante.docente_iddocente='".$iddocente."'  order by id_GE_H_D asc";
		
		//$consulta="select * from grupo_estudiante g1 INNER JOIN  grupo_estudiante_has_estudiante g2  ON g1.grupo_estudiante_idgrupo_estudiante=g2.grupo_estudiante_idgrupo_estudiante";

		$resultado=mysqli_query($conexion,$consulta);

		if(mysqli_num_rows($resultado)>0){
		while($registro=mysqli_fetch_array($resultado)){
			$json['id_grupoHest'][]=$registro;

			}

		}else{
			echo "0";
		}

		mysqli_close($conexion);
		echo json_encode($json);
?>

