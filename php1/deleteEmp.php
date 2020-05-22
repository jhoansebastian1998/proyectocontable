<?php
require_once "../Conexion.php";
$c = new conectar();
$conexion = $c->conexion();

$id=$_POST['id'];

            $sql="DELETE FROM EMPLEADO WHERE Id_Empleado= '$id' ";
            echo $result=mysqli_query($conexion,$sql);
 ?>