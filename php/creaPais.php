<?php
/*	include('db.php');	
	echo 'Task Added Successfully';
	

	if(isset($_POST['cod_postal'])){
		$cod_postal=$_POST['cod_postal'];
        $nom_pais=$_POST['nom_pais'];
       
		$query="INSERT into pais(cod_postal, nom_pais) VALUES('$cod_postal',
		'$nom_pais')";
		$result=mysqli_query($conexion, $query);
		//$result = $conexion->query($query) ;
		
		if(!$result){
			die('Query Failed.');
		}
		//echo 'Task Added Successfully';
		
		
	}*/
	require_once 'db.php';

	
		$conexion = getConn();
		$cod_postal=$_POST['cod_postal'];
		$nom_pais=$_POST['nom_pais'];
	
		$query="INSERT into pais(cod_postal, nom_pais) VALUES('$cod_postal','$nom_pais')";
		$result=mysqli_query($conexion, $query);
		



	

	
?>