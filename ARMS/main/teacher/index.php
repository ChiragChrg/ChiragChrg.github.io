<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Teacher</title>
    <link rel="stylesheet" href="../../css/index.css">
    <link rel="shortcut icon" href="../../css/favicon.svg" type="image/x-icon">

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap"
    />
    <script src="../../js/icon.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <header>
        <div class="header">
            <div class="logo">
                <i class="fad fa-user-graduate fa-3x"></i>
                <p>&nbsp;ARMS</p>
            </div>
            <div class="nav">
                <ul>
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>



    <div class="container">
    <?php
    // session_start();
    echo "<p>Welcome, ".$_SESSION['name']."</p>";
    ?>
    </div>

    <footer>
      <div class="social">
        <a href="https://www.facebook.com/ChiragChrg" id="f" target="_blank">
          <i class="fab fa-facebook fa-2x"></i>
        </a>
        <a href="https://www.instagram.com/chiragchrg/" id="i" target="_blank">
          <i class="fab fa-instagram fa-2x"></i>
        </a>
        <a href="https://twitter.com/ChiragChrg1" id="t" target="_blank">
          <i class="fab fa-twitter fa-2x"></i>
        </a>
      </div>

      <p>&#169; Copyright 2020-2021 ChiragChrg</p>
    </footer>
  </body>
</html>