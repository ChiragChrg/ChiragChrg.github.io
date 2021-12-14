<?php
    $con = mysqli_connect("localhost","root","","arms");

    // Teacher Login
    if(isset($_POST['submitS'])){
        $regno = $_POST['regno'];
        $password = md5($_POST['passwordS']);

        $query = "select * from student where regno='$regno';";
        $resT = mysqli_query($con, $query);
        
        while($row=mysqli_fetch_assoc($resT)){
            if($row['password']==$password){
                $name = $row['fname']." ".$row['lname'];
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['regno'] = $regno;
                $_SESSION['password'] = $password;
                $_SESSION['type'] = "student";
                $_SESSION['name'] = $name;
                header("location: ./index.php");
            }
            else{
                echo "<script>alert('Wrong Password');</script>";
            }
        }
    }
?>