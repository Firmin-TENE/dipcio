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

  <title>MODULE LECONS</title>

  <!-- Custom fonts for this template-->
  <?php
    include('link.php');
  ?>

</head>

<body id="page-top">

 <!-- Page Wrapper -->
     <div id="wrapper" style="height: 100%; margin: 0px auto; overflow: hidden;">

        <!-- Content Wrapper -->
     <div class="row d-flex justify-content-center" style="height: 100%">
        <div id="content-wrapper" class="col-md-9 entete" style="height: 92%; overflow: hidden; background-color: #343b7c;">

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
            <div class="row details-modules1">
              <!-- liste des vidéos -->
              <div class="col-md-1">
                
              </div>
              <!-- fin liste des vidéos -->

              <!-- espace lecteur -->
              <div class="col-md-9 tableau" style="padding: 32px; border-color: green;  margin-left: 4.2%; height: 24em;">

                <div class="row mod">
                  <div class="col-md-12">
                    <span class="location_title">TITRE DU MODULE:  </span> <span class="location">MISE EN ŒUVRE ET OPTIMISATION DE L’ORDINATEUR</span>
                  </div>
                </div>

                <div class="row mod">
                  <div class="col-md-12">
                    <span class="location_title">Famille de Situation:</span> <span class="location"> Optimisation de l'ordinateur</span>
                  </div>
                </div>

                <div class="row mod">
                  <div class="col-md-12">
                    <span class="location_title">Exemple de Situation:</span> <span class="location"> Montage d'un ordinateur et maintenance de élémentaire</span>
                  </div>
                </div>

                <div class="row mod">
                  <div class="col-md-12">
                    <span class="location_title">Catégorie de Situation:</span><span class="location">Proposer des composants pour obtenir un ordinateur avec des performances spécifiques</span>
                  </div>
                </div>

                <div class="row card_ue">
                  <div class="col-md-12">
                   <a class="lien_ue" href="lecon1.php?l=1">
                    <i class="fas fa-book-reader fa-2x" style="color: #fef; margin-right: 5px;"> <span style="font-size: large;">UE1:</span></i>
                     <span style="color: #fef; font-family: Constantia;"">IDENTIFICATION DES PORTS D'UN ORDINATEUR AINSI QUE LEURS RÔLES</span>
                   </a>
                  </div>
                </div>

                <div class="row card_ue" style="margin-top: 2%;">
                  <div class="col-md-12">
                   <a class="lien_ue" href="lecon1.php?l=1">
                    <i class="fas fa-book-reader fa-2x" style="color: #fef; margin-right: 5px;"> <span style="font-size: large;">UE2:</span></i>
                        <span style="color: #fef; font-family: Constantia;">IDENTIFICATION DES COMPOSANTS INTERNES D'UN ORDINATEUR AINSI QUE LEURS RÔLES</span>
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

      <!-- pieds de page -->
      <?php
        include('footer.php');
      ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
