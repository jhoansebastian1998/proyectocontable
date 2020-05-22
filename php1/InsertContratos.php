<?php
require_once "../Conexion.php";
$c = new conectar();
$conexion = $c->conexion();

$Nit=$_POST['Nit'];
$NumeroContrato=$_POST['NumeroContrato'];
$Descripcion=$_POST['Descripcion'];
$Fecha=$_POST['Fecha'];
            $sql="INSERT INTO contratos (Id_Contrato,Numero_Contrato,Nit_Proveedor,Descripcion,Fecha,Empresa)
             VALUES ('NULL',$NumeroContrato,$Nit,'$Descripcion','$Fecha',$empresa)";
            echo $result=mysqli_query($conexion,$sql);
 ?>