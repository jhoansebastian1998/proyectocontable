<?php

session_start();
if(!isset($_SESSION['user'])){
    //header("location: https://programacion4fcecep.000webhostapp.com/login.php");
    header("location: ../html/login.html");
}else{
    $usuario = $_SESSION['user'];
}

 if(!isset($usuario)){
    // header("location: https://programacion4fcecep.000webhostapp.com/index.php");
    header("location: ../html/login.html");
 }else{
     //echo"<h1>BIENVENIDO $usuario</h1>";

     
 }
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Usuario</title>
    <link id="icon" rel="icon" type="images" href="../img/icon.jpg">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../fonts/style.css">
  
    
</head>

<body>
  

    <div class="wrapper" id="fondo_wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>ADMINISTRADOR DEL SISTEMA</h3><br>
                
            </div>

            <ul class="list-unstyled components">

                <li class=" " id="menUser">
                    <a href="#MenuUser"  style="text-decoration:none"data-toggle="collapse" aria-expanded="false" class="dropdown-toggle " >USUARIOS</a>
                    <ul class="collapse list-unstyled" id="MenuUser">
                        <li class="active">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Crear Usuarios</a>
                        </li>
                        <li class="active">
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tbUserModal" data-whatever="@mdo">Usuarios</a>
                        </li>

                    </ul>
                </li>

                <li class="">
                    <a href="#MenuEmpresa" style="text-decoration:none"data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">EMPRESAS</a>
                    <ul class="collapse list-unstyled" id="MenuEmpresa">
                        <li class="active">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#EmpresaModal" data-whatever="@mdo">Crear Empresa</a>
                        </li>
                        <li class="active">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tbEmpModal" data-whatever="@mdo">Empresa</a>
                        </li>

                    </ul>
                </li>
                <li class="">
                    <a href="#MenuPais" style="text-decoration:none"data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">PAIS</a>
                    <ul class="collapse list-unstyled" id="MenuPais">
                        <li class="active">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#PaisModal" data-whatever="@mdo">Crear Pais</a>
                        </li>
                        <li class="active">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tbPaisModal" data-whatever="@mdo">Pais</a>
                        </li>

                    </ul>
                </li>
                <li class="">
                    <a href="#MenuCiudad" style="text-decoration:none"data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">CIUDAD</a>
                    <ul class="collapse list-unstyled" id="MenuCiudad">
                        <li class="active">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#CiudadModal" data-whatever="@mdo">Crear Ciudad</a>
                        </li>
                        <li class="active">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#tbCiudadModal" data-whatever="@mdo">Ciudad</a>
                        </li>

                    </ul>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li >
                    <a href="../php/salir.php" class="btn btn-primary"><span class="icon-log-out"></span> Salir</a>
                    
                </li>

            </ul>

        </nav>


        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                   
                <a class="navbar-brand" > <h6>Bienvenido<span class="icon-user"></span>:  <?php echo $_SESSION['user']?></h6> </a> 
                    
                    <button class="btn btn-grey d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <i class="fas fa-align-left"></i>
                          <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNavDropdown">
                   
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link "  id="sidebarCollapse"  href="#"><span class="icon-menu"></span>MENU</a>
                                
                            </li>
                            <li class="nav-item" id="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><span class="icon-log-out"></span>Salir</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div>
            <h2>prueba</h2>
            </div>
            
        </div>





        <!--formulario modal de usuarios-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" id="sombra">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="exampleModalLabel">Crear Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    </div>
                    <div class="modal-body">
                        <form id="FormUser" method="POST" name="FormUser">
                        <div id="alerta"></div>
                            <input type="" id="id_modal" placeholder="numero id" name="">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Usuario</label>
                                <input type="text" class="form-control" id="user" name="user" >
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Clave</label>
                                <input type="password" class="form-control" id="pass" name="pass" >
                            </div>
                            <div>
                            <label for="recipient-name" class="col-form-label"><strong>Rol de Usuario</strong></label>
                               <br>                        
                            <div class="radio" id="radioDesing">                                
                                <br>
                                <input type="radio" name="rol" id="Administrador" value="4" >
                                <label for="Administrador">Administrador</label>
                                <br>
                                <input type="radio" name="rol" id="Usuario" value="1" >
                                <label for="Usuario">Usuario</label>
                            </div>
                            </div> 
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="submit" id="submit_user"><span class="icon-add-user"></span> Usuario</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="icon-circle-with-cross"></span> Close</button>

                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
               
    
         <!--ver tabla usuarios-->
         <div class="modal fade" id="tbUserModal" tabindex="-1" role="dialog" aria-labelledby="tbUserModalModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content" id="sombra">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="exampleModalLabel">Tabla Usuarios</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    </div>
                    <div class="modal-body">
                        
                                <table class="table table-responsive table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>USUARIO</th>
                                            <th>PASSWORD</th>
                                            <th>ROL USUARIO</th>
                                            <th>ALIMINAR </th>
                                            <th>MODIFICAR </th>
                                        </tr>
                                    </thead>
                                    <tbody id="vertab"></tbody>
                                </table>
                         
                            <div class="modal-footer">
                                <!--button type="submit" class="btn btn-primary" id="submit_user">Usuario</button-->
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="icon-circle-with-cross"></span>Close</button>

                            </div>

                        
                    </div>

                </div>
            </div>
        </div>
         <!--formulario modal de actualizar usuarios-->
         <div class="modal fade" id="ActUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content" id="sombra">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title" id="exampleModalLabel">Modificar Usuario Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    </div>
                    <div class="modal-body">
                        <form id="FormUserAct" method="POST" name="FormUserAct" >
                        <div id="alerta"></div>
                            <input type="hidden" id="id2"  name="id"class="id">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Usuario</label>
                                <input type="text" class="form-control user"  name="user" >
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Clave</label>
                                <input type="password" class="form-control pass"  name="pass" >
                            </div>
                            <div>
                            <label for="recipient-name" class="col-form-label"><strong>Rol de Usuario</strong></label>
                               <br>                        
                            <div class="radio" id="radioUpdate">                                
                                                          
                                <input type="radio" name="rol"  id="Admin" value="4" >
                                <label for="Admin">Administrador</label>                             
                                <br>
                                <input type="radio" name="rol"  id="User" value="1" >
                                <label for="User">Usuario</label>
                             

                            </div>
                            </div> 
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success " name="submit" id="act_submit"><span class="icon-loop"></span> Modificar</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="icon-circle-with-cross"></span> Close</button>

                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!--formulario modal de Empresa-->
        <div class="modal fade" id="EmpresaModal" tabindex="-1" role="dialog" aria-labelledby="EmpresaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl " id="sombra">
                <div class="modal-content ">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="EmpresaModalLabel">Crear Empresa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body ">
                        <form id="FormEmpresa" method="POST">
                            <div class="row ">
                                <input type="hidden" id="id" placeholder="numero id" name="">

                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <label for="recipient-name" class="col-form-label">Empresa</label>
                                    <input type="text" class="form-control" id="nom_empresa" name="nom_empresa">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <label for="recipient-name" class="col-form-label">NIT</label>
                                    <input type="text" class="form-control" id="nit" name="nit">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <label for="recipient-name" class="col-form-label">TELEFONO</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <label for="recipient-name" class="col-form-label">DIRECCION</label>
                                    <input type="text" class="form-control" id="direccion" name="direccion">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <label for="recipient-name" class="col-form-label">PAIS</label>
                                    <br>
                                    <select id="lista_reproduccion" class="form-control" name=""></select>

                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <label for="recipient-name" class="col-form-label">CIUDAD</label>
                                    <br>
                                    <select id="listciudad" class="form-control" name=""></select>
                                </div>
                                
                                <div class="col-md-3 col-sm-3 col-xs-3 ">
                                    <label for="recipient-name" class="col-form-label">REP.LEGAL</label>
                                    <input type="text" class="form-control" id="rep_legal" name="rep_legal">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <label for="recipient-name" class="col-form-label">EMAIL</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>

                            </div>
                            <br>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" id="submit_empresa">Crear Empresa</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
             <!--ver tabla Empresa-->
             <div class="modal fade" id="tbEmpModal" tabindex="-1" role="dialog" aria-labelledby="tbEmpModalModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content" id="sombra">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="exampleModalLabel">Tabla Empresa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    </div>
                    <div class="modal-body">
                        
                                <table class="table table-responsive table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>EMPRESA</th>
                                            <th>NIT</th>
                                            <th>TELEFONO</th>
                                            <th>DIRECCION </th>
                                            <th>ID/CIUDAD </th>
                                            <th>ID/PAIS </th>
                                            <th>REP/LEGAL </th>
                                            <th>EMAIL</th>
                                        </tr>
                                    </thead>
                                    <tbody id="vertabEmp"></tbody>
                                </table>
                         
                            <div class="modal-footer">
                                <!--button type="submit" class="btn btn-primary" id="submit_user">Usuario</button-->
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>

                        
                    </div>

                </div>
            </div>
        </div>
         <!--formulario modal actualizar  Empresa-->
         <div class="modal fade" id="ActEmpresa" tabindex="-1" role="dialog" aria-labelledby="ActEmpresaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl " id="sombra">
                <div class="modal-content ">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title" id="EmpresaModalLabel">Modificar Empresa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body ">
                        <form id="FormActEmpresa" method="POST" name="FormActEmpresa">
                            <div class="row ">
                                <input type="hidden"   name="id" class="id">

                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <label for="recipient-name" class="col-form-label">Empresa</label>
                                    <input type="text" class="form-control nom_empresa"  name="nom_empresa">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <label for="recipient-name" class="col-form-label">NIT</label>
                                    <input type="text" class="form-control nit"  name="nit">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <label for="recipient-name" class="col-form-label">TELEFONO</label>
                                    <input type="text" class="form-control telefono"  name="telefono">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <label for="recipient-name" class="col-form-label">DIRECCION</label>
                                    <input type="text" class="form-control direccion"  name="direccion">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <label for="recipient-name" class="col-form-label">PAIS</label>
                                    <br>
                                    <select id="lista_pais_modi_de_empresa" class="form-control id_pais" name="id_pais"></select>

                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <label for="recipient-name" class="col-form-label">CIUDAD</label>
                                    <br>
                                    <select id="lista_ciudad_modi_de_empresa" class="form-control id_ciudad" name="id_ciudad"></select>
                                </div>
                                
                                <div class="col-md-3 col-sm-3 col-xs-3 ">
                                    <label for="recipient-name" class="col-form-label">REP.LEGAL</label>
                                    <input type="text" class="form-control rep_legal"  name="rep_legal">
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-3">
                                    <label for="recipient-name" class="col-form-label">EMAIL</label>
                                    <input type="text" class="form-control email"  name="email">
                                </div>

                            </div>
                            <br>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="submit"  id="act_emp_submit">actualizar</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!--formulario modal de Pais-->
        <div class="modal fade" id="PaisModal" tabindex="-1" role="dialog" aria-labelledby="EmpresaModalLabel" aria-hidden="true">
            <div class="modal-dialog  " id="sombra">
                <div class="modal-content ">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="PaisModalLabel">Crear Pais</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body ">
                        <form id="FormPais" method="POST">
                            <div class="row ">
                                <input type="hidden" id="id_pais" placeholder="numero id" name="">

                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label for="recipient-name" class="col-form-label">COD/POSTAL</label>
                                    <input type="text" class="form-control" id="cod_postal" name="cod_postal">
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <label for="recipient-name" class="col-form-label">PAIS</label>
                                    <input type="text" class="form-control" id="nom_pais" name="nom_pais">
                                </div>


                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" id="submit_pais">Crear Pais</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
                     <!--ver tabla Pais-->
                     <div class="modal fade" id="tbPaisModal" tabindex="-1" role="dialog" aria-labelledby="tbPaisModalModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content" id="sombra">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="exampleModalLabel">Tabla Pais</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    </div>
                    <div class="modal-body">
                        
                                <table class="table table-responsive table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>COD/POSTAL</th>
                                            <th>PAIS</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody id="vertabPais"></tbody>
                                </table>
                         
                            <div class="modal-footer">
                                <!--button type="submit" class="btn btn-primary" id="submit_user">Usuario</button-->
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>

                        
                    </div>

                </div>
            </div>
        </div>
          <!--formulario modifica Pais-->
          <div class="modal fade" id="Modpais" tabindex="-1" role="dialog" aria-labelledby="ModpaisModalLabel" aria-hidden="true">
            <div class="modal-dialog  " id="sombra">
                <div class="modal-content ">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title" id="PaisModalLabel">Modificar Pais</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body ">
                        <form id="FormActPais" method="POST" name="FormActPais">
                            <div class="row ">
                                <input type="hidden"  class="id" name="id">

                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <label for="recipient-name" class="col-form-label">COD/POSTAL</label>
                                    <input type="text" class="form-control cod_postal"  name="cod_postal">
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <label for="recipient-name" class="col-form-label">PAIS</label>
                                    <input type="text" class="form-control nom_pais" name="nom_pais">
                                </div>


                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" id="modsubmit_pais">Modificar Pais</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!--formulario modal de Ciudad-->
        <div class="modal fade" id="CiudadModal" tabindex="-1" role="dialog" aria-labelledby="CiudadModalLabel" aria-hidden="true">
            <div class="modal-dialog  " id="sombra">
                <div class="modal-content ">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="CiudadModalLabel">Crear Ciudad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                    </div>
                    <div class="modal-body ">
                        <form id="FormCiudad" method="POST">
                            <div class="row ">
                                <input type="hidden" id="id_ciudad" placeholder="numero id" name="">

                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <label for="recipient-name" class="col-form-label">COD/CIUDAD</label>
                                    <input type="text" class="form-control" id="cod_ciudad" name="cod_ciudad">
                                </div>

                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <label for="recipient-name" class="col-form-label">Ciudad</label>
                                    <input type="text" class="form-control" id="nom_ciudad" name="nom_ciudad">
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <label for="recipient-name" class="col-form-label">PAIS</label>
                                    <br>
                                    <select id="lista_pais2" class="form-control" name=""></select>

                                </div>


                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" id="submit_ciudad">Crear Ciudad</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
                           <!--ver tabla Ciudad-->
                           <div class="modal fade" id="tbCiudadModal" tabindex="-1" role="dialog" aria-labelledby="tbCiudadModalModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content" id="sombra">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title" id="exampleModalLabel">Tabla Ciudad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                    </div>
                    <div class="modal-body">
                        
                                <table class="table table-responsive table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>COD/CIUDAD</th>
                                            <th>CIUDAD</th>
                                            <th>ID/PAIS</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody id="vertabCiudad"></tbody>
                                </table>
                         
                            <div class="modal-footer">
                                <!--button type="submit" class="btn btn-primary" id="submit_user">Usuario</button-->
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>

                        
                    </div>

                </div>
            </div>
        </div>
                <!--formulario modificar Ciudad-->
                <div class="modal fade" id="CiudadModifica" tabindex="-1" role="dialog" aria-labelledby="CiudadModificaLabel" aria-hidden="true">
            <div class="modal-dialog  " id="sombra">
                <div class="modal-content ">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title" id="CiudadModalLabel">Modificar Ciudad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                    </div>
                    <div class="modal-body ">
                        <form id="FormModCiudad" method="POST" class="FormModCiudad">
                            <div class="row ">
                                <input type="" class="id" name="id">

                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <label for="recipient-name" class="col-form-label">COD/CIUDAD</label>
                                    <input type="text" class="form-control cod_ciudad"  name="cod_ciudad">
                                </div>

                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <label for="recipient-name" class="col-form-label">Ciudad</label>
                                    <input type="text" class="form-control nom_ciudad"  name="nom_ciudad">
                                </div>
                                <div class="col-md-5 col-sm-5 col-xs-5">
                                    <label for="recipient-name" class="col-form-label">PAIS</label>
                                    <br>
                                    <select id="lista_pais_modi_de_ciudad" class="form-control id_pais " name="id_pais"></select>

                                </div>


                            </div>
                            <br>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="modsubmit_ciudad">Modificar Ciudad</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
        
        <script src="../js2/app.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <!--script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script-->
        
        <!--script src="js/jquery-1.11.2.min.js"></script-->



        <script type="text/javascript">
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>



</body>

</html>