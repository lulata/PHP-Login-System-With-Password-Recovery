<?php
  require 'header.php';
 ?>

 <main>
   <div class="card text-center">
  <div class="card-body">
    <?php
    if (isset($_GET['error'])) {
      if ($_GET['error'] == "emptyfields") {
        echo "<p class='alert alert-danger'>FIll in all Fields!</p>";
      }elseif ($_GET['error'] == "sqlerror") {
        echo "<p class='alert alert-danger'>SQL Error!</p>";
      }elseif ($_GET['error'] == "wrongpwd") {
        echo "<p class='alert alert-danger'>Wrong Password!</p>";
      }
  }
      if (isset($_SESSION['userid'])) {
        echo "<p class='card-text'>You are loged in!</p>";
      }else {
        echo "<p class='card-text'>You are loged out!</p>";
      }
     ?>

  </div>
</div>

 </main>

 <?php
    require 'footer.php';
  ?>
