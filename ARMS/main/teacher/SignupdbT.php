<?php   
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";

    // Connecting to database
    $con = mysqli_connect($dbServer,$dbUser,$dbPass);
    $createDB = "create database if not exists ARMS;";
    mysqli_query($con,$createDB);
    mysqli_select_db($con,"ARMS");

    // Creating Table for Teacher
    $createTableT = "create table if not exists teacher(
        id int not null auto_increment primary key,
        fname varchar(20) not null,
        lname varchar(20),
        gender varchar(10) not null,
        dob date not null,
        email varchar(50) not null,
        password varchar(50) not null
    );";
    mysqli_query($con,$createTableT);

    if(isset($_POST['submit'])){
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $insertTable = "insert into teacher values(
            id,
            '$fName',
            '$lName',
            '$gender',
            '$dob',
            '$email',
            '$password'
        );";

        $res = mysqli_query($con,$insertTable);
        if($res){
            echo "<script>alert('Registration Successfull');</script>";
            header('Location: ../../login/index.php?User=Teacher&regSuccess=T');
        }
        else
            echo "<script>alert('Fill all the required fields');</script>";
    }
?>