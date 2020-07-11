 <!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-blue topbar mb-4 static-top shadow">

  <!-- Logo -->
  <div>
    <img style="width: 60px; height: 60px;" src="img/logo2.png">
  </div>


  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

      <!-- Nav Item - User Information -->
    <div  id="options">

      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          
          <?php
              if(isset($_SESSION['identifiant'])){
                echo "<span class='mr-2 d-none d-lg-inline text-white small pseudo'>".$_SESSION['identifiant']."</span>";
                echo "<span class='fas fa-user'></span>";
              }
          ?>

        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>
          <?php
            if(isset($_SESSION['identifiant'])){
              if($_SESSION['role'] == 'enseignant'){
                  echo "<a class='dropdown-item' href='ajouter_utilisateur.php'>";
                  echo "<i class='fas fa-user-plus fa-sm fa-fw mr-2 text-gray-400'></i>Ajouter un utilisateur</a>";
                  echo "<div class='dropdown-divider'></div>";
              }
            }
          ?>
      
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Déconnexion
          </a>
        </div>
      </li>
    </div>


     <?php
        if(!isset($_SESSION['identifiant'])){
      ?>

    <li class="nav-item">
        <a class="nav-link help" href="connexion.php" id="btn_connect" role="button" >
            <span class="text-white" style="padding-right: 5px;">Connexion</span>
        </a>
    </li>

    <?php
      }
    ?>

    <?php

      if(isset($_SESSION['identifiant'])){
          if($_SESSION['role'] == 'enseignant'){

    ?>
      <!-- Nav Item - Help -->
      <li class="nav-item">
        <a class="nav-link" href="admin.php" id="messagesDropdown" role="button" >
          <span class="text-white help" style="padding-right: 5px;">Administration</span> <i class="fa fa-cogs" style="color: #fef;" aria-hidden="true"></i>
        </a>
      </li>      

    <?php
      }
    }
    ?>

    <!-- Nav Item - Help -->
    <li class="nav-item">
      <a class="nav-link" href="aide.php" id="messagesDropdown" role="button" >
        <span class="text-white help" style="padding-right: 5px;">Aide</span> <i class="fas fa-question-circle" style="color: #fef;"></i>
      </a>
    </li>

  </ul>

</nav>
<!-- End of Topbar -->

<?php
  include('modal.php');
?>