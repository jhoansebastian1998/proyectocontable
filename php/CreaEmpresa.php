<?php

	require_once 'db.php';

	
		$conexion = getConn();
		$nom_empresa=$_POST['nom_empresa'];
        $nit=$_POST['nit'];
        $telefono=$_POST['telefono'];
        $direccion=$_POST['direccion'];
        $id_ciudad=$_POST['listciudad'];
        $id_pais=$_POST['lista_reproduccion'];
        $rep_legal=$_POST['rep_legal'];
        $email=$_POST['email'];
	
		$query="INSERT into emprsa(nom_empresa, nit, telefono, direccion, id_ciudad, id_pais, rep_legal, email) 
        VALUES('$nom_empresa','$nit','$telefono','$direccion','$id_ciudad','$id_pais','$rep_legal','$email')";
		$result=mysqli_query($conexion, $query);
		



	

	
?>