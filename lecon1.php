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

  <title>Compétences</title>

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
            <div class="row" style="margin-bottom: 10px;">
              <div class="col-md-1"></div>
              <div class="col-md-10">
                
                <div class="row" style="height: 30px;"></div>
                <div class="row" style="margin-bottom: 20px;">
                   <div class="col-md-12 current_module"> 
                    <span>UE1: IDENTIFICATION DES PORTS ET DE LEURS ROLES</span>
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
            <div class="row details-modules" style="margin-bottom: 15px; margin-top: 20px; height: 26em;">


              <!-- liste des vidéos -->
              <div class="col-md-2" style="padding: 10px;">


                  <a href="#" class="part_lien">
                    <div class="row d-flex justify-content-center part">
                      <img src="img/nombres/11.png" alt="Etape 1" style="width: 70%; height: 65%;">
                      <span>Compétences</span>
                    </div>
                  </a>

                  <a href="#">
                    <div class="row d-flex justify-content-center part">
                      <img src="img/nombres/22.png" alt="Etape 1" style="width: 70%; height: 65%;">
                      <span style="margin-top: -18px;">Prérequis</span>
                    </div>
                  </a>

                  <a href="#">
                    <div class="row d-flex justify-content-center part">
                      <img src="img/nombres/33.png" alt="Etape 1" style="width: 70%; height: 65%;">
                      <span style="margin-top: -18px;">Activité</span>
                    </div>
                  </a>

                  <a href="#">
                    <div class="row d-flex justify-content-center part">
                      <img src="img/nombres/44.png" alt="Etape 1" style="width: 70%; height: 65%;">
                      <span style="margin-top: -18px;">Résumé</span>
                    </div>
                  </a>


              </div>



              <!-- fin liste des vidéos -->

              <!-- espace lecteur -->
              <div class="col-md-7" style="padding: 0px; background-color: #F4F3ED; border-radius: 20px;">

                <!-- contenu module -->
                <div class="row" id="competence" style="height: 88%;overflow-y: auto; display: block;">
                  <div class="col-md-12">
                    <!-- pour le titre du mot à définir -->
                    <div class="row" style="margin: 20px; margin-right: 10px; martext-align: left; font-weight: bold; font-size: x-large; font-family: Constantia;">
                        <div class="col-md-12" style="color: #bf360c;">
                          Au terme de cette unité d'enseignement, je dois être capable de:
                        </div>
                    </div>

                    <!-- pour la définition -->
                    <?php  

                      if(!isset($_GET['l'])) return header('Location: lecons.php');
                      $id_cours = $_GET['l'];
                      $liste_competences = liste_competences($id_cours);
                      $n = count($liste_competences);


                      for($i=0; $i<$n;$i++){
                        echo "
                          <div class='row' style='font-weight: bold; color: black; font-family: Constantia; font-size:1.2em'>
                             <div class='col-md-11' style='margin-left: 50px; margin-top: 10px; line-height: 1.5; margin-right: 7em; text-align: justify;'> 
                                 <i class='fa fa-umbrella' aria-hidden='true' style='margin-right:3px;'></i>".utf8_encode($liste_competences[$i]->competence())."
                             </div> 
                          </div>";

                      }

                    ?>
                  </div>
               </div>

               <!-- Fin de la partie compétence -->


              <!-- Début des prérequis -->
              <div class="row" id="prerequis" style="height: 88%;overflow-y: auto; display: none;">
                <div class="col-md-12">

                  <div class="row titre-question">
                    <div class="col-md-12">
                      Répondez aux questions suivantes en choisissant la bonne réponse.
                    </div>
                  </div>

                <!-- questionnaire -->
                <?php

                $liste_questions = questionnaires($_GET['l']);
                $n = count($liste_questions);

                for($i=0; $i<$n;$i++){

                  $deb = "";

                  if($i == 0){
                    $deb = "<div class='demasquer' id='l".$id_cours."-".$i."-'".$liste_questions[$i]->_id_prerequis."> ";
                  }
                  else{
                    $deb = "<div class='masquer' id='l".$id_cours."-".$i."-'".$liste_questions[$i]->_id_prerequis."> ";
                  }
                  
                  echo $deb."
                  
                     <div class='row titre-question' style='color: gray;'>
                        <div class='col-md-12 d-flex justify-content-center'>
                          <span style='margin-right: 5px; text-decoration: underline;'>Question: </span> ".utf8_decode($liste_questions[$i]->_question)."
                        </div>

                      <!-- Fin Question -->


                      <!-- Image optionnelle -->
                      <div class='row titre-question' style='color: gray; display: none;'>
                        <div class='col-md-12 d-flex justify-content-center'>
                          <img src='img/livre1.jpg' width='150px' height='130px'>
                        </div>
                      </div>
                      <!-- Image optionnelle -->

                      <!-- Propositions -->

                      <div class='row titre-question' style='color: gray; border-radius: 12px; margin-top: 4  0px; margin-bottom: 10px;'>
                        
                        <div class='col-md-12'>
                          <div class='row' style='height: 50%;'>

                            <div class='btn question'>
                                <a href='#' class='btn' onclick='verification(".utf8_encode($liste_questions[$i]->_prop1).",".utf8_encode($liste_questions[$i]->_prop2).",".utf8_encode($liste_questions[$i]->_prop3).",".utf8_encode($liste_questions[$i]->_prop4).",".utf8_encode($liste_questions[$i]->_reponse).")' id='prop1' style='border: 1px solid black;'>".utf8_encode($liste_questions[$i]->_prop1)."</a>
                            </div>

                            <div class='btn question'>
                                <a href='#' class='btn' onclick='verification(".utf8_encode($liste_questions[$i]->_prop1).",".utf8_encode($liste_questions[$i]->_prop2).",".utf8_encode($liste_questions[$i]->_prop3).",".utf8_encode($liste_questions[$i]->_prop4).",".utf8_encode($liste_questions[$i]->_reponse).")' id='prop2' style='border: 1px solid black;'>".utf8_encode($liste_questions[$i]->_prop2)."</a>
                            </div>
                          </div>

                          <div class='row' style='height: 50%;'>
                           <div class='btn question'>
                                <a href='#' class='btn' onclick='verification(".utf8_encode($liste_questions[$i]->_prop1).",".utf8_encode($liste_questions[$i]->_prop2).",".utf8_encode($liste_questions[$i]->_prop3).",".utf8_encode($liste_questions[$i]->_prop4).",".utf8_encode($liste_questions[$i]->_reponse).")' id='prop3' style='border: 1px solid black;'>".utf8_encode($liste_questions[$i]->_prop3)."</a>
                            </div>
                            <div class='btn question'>
                                <a href='#' class='btn' onclick='verification(".utf8_encode($liste_questions[$i]->_prop1).",".utf8_encode($liste_questions[$i]->_prop2).",".utf8_encode($liste_questions[$i]->_prop3).",".utf8_encode($liste_questions[$i]->_prop4).",".utf8_encode($liste_questions[$i]->_reponse).")' id='prop4' style='border: 1px solid black;'>".utf8_encode($liste_questions[$i]->_prop4)."</a>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>

                  </div>";
                  }

                  ?>
                    <!-- Propositions -->



                </div>

              </div>

             

               <!-- Fin contenu -->

               <!-- boutons d'option -->
               <div class="row" style="height: 12%; border-top: 2px solid black; margin-left: 5px; margin-right: 5px;">

                  <div class="col-md-4 centrer marge_option">
                    <a href="#" id="precedent" class="masquer btn" ><i class="fas fa-arrow-left" style="margin-right: 3px;"></i>Précédent</a>
                  </div>

                   <div class="col-md-4 centrer marge_option">
                    <a href="#" class="btn masquer" id="score">(1/5)</a>
                  </div>

                   <div class="col-md-4 centrer marge_option">
                    <a href="#" onclick="suivant();" class="btn" id="suivant" >Suivant <i class="fas fa-arrow-right" style="margin-left: 2px;"></i></a>
                  </div>


               </div>
                
            </div>
              <!-- Fin boutons d'option -->


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
    
    function suivant(){
      //alert("Module prérequis")
      comp = document.getElementById('competence');
      prer = document.getElementById('prerequis');



      //si il s'agit des comùpétence, on va à l'étape suivante:
      if(comp.style.display == "block"){
        comp.style.display = "none";
        prer.style.display = "block";
        document.getElementById('precedent').style.display = "block";
        document.getElementById('score').style.display = "block";
      }
    }


    function verification(prop1, prop2, prop3, prop4, rep){

    }




  </script>

  <!-- include jQuery -->
  <script src="js/js/jquery.js"></script>
  <!-- include jQuery -->
  <script src="js/js/plugins.js"></script>
  <!-- include jQuery -->
  <script src="js/js/jquery.main.js"></script>
  <!-- include jQuery -->
  <script type="text/javascript" src="js/js/init.js"></script>

</body>

</html>
