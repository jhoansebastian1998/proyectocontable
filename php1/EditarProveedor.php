<?php
require_once "../Conexion.php";
$c = new conectar();
$conexion = $c->conexion();
$id=$_POST['Id_Proveedor'];
$NombreProv=$_POST['NombreProv'];
$NitProv=$_POST['NitProv'];
$DireccionProvn=$_POST['DireccionProvn'];
$TelefonoProv=$_POST['TelefonoProv'];
$EmailProv=$_POST['EmailProv'];
            $sql="update proveedor set Nit_Proveedor=$NitProv,Nombre_Proveedor='$NombreProv',Direccion='$DireccionProvn',Telefono='$TelefonoProv',
            Email='$EmailProv' where id_proveedor=$id";
            echo $result=mysqli_query($conexion,$sql);
 ?>