<?php 
require_once 'db.php';

function getListasRep(){
$conexion = getConn();
  $query = 'SELECT * FROM `pais`';
  $result = $conexion->query($query) ;
  $listas = '<option value="0">Elige un Pais</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[id]'>$row[nom_pais]</option>";
  }
  return $listas;
}

echo getListasRep();