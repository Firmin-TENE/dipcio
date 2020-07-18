<?php
  session_start();
  include('bd.php');
  include('son.php');
?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <script src="jquery-3.1.1.min.js"></script>

  <?php
    include('meta.php');
  ?>

  <title>QCM</title>

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
                    <span>QCM - DIPCIO</span>
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
             
              <div class="col-md-1">
                
              </div>
              <!-- fin liste des vidéos -->

              <!-- espace lecteur -->
              <div class="col-md-9" style="padding: 10px; border-color: white; background-color: white;  border: 2px solid #858796; margin-left: 4.2%; height: 24em;">

                <!-- pour une nouvelle partie -->
                <div class="row d-flex" style="height: 10%; border: 1px solid black; margin-left: 0.1%;">
                  <button type="button" onclick="NouvellePartie()" id="newPartie" class="btn btn-info" style="height: 80%; font-family: constantia; padding: 0.03rem 0.60rem; font-weight: bold; margin: 2px;">Nouvelle partie</button>

                  <button type="button" onclick="Resultats()" hidden class="btn btn-info" style="height: 80%; font-family: constantia; padding: 0.03rem 0.75rem; margin: 2px; font-weight: bold;">Mes derniers résultats </button>

                  <span id="score_div" style="color: green; padding-top: 0.3%; font-size: large; font-family: Arial black; margin-left: 40%;">Score: <span id="score">00</span></span>

                </div>


                <div id="questionnaire" class="row" style="height: 80%; border: 1px solid yellow;">


                  <!-- debut des questions -->
                  <?php

                    $questions = liste_exercices(0); //0 pour les jeux
                    $n = count($questions);
                    echo '<script type="text/javascript"> codeExercices = Array(); reponse = Array(); nq = 1; nbre_quest = '.$n.';</script>';

                    for($i=1;$i<=$n;$i++){
                      echo "<script type='text/javascript'> codeExercices[".($i-1)."] = ".$questions[$i-1]->_codeExercice." ; reponse[".($i-1)."] = \"".$questions[$i-1]->_rep."\";</script>";
                  ?>

                  <div class="col-md-12 test" id="q<?=$i?>">

                     <?php  
                      if($i>1) 
                        echo "<script type='text/javascript'>$('#q".$i."').hide();</script>";  
                     ?>
                    
                    <!-- pour le titre de la question -->
                    <div class="row test" style="height: 23%; padding-right: 20px; padding-top: 2%; padding-left: 10px; font-size:large; font-family: constantia; font-weight: bold; color: black;">
                      <?= $questions[$i-1]->_question ?>
                    </div>

                    <!-- pour les propositions -->
                    <div class="row test" style="height: 75%; margin-top: 3px;">


                      <!-- pour les items des propositions -->
                      <div class="col-md-8 test" style="flex: 0 0 75.66667%; max-width: 75%; margin-top: 3px;">
                        
                        <div class="row" style="margin-top: 3%;">
                          <!-- porp1 -->
                          <div class="row test" style="height: 24%; width: 100%; margin-bottom: 0.5%;">
                            <div class="col-md-10 test" style="margin-left: 5px; padding-left: 3%;">
                              <button id="bout1" onclick="VerifierReponse(0)" style="height: 90%; width: 100%; font-size: small; padding-bottom: 4px;">
                                <?= $questions[$i-1]->_prop1 ?>
                              </button>
                            </div>
                            <div class="col-md-1 test">
                              <div id="t<?= $i.'1';?>">
                                <i class="fa fa-check" aria-hidden="true" style="color: green;padding-top: 6px;"></i>
                              </div>
                              <div id="f<?= $i.'1';?>">
                                <i class="fa fa-times" aria-hidden="true" style="color: red; padding-top: 6px;"></i>
                              </div>
                            </div>
                          </div>

                          <!-- porp2 -->
                         <div class="row test" style="height: 24%; width: 100%;">
                            <div class="col-md-10 test" style="margin-left: 5px; padding-left: 3%;">
                              <button id="bout2" onclick="VerifierReponse(1)" style="height: 90%; width: 100%; font-size: small; padding-bottom: 4px;">
                                 <?= $questions[$i-1]->_prop2 ?>
                              </button>
                            </div>
                            <div class="col-md-1 test">
                              <div id="t<?= $i.'2';?>">
                                <i class="fa fa-check" aria-hidden="true" style="color: green;padding-top: 6px;"></i>
                              </div>
                              <div id="f<?= $i.'2';?>">
                                <i class="fa fa-times" aria-hidden="true" style="color: red; padding-top: 6px;"></i>
                              </div>
                            </div>
                          </div>

                          <!-- porp3 -->
                          <div class="row test" style="height: 24%; width: 100%;">
                            <div class="col-md-10 test" style="margin-left: 5px; padding-left: 3%;">
                              <button id="bout3" onclick="VerifierReponse(2)" style="height: 90%; width: 100%; font-size: small; padding-bottom: 4px;">
                                 <?= $questions[$i-1]->_prop3 ?>
                              </button>
                            </div>
                           <div class="col-md-1 test">
                              <div id="t<?= $i.'3';?>">
                                <i class="fa fa-check" aria-hidden="true" style="color: green;padding-top: 6px;"></i>
                              </div>
                              <div id="f<?= $i.'3';?>">
                                <i class="fa fa-times" aria-hidden="true" style="color: red; padding-top: 6px;"></i>
                              </div>
                            </div>
                          </div>

                          <!-- porp4 -->
                          <div class="row test" style="height: 24%; width: 100%;">
                            <div class="col-md-10 test" style="margin-left: 5px; padding-left: 3%;">
                               <button id="bout4" onclick="VerifierReponse(3)" style="height: 90%; width: 100%; font-size: small; padding-bottom: 4px;">
                                  <?= $questions[$i-1]->_prop4 ?>
                               </button>
                            </div>
                           <div class="col-md-1 test">
                              <div id="t<?= $i.'4';?>">
                                <i class="fa fa-check" aria-hidden="true" style="color: green;padding-top: 6px;"></i>
                              </div>
                              <div id="f<?= $i.'4';?>">
                                <i class="fa fa-times" aria-hidden="true" style="color: red; padding-top: 6px;"></i>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>

                      <!-- pour l'image -->

                      <div class="col-md-3 test" style="flex: 0 0 25%; max-width: 25%; margin-top: 1%; margin-bottom: 20px; padding-left: 2px; padding-right: 4px;">

                        <?php

                          if($questions[$i-1]->_img != ''){
                            echo "<img src='Images/".$questions[$i-1]->_img."' width='98%' height='98%'>";
                          }
                          else{
                            echo "<img src='gifs/reflexion.gif' width='98%' height='98%'>";
                          }
                          
                        ?>
                        
                      </div>
                    </div>

                  </div>

                  <?php
                    }
                  ?>
                  <!-- fin des questions -->

                  
                </div>




                <div id="results" class="row justify-content-center" style="height: 80%; border: 1px solid pink;">
                  <div class="col-md-6 test" id="q<?=$i?>" style=" margin-top: 6%; color: black; font-size: x-large; font-family: centaur; ">
                    <div class="row">Nombre total de questions: <span class="sty_score" id="nbre_t"></span></div>
                    <div class="row">Réponses correctes: <span class="sty_score" id="bne_rep"></span></div>
                    <div class="row">Mauvaises réponses: <span class="sty_score" id="ma_rep"></span></div>
                    <div class="row">Score: <span class="sty_score" id="score_fi"></span></div>
                  </div>

                </div>

                <!-- pour le retour -->
                <div class="row" style="height: 10%; border: 1px solid black; padding: 3px;">
                  <div id="t4" class="col-md-12 d-flex justify-content-center">
                  <button onclick="retour_menu()" ><i class="fa fa-arrow-left" style="margin-right: 10px;" aria-hidden="true"></i>Menu</button>
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

  <script type="text/javascript">
  

    $(document).ready(function(){

      bne_rep = 0;
      ma_rep = 0;

       /* $.ajax({
          type:'post',
          dataType: 'json',
          url:'newDetailscode.php',
          data: {
            code: 1
          },
            success: function(data) {
                // console.log(data);
                if (data.valid == 'ok') {
                    newDetailscode = data.code
                }
                else{
                  console.log('err');
                  newDetailscode = data.code
                }
            }
        });*/

    //je masque les autres questions au chargement

    $('#results').hide();

    /*if(nbre_quest>1){
      for(var i=2; i<=nbre_quest; i++){
        $('#q' + i.toString(10)).hide();
      }
    }*/

    //je masque les checks

    for(var i=1; i<=nbre_quest; i++){
      for(var k=1;k<=4;k++){
        $('#t' + i.toString(10) + k.toString(10)).hide();
        $('#f' + i.toString(10) + k.toString(10)).hide();
      }
    }
    });


    function resultatQCM(){
      alert('Fin');
    }


    function retour_menu(){
      window.location.href = "http://localhost/dipcio/accueil.php";
    }

    //fonction pour démarrer une nouvelle partie
    function NouvellePartie(){

      //j'initialise le score
      bne_rep = 0;
      ma_rep = 0;
      $('#score_div').show();
      $('#results').hide();
      $('#questionnaire').show();

      $('#score').text('0');
      $('#q1').show();

      if(nbre_quest>1){
        for(var i=2; i<=nbre_quest; i++){
          $('#q' + i.toString(10)).hide();
        }
      }

     /* $.ajax({
        type:'post',
        dataType: 'json',
        url:'newDetailscode.php',
        data: {
          code: 1
        },
          success: function(data) {
              // console.log(data);
              if (data.valid == 'ok') {
                  newDetailscode = data.code
              }
              else{
                console.log('err');
                newDetailscode = data.code
              }
          }
      });*/

      //je masque les checks

      for(var i=1; i<=nbre_quest; i++){
        for(var k=1;k<=4;k++){
          $('#t' + i.toString(10) + k.toString(10)).hide();
          $('#f' + i.toString(10) + k.toString(10)).hide();
        }
      }

      for(var i=1; i<=4; i++){
        $('#bout' + i.toString(10)).css('color', 'black');
        $('#bout' + i.toString(10)).css('font-weight', 'normal');
      }

      nq = 1;
    }

    //fonction pour afficher les résultats
    function afficher_resultats(){
     $('#score_div').hide();
     $('#results').show();

     $('#nbre_t').text(nbre_quest.toString(10));
     $('#bne_rep').text(bne_rep.toString(10));
     $('#ma_rep').text(ma_rep.toString(10));
     $('#score_fi').text(getScore());

    }

    //fonction pour vérifier la réponse
    function VerifierReponse(indice){
     
      indice = indice +1;
      var score = getScore();
      //var prop = $('#bout' + indice.toString(10)).text();
      if(indice == reponse[nq-1]){
          $('#t' + nq.toString(10) + indice.toString(10)).show();
          score = score + 3;
           bne_rep++;
      }
      else{
          $('#f' + nq.toString(10) + indice.toString(10)).show();
          $('#bout' + reponse[nq-1].toString(10)).css('color', 'green');
          $('#bout' + reponse[nq-1].toString(10)).css('font-weight', 'bold');
          ma_rep++;

          if(score>1){
            score = score -1;
          }
      }
      ChangerScore(score);
     
      //sauvegarder le resultat
      //alert(newDetailscode);
      /*$.ajax({
        type:'post',
        dataType: 'json',
        url:'insert_details.php',
        data: {
          codeExo: codeExercices[nq-1],
          rep: reponse[nq-1],
          rep1: indice,
          codeDetailsResultats: newDetailscode
        },
          success: function(data) {
              // console.log(data);
              if (data.status == 'ok') {
                 console.log('ok');
              }
              else{
                console.log('err');
              }
          }
      });*/
      //passer à la question suivante
      setTimeout(function(){
        $('#q' + nq.toString(10)).hide();

        if(nbre_quest>nq){
          nq++;
          $('#q' + nq.toString(10)).show();
        }
        else{
          $('#questionnaire').hide();
          afficher_resultats();
        }

      },1000);
    }

    //function pour changer le score
    function ChangerScore(score){
      var score = document.getElementById("score").innerHTML = score.toString(10);
    }

    //pour obtenir le score
    function getScore(){
      var score = document.getElementById("score").innerText;
      return parseFloat(score);
    }


  </script>

  <!-- Bootstrap core JavaScript-->
   <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
