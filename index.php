<?php
session_start();

require_once "system/config.php";
require_once "system/functions.php";

if ($maintenance==true){
    echo "We are under maintenance!";
}elseif ($maintenance==false) {
    getPage();
}
?>
