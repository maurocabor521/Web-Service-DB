<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";
/*$database_localhost ="id9583494_dconfo_proyecto_v8";
$username_localhost="id9583494_dconfo";
$password_localhost="americano";
*/
$json=array();
				
$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
$estudiante_idestudiante=$_GET["estudiante_idestudiante"];
$grupo_estudiante_has_deber_id_GE_H_D=$_GET["grupo_estudiantes"];
$id_docente=$_GET["iddocente"];
$tipo=$_GET["tipo"];
//$docente_iddocente=$_GET["docente_iddocente"];
//$consulta="select EjercicioG1_idEjercicioG1,EjercicioG2_idEjercicioG2,tipoDeber from estudiante_has_deber where estudiante_idestudiante='{$estudiante_idestudiante}' and docente_iddocente='{$docente_iddocente}'";

//$consulta1="select * from estudiante_has_deber where estudiante_idestudiante='{$estudiante_idestudiante}'";
if($estudiante_idestudiante!=""){
	//echo "vacio";
	$consulta="select * from estudiante_has_deber where tipoDeber='{$tipo}'";
	//echo $consulta;
	$consulta="select * from estudiante_has_deber where  calificacionestudiante_has_Deber IS NOT NULL and docente_iddocente='{$id_docente}' 
	and estudiante_idestudiante='{$estudiante_idestudiante}' and tipoDeber='{$tipo}'
	ORDER BY SUBSTR(fechaestudiante_has_Deber,2,4) + SUBSTR(fechaestudiante_has_Deber, 0, 4) DESC";

	$resultado=mysqli_query($conexion,$consulta);
	
	while($registro=mysqli_fetch_array($resultado)){
		$json['deber_nota'][]=$registro;

	}


}else if($grupo_estudiante_has_deber_id_GE_H_D!=""){
	$consulta="select * from estudiante_has_deber where  calificacionestudiante_has_Deber IS NOT NULL and docente_iddocente='{$id_docente}' 
	and tipoDeber='{$tipo}' and grupo_estudiante_has_deber_id_GE_H_D='{$grupo_estudiante_has_deber_id_GE_H_D}'
	ORDER BY SUBSTR(fechaestudiante_has_Deber,2,4) + SUBSTR(fechaestudiante_has_Deber, 0, 4) DESC";
	$resultado=mysqli_query($conexion,$consulta);
	
	while($registro=mysqli_fetch_array($resultado)){
		$json['deber_nota1'][]=$registro;
	}

}

mysqli_close($conexion);
echo json_encode($json);
		

?>

