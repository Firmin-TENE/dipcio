
   <?php
     if ($_SESSION['role']=='admin'){
      echo"
      <li class='treeview'>
        <a href='home.php'>
          <i class='fa fa-book'></i>
          <span>Documents en attente</span>
        </a>
      </li>
      <li class='treeview'>
        <a href='document_retire.php'>
          <i class='fa fa-book'></i>
          <span>Documents retirés</span>
        </a>
      </li>

      <li class='treeview'>
        <a href='laundrytype.php'>
          <i class='fa fa-file-text'></i>
          <span>Types de documents</span>
        </a>
      </li>";
     }
    
    ?>

    <li class="treeview">
      <a href="report.php">
        <i class="fa fa-book"></i>
        <span>Documents signés</span>
      </a>
    </li>


	<li><a id="changePass" href="#"><i class="fa fa-pencil-square-o text-yellow"></i> 
		<span>Modifier mon profil</span></a>
	</li>

	<li><a href="logout.php"><i class="fa fa-sign-out text-red"></i> 
		<span>Me déconnecter</span></a>
	</li>