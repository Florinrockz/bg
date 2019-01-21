<?php
session_start();

//DATABASE CONNECTION
$dbserver="localhost";
$dbusername="root";
$dbpassword="";
$db="bg";

//create connection
$conn=new mysqli($dbserver,$dbusername,$dbpassword,$db);

if (isset($_POST['login'])) {
    //form variables
    $username = $_POST['username'];
    $password = $_POST['password'];

    //encrypt password
    $password=md5($password);

    //Query
    $sql="SELECT * FROM users WHERE username='".$username."' AND password='".$password."'";
    $res=$conn->query($sql);
        $_SESSION['loggedin']=$username;
        header("Location: ../../index.php");


}