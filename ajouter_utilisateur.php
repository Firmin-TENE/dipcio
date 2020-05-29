<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>

 <?php
    include('meta.php');
 ?>

  <title>Nouvel utilisateur</title>

  <?php
    include('link.php');
  ?>

</head>

<body id="page-top" class="h-100">

  <!-- Page Wrapper -->
  <div id="wrapper" class="mh-100">


    <!-- Content Wrapper -->
    <div class="row d-flex justify-content-center">
      <div id="content-wrapper" class="col-md-9 entete"   style="background-color: #343b7c;">


        <!-- Debut réel du body -->
        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-blue topbar static-top shadow" style="margin-bottom: 0.9em;">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Logo -->
            <div>
              <img style="width: 60px; height: 60px;" src="img/logo2.png">
            </div>
            <div class="title">
              
            </div>


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - Help -->
              <li class="nav-item">
                <a class="nav-link" href="#" id="messagesDropdown" role="button" >
                  <span class="text-white" style="padding-right: 5px;">Aide</span> <i class="fas fa-question-circle" style="color: #fef;"></i>
                </a>
              </li>

            </ul>

          </nav>
          <!-- End of Topbar -->
          <!-- Fin de la barre du logo -->

          <!-- debut du contenu en dessous du menu -->
          <!-- Begin Page Content -->
          <div class="container">

            <!-- L'entête contenant le retour à l'accueil et le titre du module -->
            <div class="row" style="margin-bottom: 10px;">
              <div class="col-md-1"></div>
              <div class="col-md-10"> </div>
              <div class="col-md-1" style="padding: 0px;">
               <?php
                  include('back.php');
               ?>              
              </div>  
            </div>
            <!-- Fin L'entête contenant le retour à l'accueil et le titre du module -->

            <!-- contenu du module -->
            <div class="row justify-content-center" style=" margin-bottom: 40px;">

              <div class="col-md-6 d-none d-lg-block bg-register-image">
               
                <div class="p-2">
                  <div class="text-center">
                    <h1 class="h4 mb-4 text-white"  style="font-family: Constantia;">Ajouter un utilisateur</h1>
                  </div>
                  <form class="user" method="POST" action="add_user.php">
                    <div class="row">
                      <?php
                        if(isset($_GET["success"])){
                          echo "<span style='color: green; font-family: constantia; font-weight: bold; font-size: small; margin-left: 13px; margin-bottom: 15px;'>Utilisateur crée avec succès !</span>";
                        }
                        else{
                            if(isset($_GET['erreur'])){

                              if($_GET['erreur'] == 0){
                                 echo "<span style='color: red; font-family: constantia; font-weight: bold; font-size: small; margin-left: 13px; margin-bottom: 15px;'>Veuillez renseigner un identifiant et votre nom !</span>";
                              }
                              else{
                                echo "<span style='color: red; font-family: constantia; font-weight: bold; font-size: small; margin-left: 13px; margin-bottom: 15px;'>Cet identifiant est déjà utilisé !</span>";
                              }
                              
                            }
                        }
                      ?>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="prenom" class="form-control" id="exampleFirstName" placeholder="Prénoms">
                      </div>
                      <div class="col-sm-6">
                        <input type="text" name="nom" class="form-control" id="exampleLastName" placeholder="Noms">
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" name="identifiant" class="form-control" id="exampleInputEmail" placeholder="pseudo ou identifiant">
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="sexe" id="sexe">
                        <option value="male">Masculin</option>
                        <option value="female">Féminin</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <select class="form-control" name="role" id="role">
                        <option value="Elève">Elève</option>
                        <option value="Enseignant">Enseignant</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-block text-white" name="Enregistrer" value="Enregistrer l'utilisateur" style="font-family: Constantia; font-weight: bold; font-size: large;">
                    </div>
                    <hr>
                    
                  </form>

                </div>

              </div>

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

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
