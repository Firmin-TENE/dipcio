<?php
	session_start();
	include('bd.php');
?>
<!DOCTYPE html>
<html lang="en">

	<head>

	  <script src="jquery-3.1.1.min.js"></script>
	  <?php
	    include('meta.php');	
	  ?>
	  <title>LEXIQUE</title>

	  <!-- Custom fonts for this template-->
	  <link rel="stylesheet" href="css/style2.css">
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
	                    <span>LEXIQUE</span>
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
	              <div class="col-md-3" style="margin-top: 0px;">

	                <select id="lex" name="lex" onchange="itemChange(this);" data-placeholder="Select Month" class="chosen-select-no-single select1" style="width: 98%;">
	                    <option value="-1" > Sélectionner un mot </option>
	                    <?php
	                      $mot_cles = mots_cles();
	                      $n = count($mot_cles);

	                      for($i = 0; $i<$n; $i++){
	                        echo "<option value='".$mot_cles[$i]->id()."'>".$mot_cles[$i]->mot_cle()."</option>";
	                      }

	                    ?>
	        
	                </select>

	              </div>

	              <!-- fin liste des vidéos -->

	              <!-- espace lecteur -->
	              <?php

	                $mot_cles = mots_cles();
	                $n = count($mot_cles);

	                for($i = 0; $i<$n; $i++){

	                  echo "
	                      
	                  <div class='col-md-7' id='def".$mot_cles[$i]->id()."' style='display: none; padding: 0px; background-color: #F4F3ED; border-radius: 20px;'>

	                    <!-- pour le titre du mot à définir -->
	                    <div class='row' style='margin-top: 50px; margin-right:1px; text-align: center; font-weight: bold; font-size: x-large;'>
	                        <div class='col-md-12' style='text-decoration: underline; text-decoration-color: #DD3333; color: #DD3333;'>".$mot_cles[$i]->mot_cle()."
	                        </div>
	                    </div>

	                    <!-- pour la définition -->
	                    <div class='row' style='font-weight: bold; color: black; font-family: Constantia; font-size:1em'>
	                       <div class='col-md-11' style='margin-left: 20px; margin-top: 20px; line-height: 1.5; margin-right: 6em;  font-size: x-large; text-align: justify;'> 
	                           ".$mot_cles[$i]->definition()."
	                       </div> 
	                    </div>
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

	  <script type="text/javascript">

	  	$(document).ready(function(){
	  		var myOpts = document.getElementById('lex').options;
	  		if(myOpts.length>2){
	  			$('#lex').val(myOpts[1].value).change();
	  		}
	  		
	    });

	    
	    function itemChange(selectObj){
	      var ind = selectObj.selectedIndex;

	      var id = lex[ind].value;
	      id = parseInt(id);

	      if(id==-1) return;
	    
	      var n = lex.length;

	      for(var i=0; i<n; i++){
	        valeur = parseInt(lex[i].value);
	    
	        if (valeur != -1){
	          if(valeur == id){
	            document.getElementById('def' + valeur).style.display = 'block';
	          }
	          else{
	            if(document.getElementById('def' + valeur).style.display == 'block'){
	              document.getElementById('def' + valeur).style.display = 'none';
	            }
	          }
	        }
	      }
	    }
	  </script>

	  <script src="js/js/jquery.main.js"></script>
	  <!-- include jQuery -->
	  <script src="js/js/plugins.js"></script>
	  <!-- include jQuery -->
	
	  <!-- include jQuery -->
	  <script type="text/javascript" src="js/js/init.js"></script>

	</body>
</html>
