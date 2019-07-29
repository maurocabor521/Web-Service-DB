<?PHP
$hostname_localhost ="localhost";
//$database_localhost ="dconfo_proyecto";
//$database_localhost ="dconfo_proyecto_v1";
$database_localhost ="dconfo_proyecto_v8";
$username_localhost ="root";
$password_localhost ="";

$json=array();
		
	$conexion = mysqli_connect($hostname_localhost,$username_localhost,$password_localhost,$database_localhost);
	//$idEjercicioG2 = $_GET["idEjercicioG2"];
	$idEstudiante = $_GET["idEstudiante"];
	//$password = 220;
	
	//$email = "jemail";


	//$consulta="select * from ejerciciog2 where idEjercicioG2='{$idEjercicioG2}' ";

	/*$consulta="SELECT ejerciciog2.idEjercicioG2,ejerciciog2.Tipo_Actividad_idActividad,estudiante_has_deber.calificacionestudiante_has_Deber
 	FROM estudiante_has_deber JOIN ejerciciog2 
    ON estudiante_has_deber.EjercicioG2_idEjercicioG2=ejerciciog2.idEjercicioG2
	WHERE estudiante_has_deber.estudiante_idestudiante='{$idEstudiante}'";*/

	/*SELECT OrderID, C.CustomerID, CompanyName, OrderDate
	FROM Customers C, Orders O, Employees E
	WHERE C.CustomerID = O.CustomerID AND O.EmployeeID = E.EmployeeID*/

	/*$consulta="SELECT J.idEjercicioG2,J.Tipo_Actividad_idActividad,D.calificacionestudiante_has_Deber
	FROM estudiante E, estudiante_has_deber D, ejerciciog2 J
	WHERE D.estudiante_idestudiante = '{$idEstudiante}' AND D.EjercicioG2_idEjercicioG2=J.idEjercicioG2
	ORDER BY J.idEjercicioG2";*/

	/*SELECT
	alumno_id,clase,nombre_id,nombre
	FROM
	alumnos A INNER JOIN nombres N ON A.alumno_id = N.alumno_id
	WHERE
	A.alumno_id=22;*/

	/*SELECT a.ciclista, a.anio, a.puntos, b.id 
	FROM ciclismofem_ranking a 
	INNER JOIN ciclismofem_ciclistas b ON a.ciclista = b.id  
	WHERE
	a.anio=$temporada AND 
	a.ciclista IN (Aquí seleccionas a los ciclistas que tengan 23 años)
	ORDER BY puntos DESC*/

	$consulta="SELECT  idEjercicioG2, Tipo_Actividad_idActividad, calificacionestudiante_has_Deber
	FROM estudiante_has_deber D
	Inner Join ejerciciog2  on ejerciciog2.idEjercicioG2=D.EjercicioG2_idEjercicioG2 
	where D.estudiante_idestudiante = '{$idEstudiante}'
	";

	/*$consulta = "SELECT E.idEjercicioG2, E.Tipo_Actividad_idActividad, D.calificacionestudiante_has_Deber\n"

	. "	FROM estudiante_has_deber D \n"

	. "	Inner Join ejerciciog2 E on E.idEjercicioG2=D.EjercicioG2_idEjercicioG2 \n"

	. "	where D.estudiante_idestudiante = '{$idEstudiante}'";*/

	/*$consulta="SELECT idEjercicioG2,Tipo_Actividad_idActividad,calificacionestudiante_has_Deber
	FROM  estudiante_has_deber D JOIN ejerciciog2 E ON D.EjercicioG2_idEjercicioG2=E.idEjercicioG2
	WHERE D.estudiante_idestudiante = '{$idEstudiante}' ";*/

	/*$consulta="select ejerciciog2.idEjercicioG2,ejerciciog2.Tipo_Actividad_idActividad,estudiante_has_deber.calificacionestudiante_has_Deber
	from estudiante_has_deber 
	INNER JOIN ejerciciog2 ON estudiante_has_deber.EjercicioG2_idEjercicioG2=ejerciciog2.idEjercicioG2";*/
	//INNER JOIN ejerciciog2 ON estudiante_has_deber.EjercicioG2_idEjercicioG2=ejerciciog2.idEjercicioG2";

	//INNER JOIN ejerciciog2 ON (estudiante_has_deber.EjercicioG2_idEjercicioG2='{$idEjercicioG2}')=ejerciciog2.idEjercicioG2";sirve

	//from estudiante_has_deber where idEjercicioG2='{$idEjercicioG2}'
	// * from  where idEjercicioG2='{$idEjercicioG2}' ";
	//grupo_estudiante_has_deber
	//$consulta="select * from ejerciciog2 where idEjercicioG2='{$idEjercicioG2}' ";
		$resultado=mysqli_query($conexion,$consulta);
		
			
		if($registro=mysqli_fetch_array($resultado)){
			$json['ejerciciog2'][]=$registro;
			//echo $registro['idestudiante'].' - '.$registro['nameestudiante'].' - '.$registro['acudienteestudiante'].'<br/>';
			//print_r($json);
			//echo json_encode($json);
		}else{
			$resultar["idEjercicioG2"]=0;
			$resultar["nameEjercicioG2"]='no registra';
			$json['ejerciciog2'][]=$resultar;
		}
		
		mysqli_close($conexion);
		echo json_encode($json);
	//}
	/*else{
		$resultar["success"]=0;
		$resultar["message"]='Ws no Retorna';
		$json['estudiante'][]=$resultar;
		echo json_encode($json);
	}*/
?>