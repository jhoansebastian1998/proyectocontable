<?php
  /*  include('db.php');
	echo 'Task Added Successfully';
	

	if(isset($_POST['cod_ciudad'])){
		$cod_ciudad=$_POST['cod_ciudad'];
        $nom_ciudad=$_POST['nom_ciudad'];
       
		$query="INSERT into ciudad(cod_ciudad, nom_ciudad) VALUES('$cod_ciudad',
		'$nom_ciudad')";
		$result=mysqli_query($conexion, $query);
		
		if(!$result){
			die('Query Failed.');
		}
		//echo 'Task Added Successfully';
		
		
	}*/
	require_once 'db.php';

	
		$conexion = getConn();
		$cod_ciudad=$_POST['cod_ciudad'];
		$nom_ciudad=$_POST['nom_ciudad'];
		$id_pais=$_POST['lista_reproduccion'];
	
		$query="INSERT into ciudad(cod_ciudad, nom_ciudad,id_pais) VALUES('$cod_ciudad','$nom_ciudad','$id_pais')";
		$result=mysqli_query($conexion, $query);
?>