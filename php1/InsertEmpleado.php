<?php
require_once "../Conexion.php";
$c = new conectar();
$conexion = $c->conexion();
SESSION_START();
$empresa=$_SESSION['Empresa'];


$nombre=$_POST['nombre'];
$CC=$_POST['CC'];
$Direccion=$_POST['Direccion'];
$Telefono=$_POST['Telefono'];
$Celular=$_POST['Celular'];
$Email=$_POST['Email'];
            $sql="INSERT INTO empleado (Id_Empleado,Nombre,CC, Direccion,Telefono,Celular,Email,Empresa)
             VALUES ('NULL','$nombre','$CC','$Direccion',$Telefono,'$Celular','$Email',$empresa)";
            echo $result=mysqli_query($conexion,$sql);
 ?>