<?php
  session_start();
  include('bd.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- include jQuery -->
 <script src="jquery-3.1.1.min.js"></script>
  <?php
    include('meta.php');
  ?>

  <title>Exercices</title>

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

          <!-- Begin Page Content -->
          <div class="container">

            <?php include('titre_l.php'); ?>


            <!-- contenu du module -->
            <div class="row details-modules" style="margin-bottom: 15px;  height: 25em;">
             
              <div class="col-md-12">
                
                <div class="row" style="height: 100%;">
                  

                  <!-- parties de la leçons -->
                  <div class="col-md-2" style="margin-right: 2%;">

                    <div class="row" style="width: 100%;">
                       <div >
                        <button class="btn btn-secondary" type="button" id="dropdownMenu1" data-toggle="dropdown" onclick="cliquer(1)" aria-haspopup="true" aria-expanded="false" style="border: 2px solid white;">
                             Exercices UE:1
                        </button>
                      </div>
                    </div>

                    <div class="row" style="width: 100%; margin-top: 20px;">
                      <div >
                        <button class="btn btn-secondary" type="button" id="dropdownMenu2" data-toggle="dropdown" onclick="cliquer(2)" aria-haspopup="true" aria-expanded="false">
                             Exercices UE:2
                        </button>
                      </div>
                    </div>
                    
                  </div>




                  <!-- contenus -->

                  <div class="col-md-8 tableau" style="padding-bottom: 60px; padding-left: 40px; padding-right: 40px; height: 25em; overflow-y: auto;" >

                  
                  <div id="bout1">
                  <?php 
                      $questions = liste_exercices(3); //0 pour les jeux
                      $n = count($questions);

                      for($i=0;$i<$n;$i++){

                   ?>
                    <div class="col-md-12">
                      <div style="margin-top: 20px; color: #fdfffc;">
                        <span style="text-decoration: underline;">Question <?= $i+1;?>:</span> <?= $questions[$i]->_question ?> 
                      </div>

                      <?php if($questions[$i]->_img != ''){ ?>
                       <div class="row  d-flex justify-content-center" style="margin-top: 20px;">
                          <div class="col-md-4">
                             <img src="Images/<?= $questions[$i]->_img ?>"  width="120px" height="100px;">
                          </div>
                       </div>

                       <?php 
                          }
                        ?>

                      <div class="btn-group btn-group-toggle" data-toggle="buttons" style="margin-top: 20px;" >
                        <label class="btn btn-secondary active" style="background-color: #14213d;" >
                          <input type="radio" name="options" id="option1" autocomplete="off" checked> <?= $questions[$i]->_prop1 ?>
                        </label>
                        <label class="btn btn-secondary" style="background-color: #14213d;">
                          <input type="radio" name="options" id="option2" autocomplete="off"> <?= $questions[$i]->_prop2 ?>
                        </label>
                        <label class="btn btn-secondary" style="background-color: #14213d;">
                          <input type="radio" name="options" id="option3" autocomplete="off"> <?= $questions[$i]->_prop3 ?>
                        </label>

                         <label class="btn btn-secondary" style="background-color: #14213d;">
                          <input type="radio" name="options" id="option3" autocomplete="off"> <?= $questions[$i]->_prop4 ?>
                        </label>
                      </div>

                    </div>

                    <?php 
                      }
                     ?>

                   
                  </div>

                  <div id="bout2">
                  <?php 
                      $questions = liste_exercices(4); //0 pour les jeux
                      $n = count($questions);

                      for($i=0;$i<$n;$i++){

                   ?>
                    <div class="col-md-12">
                      <div style="margin-top: 20px; color: #fdfffc;">
                        <span style="text-decoration: underline;">Question <?= $i+1;?>:</span> <?= $questions[$i]->_question ?> 
                      </div>

                      <?php if($questions[$i]->_img != ''){ ?>
                       <div class="row  d-flex justify-content-center" style="margin-top: 20px;">
                          <div class="col-md-4">
                             <img src="Images/<?= $questions[$i]->_img ?>"  width="120px" height="100px;">
                          </div>
                       </div>

                       <?php 
                          }
                        ?>

                      <div class="btn-group btn-group-toggle" data-toggle="buttons" style="margin-top: 20px;" >
                        <label class="btn btn-secondary active" style="background-color: #14213d;" >
                          <input type="radio" name="options" id="option1" autocomplete="off" checked> <?= $questions[$i]->_prop1 ?>
                        </label>
                        <label class="btn btn-secondary" style="background-color: #14213d;">
                          <input type="radio" name="options" id="option2" autocomplete="off"> <?= $questions[$i]->_prop2 ?>
                        </label>
                        <label class="btn btn-secondary" style="background-color: #14213d;">
                          <input type="radio" name="options" id="option3" autocomplete="off"> <?= $questions[$i]->_prop3 ?>
                        </label>

                         <label class="btn btn-secondary" style="background-color: #14213d;">
                          <input type="radio" name="options" id="option3" autocomplete="off"> <?= $questions[$i]->_prop4 ?>
                        </label>
                      </div>

                    </div>

                    <?php 
                      }
                     ?>

                   
                  </div>

                </div>

                </div>



                </div>

              </div>

            </div>
          <!-- fin container -->
          </div>
         <!-- fin du conntent -->   
        </div>
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

 

  <script type="text/javascript">

    $(document).ready(function(){

      //je defini le titre de la leçon
      $('#titre').text('MODULE EXERCICES');
      $('#bout2').hide();
    
    });

    function cliquer(id){
      if(id == 1){

        $('#dropdownMenu2').css('border', 'none');
        $('#bout2').hide();
        $('#bout1').show();
        $('#dropdownMenu1').css('border', '2px solid white');
      }
      else{
        $('#bout1').hide();
        $('#dropdownMenu1').css('border', 'none');
        $('#bout2').show();
        $('#dropdownMenu2').css('border', '2px solid white');
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
