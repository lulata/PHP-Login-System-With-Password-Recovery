<?php
  require 'header.php';
 ?>

 <main>
   <div class="container">


   <div class="card text-center">
  <div class="card-body">
    <h1>Reset your password</h1>
    <p>An e-mail to you with instruction on how to reset your password</p>
    <div class="card-body">
    <form action="reset.inc.php" method="post">
      <div class="form-group">
     <label for="exampleInputEmail1">Email address</label>
     <input class="form-control mb-3"  type="text" name="email" placeholder="E-mail">
     <button type="submit" class="btn btn-outline-dark my-2 my-sm-0 mt-5" name="reset-request-submit">Send recovery email</button>
 </div>

    </form>
    <?php
    if (isset($_GET['reset'])) {
      if ($_GET['reset'] == "success") {
        echo "<p class='alert alert-success'>Check your email!</p>";
      }
    }
    ?>
  </div>
</div>
</div>
   </div>
 </main>

 <?php
    require 'footer.php';
  ?>
