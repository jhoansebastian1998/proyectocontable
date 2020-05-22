<?php
    include('conexion.php');
	echo 'Task Added Successfully';
	

	if(isset($_POST['empresa'])){
		$empresa=$_POST['empresa'];
        $contacto=$_POST['contacto'];
        $email=$_POST['email'];
        $telefono=$_POST['telefono'];
        $comentario=$_POST['comentario'];
		$query="INSERT into interesados(empresa, contacto,email,telefono,comentario) VALUES('$empresa',
		'$contacto','$email','$telefono','$comentario')";
		$result=mysqli_query($conexion, $query);
		
		if(!$result){
			die('Query Failed.');
		}
		//echo 'Task Added Successfully';
		
		
	}
?>