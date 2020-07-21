<!DOCTYPE html>
<html lang="fr">

<head>

 <?php include('meta.php') ?>

  <title>ACCUEIL</title>

  <?php include('link.php') ?>

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

          <?php include('navbar.php') ?>

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
            <div class="row justify-content-center" style="margin-top: 15%; margin-bottom: 150px;">

              <div class="col-md-4">
                <form class="user" method="post" action="authentification.php">

                 <?php
                    if(isset($_GET['erreur'])){
                      $erreur = $_GET['erreur'];
                      if($erreur == 0){
                        echo "<span style='color: red; font-size: small; text-align: center;'>Veuillez remplir tous les champs!";
                      }
                      else {
                        echo "<span style='color: red; font-size: small; text-align: center;'>Vérifiez vos informations !";
                      }
                    }
                  ?>

                <div class="form-group">
                  <input type="pseudo" class="form-control form-control-user" id="pseudo" aria-describedby="pseudoHelp" required name="pseudo" placeholder="Entrer votre identifiant...">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-user" required id="exampleInputPassword" placeholder="Mot de passe">
                </div>

                <div class="row justify-content-center">
                  <div class="col-md-6 ">
                    <input class="btn btn-primary btn-user btn-block" value="Connexion" type="submit" name="Connexion">
                  </div>
                </div>

              </form>
              </div>

            </div>
            
            <!-- fin du contenu du module -->
           
          </div>
          <!-- /.container -->
          <!-- fin du contenu en dessous du menu -->

        </div>
        <!-- End of Main Content -->


      </div>
      <?php include('footer.php') ?>
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

 


  <script type="text/javascript">
    document.getElementById("options").style.display = "none";
    document.getElementById("btn_connect").style.display = "none";
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
