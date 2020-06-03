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
                    <span>VIDEOS</span>
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
            <div class="row details-modules" style="margin-bottom: 10px;">
              <!-- liste des vidéos -->
              <div class="col-md-3" style="height: 23.5em; overflow-y: auto;">
                
                <?php
                  $liste_videos = liste_videos();
                  $n = count($liste_videos);

                  for($i=0;$i<$n;$i++){
                    $titre =utf8_encode($liste_videos[$i]->_titre);
                    echo "
                      <a href='#' onclick='choix_video(".$liste_videos[$i]->_id_video.");' id='lien".$liste_videos[$i]->_id_video."'>  
                        <div class=''>
                          <img src='img/video_det1.png' class='video-icone' alt='vidéos UE1'>
                          <div class='card-body card-module'>
                            <h3 class='video-title'>".$titre."</h3>
                          </div>
                        </div>                      
                      </a>";         

                  }
                ?>
                  

              </div>
              <!-- fin liste des vidéos -->

              <!-- espace lecteur -->
              <div class="col-md-6" id="vid_vide" style="padding: 0px;">
                
                <video width="100%" height="100%" controls>
                  <source type="video/mp4">
                  Votre navigateur ne supporte pas la lecture des vidéos
                </video>

              </div>

                <?php
                  $liste_videos = liste_videos();
                  $n = count($liste_videos);

                  for($i=0;$i<$n;$i++){
                    echo "
                      <div class='col-md-6' id='vid".$liste_videos[$i]->_id_video."' style='padding: 0px; display: none;'>
                        
                        <video width='100%' height='100%' id='video".$liste_videos[$i]->_id_video."' controls>
                          <source src='videos/".$liste_videos[$i]->_path."' type='video/mp4'>
                          Votre navigateur ne supporte pas la lecture des vidéos
                        </video>

                      </div>";    

                  }
                ?>

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
