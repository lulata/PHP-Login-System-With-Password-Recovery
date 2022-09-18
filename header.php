<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="#" class="navbar-brand">
          <img src="logo.png" alt="" width="30" height="30">
        </a>
        <ul class="navbar-nav" >
          <li class="nav-item"><a  class="nav-link" href="index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About me</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
        </ul>
        <div  class="collapse navbar-collapse" >
        <div class="nav navbar-nav navbar-right">
          <?php
             if (isset($_SESSION['userid'])) {
                  echo '<form class="form-inline my-2 my-lg-0" action="logout.inc.php" method="post">
                    <button class="btn btn-outline-dark my-2 my-sm-0 mr-3" type="submit" name="logout-submit">Log Out</button>
                  </form>';
                }else {
                  echo '<form class="form-inline my-2 my-lg-0" action="login.inc.php" method="post">
                    <input class="form-control mr-sm-2" type="text" name="mailuid" placeholder="Email/username">
                    <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password">
                    <button class="btn btn-outline-dark my-2 my-sm-0 mr-3" type="submit" name="login-submit">Log In</button>
                  </form>
                  <button class="btn btn-outline-dark my-2 my-sm-0 mr-3"><a href="signup.php">Signup</a></button>';
                }
                
                 ?>

        </div>
          </div>
      </nav>
    </header>
