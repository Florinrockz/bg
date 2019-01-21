<div class="layer">
    <div class="header">
        <div class="title">
            <h1><?php echo $title.$separator.$description; ?></h1>
        </div>
        <?php
        if (isset($_SESSION['loggedin'])){
            ?>
            <div class="account-actions">
                <?php  echo $_SESSION['loggedin'];?>
                <a href="index.php?page=logout">Logout</a>
                <a href="index.php?page=account">Account</a>
            </div>
            <?php
        }else{
            ?>
            <div class="account-actions">
                <a href="index.php?page=login">Login</a>
                <a href="index.php?page=register">Register</a>
            </div>
            <?php
        }
        ?>
    </div>
</div>