<?php
  session_start();
  include('bd.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php
    include('meta.php');
  ?>

  <title>VIDEOS</title>

  <!-- Custom fonts for this template-->
  <?php
    include('link.php');
  ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">


    <!-- Content Wrapper -->
    <div class="row d-flex justify-content-center">
      <div id="content-wrapper" class="col-md-9 entete"   style="background-color: #343b7c;">


        <!-- Debut réel du body -->
        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <?php
            include('navbar.php');
          ?>
          <!-- End of Topbar -->
          <!-- Fin de la barre du logo -->

          <!-- debut du contenu en dessous du menu -->
          <!-- Begin Page Content -->
          <div class="container">

            <!-- L'entête contenant le retour à l'accueil et le titre du module -->
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-10">
                
                <div class="row" style="height: 30px;"></div>
                <div class="row" style="margin-bottom: 20px;">
                   <div class="col-md-12 current_module"> 
                    <span>MODULE LEÇONS</span>
                  </div>
                </div>
              </div>
              <div class="col-md-1" style="padding: 0px;">
               <?php
                  include('back.php');
               ?>           
              </div>  
            </div>
            <!-- Fin L'entête contenant le retour à l'accueil et le titre du module -->

            <!-- contenu du module -->
            <div class="row details-modules1" style="margin-bottom: 30px; margin-top: 15px;">
              <!-- liste des vidéos -->
              <div class="col-md-2">
                
              </div>
              <!-- fin liste des vidéos -->

              <!-- espace lecteur -->
              <div class="col-md-8" style="padding: 10px; border-radius: 20px; border: 2px solid #858796; height: 24em;">

                <div class="row" style="margin: 5px; font-size: large;">
                  <div class="col-md-12">
                    <span class="location_title">TITRE DU MODULE:  </span> <span class="location">MISE EN ŒUVRE ET OPTIMISATION DE L’ORDINATEUR</span>
                  </div>
                </div>

                <div class="row" style="margin: 5px; font-size: large;">
                  <div class="col-md-12">
                    <span class="location_title">Famille de Situation:</span> <span class="location"> Optimisation de l'ordinateur</span>
                  </div>
                </div>

                <div class="row" style="margin: 5px; font-size: large;">
                  <div class="col-md-12">
                    <span class="location_title">Exemple de Situation:</span> <span class="location"> Montage d'un ordinateur et maintenance de élémentaire</span>
                  </div>
                </div>

                <div class="row" style="margin: 5px; font-size: large;">
                  <div class="col-md-12">
                    <span class="location_title">Catégorie de Situation:</span><span class="location">Proposer des composants pour obtenir un ordinateur avec des performances spécifiques</span>
                  </div>
                </div>

                <div class="row" style="margin: 5px; margin-top: 10px; margin-left: 40px; margin-right: 40px;">
                  <div class="col-md-12">
                   <a class="btn-primary btn" style="font-family: Constantia; color: white; font-weight: bold; background-color: #ff00ff;" href="lecon1.php?l=1">
                     UE1: IDENTIFICATION DES PORTS D'UN ORDINATEUR AINSI QUE LEURS RÔLES
                   </a>
                  </div>
                </div>

                <div class="row" style="margin: 5px; margin-top: 10px; margin-left: 40px; margin-right: 40px;">
                  <div class="col-md-12">
                   <a class="btn-primary btn" style="font-family: Constantia; color:white; font-weight: bold; background-color: #ff00ff;" href="#">
                     UE1:   IDENTIFICATION DES COMPOSANTS INTERNES D'UN ORDINATEUR AINSI QUE LEURS RÔLES
                    </a>
                  </div>
                </div>

              </div>
              <!-- fin espace lecteur -->

            </div>

            <!-- fin du contenu du module -->
           
          </div>
          <!-- /.container -->
          <!-- fin du contenu en dessous du menu -->

        </div>
        <!-- End of Main Content -->


      </div>
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 

  <!-- pieds de page -->
  <?php
    include('footer.php');
  ?>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
