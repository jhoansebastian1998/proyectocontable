<?php
require_once "../Conexion.php";
$c = new conectar();
$conexion = $c->conexion();
SESSION_START();
$empresa=$_SESSION['Empresa'];

$NombreProv=$_POST['NombreProv'];
$NitProv=$_POST['NitProv'];
$DireccionProvn=$_POST['DireccionProvn'];
$TelefonoProv=$_POST['TelefonoProv'];
$EmailProv=$_POST['EmailProv'];
            $sql="INSERT INTO proveedor (Id_Proveedor,Nit_Proveedor,Nombre_Proveedor,Direccion,Telefono,Email,Empresa)
             VALUES ('NULL',$NitProv,'$NombreProv','$DireccionProvn','$TelefonoProv','$EmailProv',$empresa)";
            echo $result=mysqli_query($conexion,$sql);
 ?>