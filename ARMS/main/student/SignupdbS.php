<?php 
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";

    // Connecting to database
    $con = mysqli_connect($dbServer,$dbUser,$dbPass);
    $createDB = "create database if not exists ARMS;";
    mysqli_query($con,$createDB);
    mysqli_select_db($con,"ARMS");

    // Creating Table for Student
    $createTableS = "create table if not exists student(
        regno varchar(20) not null primary key,
        course varchar(10) not null,
        fname varchar(20) not null,
        lname varchar(20),
        gender varchar(20) not null,
        dob date not null,
        email varchar(50) not null,
        password varchar(50) not null
    );";
    mysqli_query($con,$createTableS);

    if(isset($_POST['submit'])){
        $regno = $_POST['regno'];
        $course = $_POST['course'];
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        
        $insertTable = "insert into student values(
            '$regno',
            '$course',
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
            header('Location: ../../login/index.php?User=Student&regSuccess=S');
        }
        else
            echo "<script>alert('Fill all the required fields');</script>";
    }
?>