<?php
require_once "../Conexion.php";
$c = new conectar();
$conexion = $c->conexion();
$id=$_POST['id'];
$Nit=$_POST['Nit'];
$NumeroContrato=$_POST['NumeroContrato'];
$Descripcion=$_POST['Descripcion'];
$Fecha=$_POST['Fecha'];
            $sql="update contratos set Numero_Contrato=$NumeroContrato,Descripcion='$Descripcion',Fecha='$Fecha'
             where id_contrato=$id";
            echo $result=mysqli_query($conexion,$sql);
 ?>