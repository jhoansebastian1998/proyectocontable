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
    <title>admin empresa</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../fonts/style.css">
   
    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
<a class="navbar-brand" > <h6>Bienvenido<span class="icon-user"></span>:  <?php echo $_SESSION['user']?></h6> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item ">
        <a class="nav-link" href="#">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="../php/salir.php"  ><span class="icon-log-out"></span> Salir</a>
      </li>
    </ul>
  
  
  </div>
</nav>
    

    


    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>