<?php
require_once('setup.php');
if(!isset($_SESSION['email'])) {
    header("location: login");
    if (!isset($_SESSION['password'])) {
    	header("location: login");
    }
    if (!isset($_SESSION['domain'])) {
    	header("location: login");
    }
}
?>