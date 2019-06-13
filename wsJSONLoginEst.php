<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";
$json=array();
$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$password = $_POST["passwork_estudiante"];
	//$password = 220;
	$email = $_POST["emailAcudienteestudiante"];
	//$email = "jemail";


	$consulta="select * from estudiante where emailAcudienteestudiante='{$email}' and passwork_estudiante= '{$password}' ";
	//$consulta="select * from docente where iddocente='{$password}' ";
	//$consulta="select * from docente where email_docente='jemail' and passwork_docente= '123'";
	$resultado=mysqli_query($conexion,$consulta);
	//print_r($resultado);
	
	
	//registra
   /*  if($resultado->num_rows != 0){
           $docente = $resultado->fetch_array(MYSQLI_ASSOC); 
			echo "registra\n";
			//print_r($docente);
				  //print "Usuario y password correctos.";
          }else*/
	   //echo "no Registra";
	   
	   
	//json
		if($registro=mysqli_fetch_array($resultado)){
			$json['estudiante'][]=$registro;
			//print "Usuario correcto";
		echo $registro['idestudiante'];
		}else{
		
			//mysqli_close($conexion);
            //usuario y/o password incorrectas
		print "Usuario y/o password incorrectos";}
            //print "Usuario y/o password incorrectos".$resultado.";
        
	

?>

