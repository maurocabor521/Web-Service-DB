<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	//$id_EjercicioG2_has_LetraG2 = NULL;
	$EjercicioG2_idEjercicioG2 = $_POST["EjercicioG2_idEjercicioG2"];
	$Letra = $_POST["Letra"];
	$fila_Eg2H_Lg2 = $_POST["fila_Eg2H_Lg2"];
	$col_Eg2H_Lge = $_POST["col_Eg2H_Lge"];
	
	$sql="INSERT INTO ejerciciog2_has_letrag2 VALUES (?,?,?,?)";
	//$sql="INSERT INTO `ejerciciog2_has_letrag2` (`id_EjercicioG2_has_LetraG2`, `EjercicioG2_idEjercicioG2`, `Letra`, `fila_Eg2H_Lg2`, `col_Eg2H_Lge`) VALUES (NULL, $EjercicioG2_idEjercicioG2, $Letra, $fila_Eg2H_Lg2, $col_Eg2H_Lge)";
	$stm=$conexion->prepare($sql);
	//$stm->bind_param('iisii',$id_EjercicioG2_has_LetraG2,$EjercicioG2_idEjercicioG2,$Letra,$fila_Eg2H_Lg2,$col_Eg2H_Lge);
	//INSERT INTO `ejerciciog2_has_letrag2` (`id_EjercicioG2_has_LetraG2`, `EjercicioG2_idEjercicioG2`, `Letra`, `fila_Eg2H_Lg2`, `col_Eg2H_Lge`) VALUES (NULL, '53', 'p', '1', '1');
	
	$stm->bind_param('isii',$EjercicioG2_idEjercicioG2,$Letra,$fila_Eg2H_Lg2,$col_Eg2H_Lge);
		
	if($stm->execute()){
		echo "registra";
	}else{
		echo "noRegistra";
	}
	
	mysqli_close($conexion);
?>

