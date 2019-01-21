<?php
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
            <h2>Contact</h2>
            <p>This is contact page</p>
            <a href="index.php?page=index">Home</a>
            <a href="index.php?page=contact">Contact</a>
        </div>
    </div>
    <?php require_once 'frontend/template/footer.php';?>
</div>
</body>
</html>