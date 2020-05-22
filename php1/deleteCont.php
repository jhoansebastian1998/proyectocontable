<?php
require_once "../Conexion.php";
$c = new conectar();
$conexion = $c->conexion();

$id=$_POST['id'];

            $sql="DELETE FROM CONTRATOS WHERE Id_Contrato= '$id' ";
            echo $result=mysqli_query($conexion,$sql);
 ?>