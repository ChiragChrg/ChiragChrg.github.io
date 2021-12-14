<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher SignUp</title>
    <link rel="stylesheet" href="../../css/signup.css">
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
                <li><a href="">Contact</a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container">
        <!-- Teacher SignUp Form -->
        <div class="alert">
            Alert Message
        </div>
        <div class="signupT">
            <h3>Teacher Registration</h3>
            <form action="./SignupdbT.php" method="POST" class="teacher-signup">
                <table border="1" columnspacing="0">
                    <tr>
                        <td><label for="fName">First Name </label></td>
                        <td><input type="text" name="fName" id="fName" placeholder="First Name" required></td>
                    </tr>
                    <tr>
                        <td><label for="lName">Last Name </label></td>
                        <td><input type="text" name="lName" id="lName" placeholder="Last Name"></td>
                    </tr>

                    <tr>
                    <td><label for="gender" class="gender">Gender</label></td>
                    <td class="genflx">
                        <input type="radio" name="gender" id="male" value="Male" required>
                        <label for="male">Male</label>

                        <input type="radio" name="gender" id="female" value="Female">
                        <label for="female">Female</label>
                        
                        <input type="radio" name="gender" id="other" value="Other">
                        <label for="other">Other</label>

                    </td> 
                    </tr>
                    <tr>
                        <td><label for="dob">Date of Birth</label></td>
                        <td><input type="date" name="dob" id="dob" required></td>
                    </tr>
                    <tr>
                        <td><label for="email">Email</label></td>
                        <td><input type="email" name="email" id="email" placeholder="Email" required></td>
                    </tr>
                    <tr>
                        <td><label for="password">Password</label></td>
                        <td><input type="password" name="password" id="password" placeholder="Password" autocomplete="on" required></td>
                    </tr>
                    <tr>
                        <td><label for="confirm">Confirm Password</label></td>
                        <td><input type="password" name="confirm" id="confirm" placeholder="Confirm Password" autocomplete="on" onchange="matchPassword()" required></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <div class="TCflx">
                                <input type="checkbox" name="TCAgree" class="TCAgree" onclick="checkTC()" required>
                                <label for="TCAgree"> By Clicking the checkbox, you agree to<br> the <a href="#">Terms & Conditions</a> of this website.</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="submit" class="RegSubmit" value="Create Account" disabled="true"></td>
                    </tr>
                </table>  
            </form>

            <a href="../../login/index.php?User=Teacher">Already have an account?</a>
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

    <script src="../../js/index.js"></script>
</body>
</html>