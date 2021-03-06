<?php
  session_start();
  include('current_url.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php
    include('meta.php');
  ?>

  <title>ACCUEIL</title>

  <?php
    include('link.php');
  ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <!-- Page Wrapper -->
  <div id="wrapper" style="height: 100%; margin: 0px auto; overflow: hidden;">


    <!-- Content Wrapper -->
    <div class="row d-flex justify-content-center" style="height: 100%">
      <div id="content-wrapper" class="col-md-9 entete" style="height: 92%; overflow: hidden; background-color: #343b7c;">


        <!-- Debut réel du body -->
        <!-- Main Content -->
        <div id="content">

          <?php
            include('navbar.php');
          ?>
          <!-- Fin de la barre du logo -->

          <!-- debut du contenu en dessous du menu -->
          <!-- Begin Page Content -->
          <div class="container">

            <!-- bloc des modules -->
            <div class="row d-flex justify-content-center">
              <div class="col-md-1"> </div>
              <div class="col-md-6" id="modules" style="border: 12px solid white; border-radius: 20px;">

                <div class="row">
                  <div class="col-md-4">

                    <a href="lecons.php" style="background-color: red;">
                    
                      <div class="card">
                        <img class="card-img-top" src="img/livre1.jpg" alt="Leçons">
                        <div class="card-body card-module">
                          <h4 class="card-text">LEÇONS</h4>
                        </div>
                      </div>                      

                    </a>
                  </div>

                  <div class="col-md-4">

                    <a href="exercices.php" style="background-color: red;">
                    
                      <div class="card">
                        <img class="card-img-top" src="img/exercice1.png" alt="Leçons">
                        <div class="card-body card-module">
                          <h4 class="card-text">EXERCICES</h4>
                        </div>
                      </div>                      

                    </a>
                  </div>

                  <div class="col-md-4">

                    <a href="jeux.php" style="background-color: red;">
                    
                      <div class="card">
                        <img class="card-img-top" src="img/jeux2.jpg" alt="Leçons">
                        <div class="card-body card-module">
                          <h4 class="card-text">JEUX</h4>
                        </div>
                      </div>                      

                    </a>
                  </div>

                </div>

                <div class="row" style="margin-top: 40px;">
                  <div class="col-md-4">

                    <a href="videos.php" style="background-color: red;">
                    
                      <div class="card">
                        <img class="card-img-top" src="img/video2.png" alt="Leçons">
                        <div class="card-body card-module">
                          <h4 class="card-text">VIDEOS</h4>
                        </div>
                      </div>                      

                    </a>
                  </div>

                  <div class="col-md-4">

                    <a href="simulation.php">
                    
                      <div class="card">
                        <img class="card-img-top" src="img/simulation2.jpg" alt="Leçons">
                        <div class="card-body card-module">
                          <h4 class="card-text" style="font-size: medium;">SIMULATIONS</h4>
                        </div>
                      </div>                      

                    </a>
                  </div>

                  <div class="col-md-4">

                    <a href="lexique.php" style="background-color: red;">
                    
                      <div class="card">
                        <img class="card-img-top" src="img/glossaire4.png" alt="Leçons">
                        <div class="card-body card-module">
                          <h4 class="card-text">GLOSSAIRE</h4>
                        </div>
                      </div>                      

                    </a>
                  </div>

                </div>
                <!-- fin de la seconde ligne des modules -->

              </div>

              <div class="col-md-2" id="modules3">
                
              </div>
            </div>
            <!-- fin du bloc des modules -->

            <br>  

          </div>
          <!-- /.container -->
          <!-- fin du contenu en dessous du menu -->

        </div>
        <!-- End of Main Content -->


      </div>

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

  <!-- pieds de page -->
 

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
