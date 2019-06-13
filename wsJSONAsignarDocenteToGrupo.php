<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$idgrupo = $_POST["idgrupo"];
	//$curso_idcurso = $_POST["curso_idcurso"];
	$docente_idDocente = $_POST["docente_iddocente"];
		
	//$sql="UPDATE  `grupo` SET `docente_iddocente`=? WHERE `docente_iddocente`=NULL AND `idgrupo`=? AND `curso_idcurso`=?";
	//$sql="UPDATE `grupo` SET `docente_iddocente` = ? WHERE `grupo`.`idgrupo` = ?;";
	//$sql="UPDATE `grupo` SET `docente_iddocente` = ? WHERE `idgrupo` = ?";
	//$sql = "UPDATE `grupo` SET `docente_iddocente` = 20181 WHERE `grupo`.`idgrupo` = ?";->sirve
	//$sql = "UPDATE `grupo` SET `docente_iddocente` = '{$docente_idDocente}' WHERE `grupo`.`idgrupo` = ?";
	$sql = "UPDATE `grupo` SET `docente_iddocente` = '{$docente_idDocente}' WHERE `idgrupo` = ?";
	$stm=$conexion->prepare($sql);
	//$stm->bind_param('iii',$docente_iDdocente,$idgrupo,$curso_idcurso);
	//$stm->bind_param('ii',$docente_iDdocente,$idgrupo);
	$stm->bind_param('i',$idgrupo);
		//print_r($stm);
	if($stm->execute()){
		echo "registra";
	
		//echo $docente_idDocente;
	}else{
		echo "noRegistra";
		
	}
	
	mysqli_close($conexion);
?>

