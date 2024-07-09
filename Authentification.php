<?php
// Vérifie si le paramètre 'type' est défini dans l'URL
if (isset($_GET['type'])) {
    if ($_GET['type'] === 'sign-up') {
    // Utilise la valeur du paramètre 'type' s'il est défini
        $type = "sign-up";
    }else{
        $type = "login";
    }
} else {
    // Utilise 'login' comme valeur par défaut si 'type' n'est pas défini
    $type = "login";
    // Redirige vers la même page avec le paramètre 'type' défini sur 'login'
    header("Location: Authentification.php?type=login");
    exit(); // Assurez-vous que le script s'arrête après la redirection
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Authentification.css">
    <link rel="icon" type="image/x-icon" href="images/logo.ico"><link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Authentification</title>
</head>
<body>
    <?php if ($type === 'sign-up') : ?>
        <div class="container-authentification"style="background:linear-gradient(to bottom right, #FFDAB9, #FFFFFF )">
    <?php else : ?>
        <div class="container-authentification flipped"style="background:linear-gradient(to bottom right,#AED9E0,#FFFFFF)">
    <?php endif; ?>
            <div class="container-sign-up">
                <div class="header">
                    <h1>Bienvenue sur QuickFix!</h1>
                    <img src="images/logo.png" alt="Logo de la plateforme" class="logo">
                </div>
                <div style="display:flex">
                    <div style="border-right:1px solid #909090;max-width:70%;padding-right:1rem;">
                        <h2>Inscrivez-vous dès maintenant pour profiter des services de nos experts en informatique, trouver les réponses à vos problème ou même être payé en aidant la communauté.</h2>
                        <div class="auth">
                            <div class="email">
                                <form id="emailForm" style="width:min-content">
                                    <div>
                                        <input type="email" placeholder="Entrez votre adresse e-mail" class="emailInput"id="sign-up-emailInput" required>
                                    </div>
                                    <p id="sign-up-email-error"style="color:red;margin:0;width:max-content;opacity:0;transition:opacity .1s ease;">Email non valide</p>
                                    <div style="position:relative;display:flex;align-items:center;">
                                        <input type="password" placeholder="Entrez votre mot de passe" class="passwordInput"id="sign-up-passwordInput" required>
                                        <img src="images/eyes-password-open.png" alt="eyes-password-open"class="eyes-open"style="opacity:0;">
                                        <img src="images/eyes-password-closed.png" alt="eyes-password-closed"class="eyes-masked">
                                    </div>
                                </form>
                                <div class="container-checkboxe-ask">
                                    <input type="checkbox" id="newsletter" name="newsletter" value="oui">
                                    <p style="margin:0;">Recevoir des nouveautés du site par mail </p>
                                </div>
                                <div class="container-checkboxe-ask">
                                    <input type="checkbox" id="usage-policy" name="usage policy" value="oui">
                                    <label for="usage-policy"id="label-usage-policy" style="margin:0;">J'accepte <a href="usage policy">la politique d'utilisation du site</a></label>
                                </div>
                                <button id="sign-up-button"onclick="testMail('sign-up')">S'inscrire</button>   
                                <p>Déja inscris ? <a href="#" onclick="flipContainer()">Connectez-vous ici</a>.</p>     
                            </div>
                            <div class="google">
                                <p style="font-size:22px">Ou alors:</p>
                                <button id="googleBtn" onclick="signInWithGoogle()">
                                    <img src="images/google-logo.png" alt="Google">
                                    <p>Avec Google</p>
                                </button>
                            </div>
                        </div>
                    </div>
                    <img class="illustration"src="images/login-illustration.jpeg" alt="Login-illustration">
                </div>
            </div>
            <div class="container-login">
                <div class="header">
                    <h1>De retour sur QuickFix!</h1>
                    <img src="images/logo.png" alt="Logo de la plateforme" class="logo">
                </div>
                <div style="display:flex">
                    <div style="border-right:1px solid #909090;max-width:70%;padding-right:1rem;">
                        <h2>Une adresse mail, un mot de passe et c'est repartie !</h2>
                        <div class="auth">
                            <div class="email">
                                <form id="emailForm" style="width:min-content">
                                    <div>
                                        <input type="email" placeholder="Entrez votre adresse e-mail" class="emailInput"id="sign-up-emailInput" required>
                                    </div>
                                    <p id="sign-up-email-error"style="color:red;margin:0;width:max-content;opacity:0;transition:opacity .1s ease;">Email non valide</p>
                                    <div style="position:relative;display:flex;align-items:center;">
                                        <input type="password" placeholder="Entrez votre mot de passe" class="passwordInput"id="sign-up-passwordInput" required>
                                        <img src="images/eyes-password-open.png" alt="eyes-password-open"class="eyes-open"style="opacity:0;">
                                        <img src="images/eyes-password-closed.png" alt="eyes-password-closed"class="eyes-masked">
                                    </div>
                                    <p id="login-password-error"style="color:red;margin:0;opacity:0;width:max-content;transition:opacity .1s ease;">Adresse mail ou mot de passe incorect</p>
                                </form>
                                <button id="login-button"onclick="testMail('login');">Connexion</button>
                                <p>Pas de compte ? <a href="#" onclick="flipContainer()">Inscrivez-vous ici</a>.</p>     
                            </div>
                            <div class="google">
                                <p style="font-size:22px">Ou alors:</p>
                                <button id="googleBtn" onclick="logInWithGoogle()">
                                    <img src="images/google-logo.png" alt="Google">
                                    <p>Avec Google</p>
                                </button>
                            </div>
                        </div>
                    </div>
                    <img class="illustration"src="images/login-illustration.jpeg" alt="Login-illustration">
                </div>
            </div>
        </div>
    <script src="js/Authentification.js"></script>
</body>
</html>