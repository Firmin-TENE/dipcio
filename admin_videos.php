<?php
  session_start();
  include('bd.php');
?>
<!DOCTYPE html>
<html>
  <head>
   
    <title>DIPCIO-ADMIN</title>
    <?php 
      include('meta2.php');
     ?>

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="admin.php" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini">DIPCIO</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>DIPCIO</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
        </nav>
      </header>

      <!-- =============================================== -->

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
          <?php include_once('module/navigation.php'); ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- =============================================== -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <small>Bienvenue dans l'espace d'administration de DIPCIO</small>
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <!-- Default box -->
          <div class="box">

            <div class="box-header with-border">
              <h3 class="box-title">Opérations</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
              </div>
            </div>

            <div class="box-body">
              <!-- Start creating your amazing application! -->
              <button id="newVideo" type="button" class="btn btn-success btn-sm"> 
                Ajouter une vidéo
                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
              </button>

              <button id="delVideo" type="button" class="btn btn-danger btn-sm">
                Supprimer 
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
              </button>
              
              <div id="table-videos"></div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <!-- Footer -->
            </div><!-- /.box-footer-->
          </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
         
        </div>
        <strong>Copyright &copy; 2020 <a href="#">DIPCIO</a>.</strong> Tous droits réservés.
      </footer>

      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- modal here -->
    <?php include_once('module/modal/msg.php'); ?>
    <?php include_once('module/modal/confirm.php'); ?>
    <?php include_once('module/modal/mod_video.php'); ?>
    <?php include_once('module/script.php'); ?>
  </body>
</html>
