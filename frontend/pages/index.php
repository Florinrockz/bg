<?php
global $conn;
global $title;
global $separator;
global $description;
?>
<html>
<head>
    <title><?php echo $title . $separator . $description; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
          crossorigin="anonymous">
    <link rel="stylesheet" href="frontend/design/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/design/css/stylesheet.css">
</head>
<body>
<div id="wrapper">
    <?php require_once 'frontend/template/header.php';?>
    <div class="layer">
        <div class="content">
            <h2>Index</h2>
            <p>This is index page</p>
            <?php
            if (isset($_SESSION['loggedin'])){
                //get user id
                $query="SELECT id FROM users WHERE username='".$_SESSION['loggedin']."'";
                $result=$conn->query($query);
                $row=$result->fetch_assoc();
                $userID=$row['id'];

                //get the city
                $query="SELECT id,name,resource_id FROM cities WHERE user_id=".$userID;
                $result=$conn->query($query);
                $row=$result->fetch_assoc();
                $cityID=$row['id'];
                $cityName=$row['name'];
                $cityResourceID=$row['resource_id'];

                //get city resources
                $query="SELECT planks,ore,clay,food FROM resources WHERE id=".$cityResourceID;
                $result=$conn->query($query);
                $row=$result->fetch_assoc();
                $planks=$row['planks'];
                $ore=$row['ore'];
                $clay=$row['clay'];
                $food=$row['food'];

                //get city resources production
                $query="SELECT planks_production,ore_production,clay_production,food_production FROM production WHERE city_id=".$cityID;
                $result=$conn->query($query);
                $row=$result->fetch_assoc();
                $planksProduction=$row['planks_production'];
                $oreProduction=$row['ore_production'];
                $clayProduction=$row['clay_production'];
                $foodProduction=$row['food_production'];
                ?>
                <center><h3><?php echo $cityName; ?></h3></center>
                <div class="village-wrapper">
                    <div class="resources" >
                        <h4>Resources</h4>
                        <?php
                        echo "Planks: ".$planks."<br>";
                        echo "Ore: ".$ore."<br>";
                        echo "Clay: ".$clay."<br>";
                        echo "Food: ".$food."<br>";
                        ?>
                        <h5><strong>Production</strong></h5>
                        <?php
                        echo "Planks Production: ".$planksProduction."<br>";
                        echo "Ore Production: ".$oreProduction."<br>";
                        echo "Clay Production: ".$clayProduction."<br>";
                        echo "Food Production: ".$foodProduction."<br>";
                        ?>
                    </div>
                    <div class="village" >
                        <div class="keep">
                            <a href="https://www.google.com"><img src="frontend/images/keep.png" alt=""></a>
                        </div>
                    </div>
                    <div class="armies" >
                        <h4>Armies</h4>
                    </div>
                </div>
                <?php
            }
            ?>
            <a href="index.php?page=index">Home</a>
            <a href="index.php?page=contact">Contact</a>
        </div>
    </div>
    <?php require_once 'frontend/template/footer.php';?>
</div>
</body>
</html>