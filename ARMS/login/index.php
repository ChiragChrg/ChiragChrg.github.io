<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher SignUp</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="shortcut icon" href="../../css/favicon.svg" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Quicksand&amp;display=swap"
    />
    <script src="../js/icon.js" crossorigin="anonymous"></script>
    <script src="../js/index.js"></script>
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
                <li><a href="">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="signupAlert">
      <div class="alert">
        Alert Message
      </div>
    </div> 

    <div class="container">
      <!-- Teacher Login Form -->
      <div class="teacherLogin">
            <div class="card">
                <div class="form">
                    <center><h3>Teacher Login</h3></center>
                    <form action="../login/logindbT.php" method="POST">
                        <div class="logUser">
                            <label>Email</label><br>
                            <input type="text" name="email" placeholder="name@example.com" required>
                        </div>
                        <div class="logPass">
                            <label>Password</label><br>
                            <input type="password" name="passwordT" placeholder="Enter atleast 6 characters" autocomplete="on" required>
                        </div>
                        <input type="submit" name="submit" value="Login">
                    </form>

                    <div class="signUp">
                        <p>Don't have an account?</p>
                        <a href="../main/teacher/SignupTeacher.php">Sign Up</a>
                    </div>
                </div>

                <div class="vector">
                    <img src="../assets/teacherLogin.png" alt="Teacher Vector" width="400">
                </div>
            </div>
      </div>

      <!-- Student Login Form -->
      <div class="studentLogin">
            <div class="card">
                <div class="form">
                    <center><h3>Student Login</h3></center>
                    <form action="../../php/teacherLogin.php" method="POST">
                        <div class="logUser">
                            <label>Registration No</label><br>
                            <input type="text" name="regno" placeholder="3SU19SA00" required>
                        </div>
                        <div class="logPass">
                            <label>Password</label><br>
                            <input type="password" name="passwordS" placeholder="Enter atleast 6 characters" autocomplete="on" required>
                        </div>
                        <input type="submit" name="submit" value="Login">
                    </form>

                    <div class="signUp">
                        <p>Don't have an account?</p>
                        <a href="../main/student/SignupStudent.php">Sign Up</a>
                    </div>
                </div>

                <div class="vector">
                    <img src="../assets/studentLogin.png" alt="Student Vector" width="400">
                </div>
            </div>
      </div>
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

    <?php
        if(isset($_GET['User'])){
            if($_GET['User'] == 'Teacher'){
                echo '<script>
                    document.querySelector(".teacherLogin").style.display = "block";
                    document.querySelector(".studentLogin").style.display = "none";
                </script>';
            }
            else{
                echo '<script>
                    document.querySelector(".studentLogin").style.display = "block";
                    document.querySelector(".teacherLogin").style.display = "none";
                </script>';
            }
        }

        //Login after Account Registration
        if(isset($_GET['regSuccess'])){
            if($_GET['regSuccess'] == "T"){
              echo "<script>
              var Alert = document.querySelector('.signupAlert');
              var AlertText = document.querySelector('.alert');
              Alert.style.display = 'block';
              AlertText.innerHTML = 'Teacher Registration Successful';
              </script>";
            }
            else if($_GET['regSuccess'] == "S"){
              echo "<script>
              var Alert = document.querySelector('.signupAlert');
              var AlertText = document.querySelector('.alert');
              Alert.style.display = 'block';
              AlertText.innerHTML = 'Student Registration Successful';
              </script>";
            }
          }
    ?>

    <!-- <script src="../../js/index.js"></script> -->
</body>
</html>