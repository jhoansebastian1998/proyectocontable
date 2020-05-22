<?php
require_once "../Conexion.php";
$c = new conectar();
$conexion = $c->conexion();
$id=$_POST['id'];
$nombre=$_POST['nombre'];
$CC=$_POST['CC'];
$Direccion=$_POST['Direccion'];
$Telefono=$_POST['Telefono'];
$Celular=$_POST['Celular'];
$Email=$_POST['Email'];
            $sql="update empleado set Nombre='$nombre',CC='$CC', Direccion='$Direccion',Telefono=$Telefono,Celular='$Celular',Email='$Email'
             where Id_Empleado=$id ";           
            echo $result=mysqli_query($conexion,$sql);
 ?>