<?php
    $con = mysqli_connect("localhost","root","","arms");

    // Teacher Login
    if(isset($_POST['submitT'])){
        $email = $_POST['email'];
        $password = md5($_POST['passwordT']);

        $query = "select * from teacher where email='$email';";
        $resT = mysqli_query($con, $query);
        
        while($row=mysqli_fetch_assoc($resT)){
            if($row['password']==$password){
                $name = $row['fname']." ".$row['lname'];
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['type'] = "teacher";
                $_SESSION['name'] = $name;
                header("location: ../main/teacher/index.php");
            }
            else{
                echo "<script>alert('Wrong Password');</script>";
            }
        }
    }
?>