<?php
require_once('../Conexion.php');

function  getListasResp()
{
    $c = new conectar();
    $conexion = $c->conexion();
    $query = "SELECT NIT_PROVEEDOR,NOMBRE_PROVEEDOR FROM proveedor ORDER BY  NIT_PROVEEDOR ASC";
    $result = mysqli_query($conexion, $query);
    $listas = '<option value="0">Seleccione un Nit</option>';
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $listas .= "<option value='$row[NIT_PROVEEDOR]'>$row[NOMBRE_PROVEEDOR]</option>";
    }
    return $listas;
}
echo getListasResp();
