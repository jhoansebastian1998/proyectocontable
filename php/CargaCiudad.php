<?php 
require_once 'db.php';

function getCiudad(){
  $conexion = getConn();
  $id = $_POST['id'];
 
  $query = "SELECT * FROM `ciudad` WHERE id_pais = $id";
  $result = $conexion->query($query);
  $ciudad = '<option value="0">Elige una Ciudad</option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $ciudad .= "<option value='$row[id]'>$row[nom_ciudad]</option>";
  }
  return $ciudad;
}

echo getCiudad();