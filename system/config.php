<?php
/**
 * Created by PhpStorm.
 * User: Florin Scutaru
 * Date: 1/20/2019
 * Time: 8:05 PM
 */
    //GENERAL VARIABLES
    $title="Browser Game";
    $separator=" - ";
    $description="My awesome game";

    //MAINTENANCE
    $maintenance=false;

    //DATABASE CONNECTION
    $dbserver="localhost";
    $dbusername="root";
    $dbpassword="";
    $db="bg";

    //create connection
    $conn=new mysqli($dbserver,$dbusername,$dbpassword,$db);

    //check connection
    if($conn->connect_error){
        die("Connection failed!".$conn->connect_error);
    }
?>