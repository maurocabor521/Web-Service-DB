<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="id9583494_dconfo_proyecto_v8";
$username_localhost="id9583494_dconfo";
$password_localhost="americano";
$json=array();
$conexion=mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);

	$password = $_POST["password"];
	$email = $_POST["email"];

	//$sql="INSERT INTO grupo VALUES (?,?,?,?,?)";
	//SELECT * FROM usuarios WHERE (username='".$useroremail."' OR email='".$useroremail."') AND password='".$password."
	
	//$sql="SELECT * FROM login WHERE (password='".$password."')AND (email='".$email."')";
	//$stm=$conexion->prepare($sql);
	
	//$stm->bind_param('ss',$password,$email);
	

	  //$resultado = $conexion->query("SELECT * FROM login WHERE (password='".$password."')AND (email='".$email."')");
	  //$row_cnt = $resultado->num_rows;
	  
	//$consulta="SELECT * FROM login WHERE (password='".$password."')AND (email='".$email."')";
	//$consulta="SELECT * FROM login WHERE (password='20181')AND (email='20181')";
	//$consulta="select * from usuario where usuarioemail= '{$email}' and usuariopassword='{$password}' ";
	$consulta="select * from docente where password= '{$password}' and email='{$email}' ";
	$resultado=mysqli_query($conexion,$consulta);
	//print_r($resultado);
      if($resultado->num_rows != 0){
           $login = $resultado->fetch_array(MYSQLI_ASSOC); 
			echo "registra\n";
			//print_r($login);
				  //print "Usuario y password correctos.";
          }else
	   echo "no Registra";
   	/*	if($registro=mysqli_fetch_array($resultado)){
			$json['login'][]=$registro;
		//	echo $registro['id'].' - '.$registro['nombre'].' - '.$registro['profesion'].'<br/>';
		}
		
			//mysqli_close($conexion);
            //usuario y/o password incorrectas
           // print "Usuario y/o password incorrectos".$resultado;
            //print "Usuario y/o password incorrectos".$resultado.";
        
	

?>

