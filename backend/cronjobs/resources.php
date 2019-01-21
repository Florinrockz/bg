<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

//DATABASE CONNECTION
$dbserver="localhost";
$dbusername="root";
$dbpassword="";
$db="bg";

//create connection
$conn=new mysqli($dbserver,$dbusername,$dbpassword,$db);

if ($conn->connect_error){
    die("Error (".$conn->connect_errno.") ".$conn->connect_error);
}


$sql = "SELECT * FROM resources";
$result = $conn->query($sql);


    while($row = $result->fetch_assoc()){
        //print_r($row);
        $cityID=$row['city_id'];
        $sql="SELECT planks_production,ore_production,clay_production,food_production FROM production WHERE city_id=".$cityID;
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);

        $planksProduction=$row['planks_production'];
        $oreProduction=$row['ore_production'];
        $clayProduction=$row['clay_production'];
        $foodProduction=$row['food_production'];

        $sql="UPDATE resources SET planks=planks+'$planksProduction' where city_id='$cityID'";

        if ($result=mysqli_query($conn,$sql)){
            echo "planks updated successfully.<br>";
        }

        $sql="UPDATE resources SET ore=ore+'$oreProduction' where city_id='$cityID'";

        if ($result=mysqli_query($conn,$sql)){
            echo "ore updated successfully.<br>";
        }

        $sql="UPDATE resources SET clay=clay+'$clayProduction' where city_id='$cityID'";

        if ($result=mysqli_query($conn,$sql)){
            echo "clay updated successfully.<br>";
        }

        $sql="UPDATE resources SET food=food+'$foodProduction' where city_id='$cityID'";

        if ($result=mysqli_query($conn,$sql)){
            echo "food updated successfully.<br>";
        }
    }
