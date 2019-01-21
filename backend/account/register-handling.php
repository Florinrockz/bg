<?php
session_start();
//DATABASE CONNECTION
$dbserver="localhost";
$dbusername="root";
$dbpassword="";
$db="bg";

//create connection
$conn=new mysqli($dbserver,$dbusername,$dbpassword,$db);

if (isset($_POST['register'])){
    //form variables
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];

    //check if values are okay

    //check if user is unique
    $sql="SELECT username FROM users where username='".$username."'";
    $res=$conn->query($sql);
    if ($res->num_rows==1){
        echo "User already exist.";
    }else{
        //encrypt  password
        $password=md5($password);

        //insert into the database
        $sql="INSERT INTO users(username,password,email) VALUES ('$username','$password','$email')";

        //executing query
        if($conn->query($sql)){
            echo "<div class='alert alert-success' role='alert'>Registered successfully.</div>";
            $_SESSION['loggedin']=$username;
            header('refresh:2;url=../../index.php');
            //header("Location: ../../index.php");
        }else{
            echo "Failed: ".$conn->error;
        }
    }


}

