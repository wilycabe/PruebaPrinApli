<?php

 	include("../php/conexion.php");


	$tabla="";
	$queryBuscar="SELECT * FROM paises";


	if(isset($_POST['paises']))
	{
		$queryAux=$conexion->real_escape_string($_POST['paises']);
		$queryBuscar="SELECT * FROM paises WHERE 
			id LIKE '%".$queryAux."%' OR
			nombre LIKE '%".$queryAux."%' OR
			capital LIKE '%".$queryAux."%' OR
			codigo_iso LIKE '%".$queryAux."%' OR
			poblacion LIKE '%".$queryAux."%'OR
			moneda LIKE '%".$queryAux."%'OR
			continente LIKE '%".$queryAux."%'";
	}

	$buscarPais=$conexion->query($queryBuscar);
	if ($buscarPais->num_rows > 0)
	{
		$tabla.= 
		'<table class="table">
			<tr class="bg-primary">
				<td>id</td>
				<td>nombre</td>
				<td>capital</td>
				<td>codigo_iso</td>
				<td>poblacion</td>
				<td>moneda</td>
				<td>continente</td>
			</tr>';

		while($filaAlumnos= $buscarAlumnos->fetch_assoc())
		{
			$tabla.=
			'<tr>
				<td>'.$filaAlumnos['id'].'</td>
				<td>'.$filaAlumnos['nombre'].'</td>
				<td>'.$filaAlumnos['capital'].'</td>
				<td>'.$filaAlumnos['codigo_iso'].'</td>
				<td>'.$filaAlumnos['poblacion'].'</td>
				<td>'.$filaAlumnos['moneda'].'</td>
				<td>'.$filaAlumnos['continente'].'</td>
			</tr>
			';
		}

		$tabla.='</table>';
	} else
		{
			$tabla="No existe el pais";
		}


	echo $tabla;
?>
