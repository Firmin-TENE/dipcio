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

  <title>MODULE JEUX</title>

  <!-- Custom fonts for this template-->
  <?php
    include('link.php');
  ?>

</head>

<body id="page-top" style="color: black;">

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
                    <span>MODULE SIMULATION</span>
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
              <div class="col-md-2">
                
              </div>
              <!-- fin liste des vidéos -->

              <!-- espace lecteur -->
              <div class="col-md-8" style="padding: 15px; padding-top: 20px;  border-color: green; border: 2px solid #858796; height: 24em; border-radius: 20px; overflow-y: scroll;">


                <div class="rquiz-matching" lang="fr">
                  <p style="color: white; font-weight: bold;"> Associer à chaque nom de port l'image de ce port et un périphérique que l'on peut y connecter !</p>
                  <table>
                    <tr>
                      <td>Port usb</td>
                      <td><img class="image-quiz" src="Images/simulation/port-usb.jpg" alt="usb1" /></td>
                      <td><img class="image-quiz" src="Images/simulation/cle-usb.jpg" alt="usb" /></td>
                    </tr>
                    <tr>
                      <td>Port vga</td>
                      <td><img class="image-quiz" src="Images/simulation/port-vga.jpg" alt="vga1" /></td>
                      <td><img class="image-quiz" src="Images/simulation/ecran.jpg" alt="vga" /></td>
                    </tr>
                    <tr>
                      <td>Port hdmi</td>
                      <td><img class="image-quiz" src="Images/simulation/port-hdmi.jpg" alt="hdmi1" /></td>
                      <td><img class="image-quiz" src="Images/simulation/video-projecteur.jpg" alt="hdmi" /></td>
                    </tr>
                    <tr>
                      <td>Port PS2</td>
                      <td><img class="image-quiz" src="Images/simulation/port-ps2.jpg" alt="ps2" /></td>
                      <td><img class="image-quiz" src="Images/simulation/souris-ps2.jpg" alt="ps2" /></td>
                    </tr>
                  </table>
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
