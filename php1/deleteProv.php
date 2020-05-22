<?php
require_once "../Conexion.php";
$c = new conectar();
$conexion = $c->conexion();

$id=$_POST['id'];

            $sql="DELETE FROM PROVEEDOR WHERE Id_Proveedor= '$id' ";
            echo $result=mysqli_query($conexion,$sql);
 ?>