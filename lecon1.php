<?php
  session_start();
  include('bd.php');

  $cours_id = $_GET['l'];
  echo '<script type="text/javascript"> cours_id = '.$cours_id.';</script>';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- include jQuery -->
 <script src="jquery-3.1.1.min.js"></script>
  <?php
    include('meta.php');
  ?>

  <title>leçon</title>

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
            <div class="row" style="margin-bottom: 15px; height: 25em;">
             
              <div class="col-md-12">
                
                <div class="row" style="height: 100%;">
                  

                  <!-- parties de la leçons -->
                  <div class="col-md-2 details-modules" style="margin-right: 2%; ">
                    <?php 
                      include('sequencement.php');
                     ?>
                  </div>


                  <!-- contenus -->

                  <div class="col-md-8 details-modules tableau" style="padding: 25px; padding-left: 40px; padding-right: 40px; height: 25em;">

                    <!-- competences -->
                    <?php include('competences.php'); ?>
                    <!-- prerequis -->
                    <?php include('prerequis.php'); ?>
                    <!-- SP -->
                    <?php include('situation_pb.php'); ?>
                    <!-- resume -->
                    <?php include('resume.php'); ?>
                    <!-- precedent-suivant -->
                    <?php include('options.php'); ?>

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
      if(cours_id == 1){
        $('#titre').text('UE1: IDENTIFICATION DES PORTS ET DE LEURS ROLES');
      }
      else{
        $('#titre').text('UE1: IDENTIFICATION DES COMPOSANTS INTERNES ET DE LEURS ROLES');
      }
      
      selectionner_un_bouton(1);
      
      $('#precedent').hide();

      /*var myElement = document.getElementById('rquiz-multichoice');
      var topPos = myElement.offsetTop;*/
      document.getElementById('contenu2').scrollTop = 0;


    });


    function current_part(){
      var ind = 1;

      for(var i=1; i<5; i++){
        if($("#contenu" + i.toString(10)).is(":hidden")){
        }
        else{
          ind = i;
          break;
        }
      }

      return ind;
    }

    function suivant(){
      var i = current_part();
      $('#contenu' + i.toString(10)).hide();

      var i2 = i+1;
      selectionner_un_bouton(i2);
      
      if(i2>=5){
        $('#suivant').hide();
      }

      $('#precedent').show();
    }

    function precedent(){
      var i = current_part();
      $('#contenu' + i.toString(10)).hide();

      var i2 = i-1;
      selectionner_un_bouton(i2);
      
      if(i2<5){
        $('#suivant').show();
      }

      if(i2  == 1){
         $('#precedent').show();
      }
     
    }

    function selectionner_un_bouton(id_bout){

      if (id_bout == 5)
        goToActivite();
    
      for(var i=1;i<6;i++){
        if(i == id_bout){
          $('#id' + i.toString(10)).css('color', 'blue');
          $('#id' + i.toString(10)).css('border', '2px solid blue');
          $('#id' + i.toString(10)).css('font-weight:', 'bold');
          $('#contenu' + i.toString(10)).show();
        }
        else{
          $('#id' + i.toString(10)).css('color', 'black');
          $('#id' + i.toString(10)).css('border', 'none');
          $('#id' + i.toString(10)).css('font-weight:', 'none');
          $('#contenu' + i.toString(10)).hide();
        }
      }

      if(id_bout == 1){
         $('#precedent').hide();
      }
      else{
        $('#precedent').show();
      }

      if(id_bout == 5){
         $('#suivant').hide();
      }
      else{
        $('#suivant').show();
      }
     

    }

    function retour_menu(){
      window.location.href = "http://localhost/dipcio/lecons.php";
    }


    function goToActivite(){
      window.location.href = "http://localhost/dipcio/exercices.php";
    }

  </script>

 
  <!-- include jQuery -->
  <!-- include jQuery -->
  <script src="js/js/jquery.main.js"></script>
  <script src="js/js/plugins.js"></script>
  <!-- include jQuery -->
  <script type="text/javascript" src="js/js/init.js"></script>

</body>

</html>
