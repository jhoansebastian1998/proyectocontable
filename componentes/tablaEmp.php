<?php
require_once "../Conexion.php";

$c = new conectar();
$conexion = $c->conexion();
SESSION_START();
$empresa=$_SESSION['empresa'];

?>

<div class="row">

    <div class="col-sm-12">
        <h2>Tabla de Empleados</h2>
        <caption>
            <button id="Nuevo" class="btn btn-success" data-toggle="modal" data-target="#ModalNuevo" >Agregar Nuevo Registro </button>
            <button id="formato" class="btn btn-success" data-toggle="modal" data-target="#Modalformatoempleado" >Informe </button>
        </caption>
        <p></p>
        <table class="table table-striped table-dark">
            <tr>
                <td>Nombre</td>
                <td>Cedula</td>
                <td>Direccion</td>
                <td>Email</td>
                <td>Telefono</td>
                <td>Acciones</td>
            </tr>
            <?php
            $sql = "select * from empleado WHERE Empresa=$empresa";
            $result = mysqli_query($conexion, $sql);

            while($ver=mysqli_fetch_row($result)){
                $datos= $ver[0]."||".
                $ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5]."||".$ver[6]
            ?>
            <tr>
                <td><?php echo $ver[1] ?></td>
                <td><?php echo $ver[2] ?></td>
                <td><?php echo $ver[3] ?></td>
                <td><?php echo $ver[6] ?></td>
                <td><?php echo $ver[4] ?></td>
                <td>
                    <button  id="Editar" class="btn btn-warning" data-toggle="modal" data-target="#ModalEditar" onclick="Editar('<?php echo $datos?>')">  Editar </button>
                    <button class="btn btn-danger"onclick="preguntarSiNoE('<?php echo $ver[0]?>')"  >Eliminar</button>
                </td>
            </tr>
            <?php
                }
            ?>
        </table>
    </div>

</div>