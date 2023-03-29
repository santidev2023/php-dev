<?php
 
 session_start();

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema de Usuarios</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="vista/recursos/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vista/recursos/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="vista/recursos/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vista/recursos/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="vista/recursos/dist/css/skins/_all-skins.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="vista/recursos/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="vista/recursos/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- jQuery 3 -->
<script src="vista/recursos/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="vista/recursos/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- FastClick -->
<script src="vista/recursos/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="vista/recursos/dist/js/adminlte.min.js"></script>

<!-- DataTables -->
 <script src="vista/recursos/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="vista/recursos/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="vista/recursos/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="vista/recursos/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

<!-- SweetAlert 2 -->
<script src="vista/recursos/plugins/sweetalert2/sweetalert2.all.js"></script>
  <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  


</head>


<body class="hold-transition skin-blue sidebar-mini login-page">

  <?php 

  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){


    echo '<div class="wrapper">';
  
     include "modulos/header.php";
  
     include "modulos/menu.php";

     if(isset($_GET["ruta"])){

      if($_GET["ruta"] == "inicio" ||
         $_GET["ruta"] == "usuario" ||
         $_GET["ruta"] == "roles" ||
         $_GET["ruta"] == "salir"){

          include "modulos/".$_GET["ruta"].".php";
         }else{

          include "modulos/404.php";

         }

     }else{

       include "modulos/inicio.php";

     }

     

     include "modulos/footer.php";

     echo '</div>';

  }else{
     include "modulos/login.php";
  }
  
  ?>

  


 

 




</body>
<script src="vista/js/plantilla.js"></script>
</html>
