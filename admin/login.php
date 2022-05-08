<?php
session_start();
require_once('../main.php');
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
require_once('function/setup.php');
if(isset($_POST['email'])) {
    $login = login($set_ip, addslashes($_POST['email']), addslashes($_POST['private_key']), addslashes($_POST['domain']));
    if($login == "true") {
        $_SESSION['email'] = addslashes($_POST['email']);
        $_SESSION['private_key'] = addslashes($_POST['private_key']);
        $_SESSION['domain'] = addslashes($_POST['domain']);
        echo "<script type='text/javascript'>window.location='/admin';</script>";
        exit();
    }else{
        echo "<form id='boyxd' method='POST' action='login'><input type='hidden' name='status_signin' value='fail'></form><script type='text/javascript'>document.getElementById('boyxd').submit();</script>";
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="BAPAK KAU">
    <meta name="author" content="BAPAK KAU">
    <meta name="keywords" content="BAPAK KAU">
    <!-- Title Page-->
    <title><?= $title; ?> - Login</title>
    <link id="favicon" rel="shortcut icon" href="images/icon/logo.png" type="image/png"/>
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="SPM55" style="width: 250px;border-radius: 250px;" onclick="alert('Your using script by SPM55')">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <?php
                                if($_POST['status_signin'] == "fail") {
                                    echo '<div class="alert alert-danger">Your email or private key is wrong!</div>';
                                }
                               ?>
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="example@domain.com" required>
                                </div>
                                <div class="form-group">
                                    <label>Access Key</label>
                                    <input class="au-input au-input--full" type="password" name="private_key" placeholder="Private Key" required>
                                </div>
                                <input type="hidden" name="domain" value="<?= $_SERVER['SERVER_NAME']; ?>">
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>
</html>
<?php } ?>