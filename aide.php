<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php
    include('meta.php');
  ?>

  <title>AIDE</title>

  <?php
    include('link.php');
  ?>

</head>

<body>

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
                    <span>AIDE</span>
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
            <div class="row details-modules d-flex justify-content-center" style="margin-bottom: 10px;">

              <!-- espace lecteur -->
              <div class="col-md-8" id="aide" style="padding: 0px; text-align: justify; color: #6355355">
                 DIPCIO est un didacticiel qui permet d'apprendre à identifier les ports et les
                 composants internes d'un ordinateur ainsi que de leurs rôles. A cet effet, il est organisé en plusieurs modules: 

                 <ul>
                   <li>Le module <b>Leçons: </b> Ce module permet à l'élève d'acquerir des compétences sur les différentes unités d'enseignement qui constitue cette séquence pédagogique.</li>

                   <li>Le module <b>Activités: </b> Ce module permet à l'élève de faire des exercices pour vérifier ses acquis. </li>

                   <li>Le module <b>Vidéos: </b> Ce module permet à l'élève de voir des vidéos qui vont lui permettre de consolider d'avantage ses connaissances sur la séquence d'apprentissage</li>

                   <li>Le module <b>Glossaire: </b> Ce module permet à l'élève de retrouver la définition des mots clefs qui gravitent autour de cette séquence d'apprentissage.</li>

                  <li>Le module <b>Simulation: </b> Ce module permet à l'élève de simuler pour approfondir ses acquis.</li>
                 </ul>

                 En plus de ces modules, l'application offre au enseignant un panneau d'administration leur permettant de modifier certains contenus, mais également d'accomplir d'autres tâches.

              </div>

            </div>

            <!-- fin du contenu du module -->
           
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

    <!-- pieds de page -->
 
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 

  
  <script type="text/javascript">
    
    function choix_video(id_video){
      document.getElementById('vid_vide').style.display = "none";
      document.getElementById('vid' + id_video).style.display = "block";

      id_video1 = parseInt(id_video);

      for(var i=0;i<=15; i++){
         if(id_video1 != i){
          try{
            document.getElementById('vid' + i).style.display = "none";
            document.getElementById('video' + i).pause();
          }catch(e){
            continue;
          }
         }
      }
    }

  </script>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
