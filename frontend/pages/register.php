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
            <h2>Register</h2>
            <form action="backend/account/register-handling.php" role="form" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <button type="submit" class="btn btn-default" name="register">Register</button>
            </form>
        </div>
    </div>
    <?php require_once 'frontend/template/footer.php';?>
</div>
</body>
</html>