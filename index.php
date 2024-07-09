<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="images/logo.ico">
    <link rel="icon" type="image/x-icon" href="images/logo.ico"><link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>QuickFix</title>
</head>
<body>
    <div class="left-navbar" id="left-navbar">   
        <div class="left-navbar-fixed">
            <img class="left-navbar-close" id="close-btn" src="images/close.png" alt="close"></img>
            <ul>
            <li><a href="">Accueil</a></li>
            <li><a href="">À propos</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Contact</a></li>
            </ul>
        </div>
    </div> 
    <div class="container-hight-navbar" id="container-hight-navbar">
        <button id="front-logo"><img src="images/logo.png" alt="logo" style="height:100%;"> </button>
        <img src="images/hamburger-button-white.png" alt="hamburger-button"id="hight-hamburger-button">
      <div class="menu-overlay" id="menu-overlay"></div>
        <div id="container-ask">
            <div class="container-ask-service" >
                <button class="normal-front-text" ><strong>Demander un service</strong></button>
                <div class="ask-service-dropdown-content">
                    <a href=""><strong>Animation 3D</strong></a>
                    <a href=""><strong>Stratégie marketing</strong></a>
                    <a href=""><strong>Site e-commerce</strong></a>
                </div>
            </div>
            <div class="container-ask-service">
                <button class="normal-front-text" "><strong>Posez vos questions</strong></button>
                <div class="ask-service-dropdown-content">
                    <a href=""><strong>Bug d'envoie de requête JS</strong></a>
                    <a href=""><strong>Comment animer un personnage sur blender</strong></a>
                    <a href=""><strong>Comment mettre en page presentation</strong></a>
                </div>
            </div>
        </div>
        <div id="container-freelance">
            <button class="normal-front-text" ><strong>Devenez freelance</strong></button>
            <button class="normal-front-text" style="margin-left:1.25rem;" ><strong>Gagnez de l'argent maintenant</strong></button>
        </div>
        <div class="container-login-sign-up"style="margin-right:2rem;">
            <a href="Authentification.php?type=login"><button class="head-button-login" >Login</button></a>
            <a href="Authentification.php?type=sign-up"><button class="head-button-sign-up">Sign up</button></a>
        </div>
    </div>
    <div id="container-white-navbar"style="right:100%">
        <div class="container-white-navbar-hight" id="container-white-navbar-hight">
            <button id="front-logo"><img src="images/logo.png" alt="logo" height="100%"> </button>
            <div class="white-navabar-container-whiteForm"id='container-white-hamburger-button' style="margin-left:auto;">
              <form autocomplete="off">
              <div class="white-navabar-finder">
                <div class="white-navabar-finder-outer">
                    <div class="white-navabar-finder-inner">
                        <img src="images/hamburger-button.jpg" alt="hamburger-button"id="white-hamburger-button"/>
                    </div>
                </div>
              </div>
              </form>
            </div>
            <div class="white-navabar-container-whiteForm"style="margin-left:auto;">
                <form autocomplete="off">
                <div class="white-navabar-finder">
                    <div class="white-navabar-finder-outer">
                        <div class="white-navabar-finder-inner">
                        <h1 class="white-navbar-title">En savoir plus</h1>
                    </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="white-navabar-container-whiteForm"style="margin-left:auto;">
            <form autocomplete="off">
                <div class="white-navabar-finder">
                <div class="white-navabar-finder-outer"style="width:50rem;height:3rem">
                    <div class="white-navabar-finder-inner"style="top: 1.3rem;">
                    <input class="white-navbar-finder-input" type="text" name="q" placeholder="Search"/>
                    <img class="white-navbar-finder-icon" src="images/search-icon.jpg">
                    </div>
                </div>
            </div>
            </form>
            </div>
            <div class="white-navabar-container-whiteForm"style="margin:0 auto;">
                <form autocomplete="off">
                <div class="white-navabar-finder">
                    <div class="white-navabar-finder-outer">
                    <div class="white-navabar-finder-inner"style="top: .2rem;">
                        <img src="images/language.jpg" alt="language"style="width:3.5rem;margin:0 auto;">
                    </div>
                    </div>
                </div>
                </form>
            </div> 
            <div class="white-navabar-container-whiteForm"style="margin:0;">
                <form autocomplete="off">
                <div class="white-navabar-finder"style="right:2rem">
                    <div class="white-navabar-finder-outer">
                    <div class="white-navabar-finder-inner">
                        <div class="container-login-sign-up">
                            <a href="Authentification.php?type=login"><button class="head-button-login" >Login</button></a>
                            <a href="Authentification.php?type=sign-up"><button class="head-button-sign-up">Sign up</button></a>
                        </div>
                    </div>
                    </div>
                </div>
              </form>
            </div>
        </div>
        <div id="container-white-navbar-down">
            <div class="white-navbar-down-container-presentation">
                <button class="white-navabar-down-presentation">Front-end sur mesure</button>
            </div>
            <div class="white-navbar-down-container-presentation">
                <button class="white-navabar-down-presentation">Back-end personnalisé</button>
            </div>
            <div class="white-navbar-down-container-presentation">
                <button class="white-navabar-down-presentation">Sécurisation des réseaux et des systèmes</button>
            </div>
            <div class="white-navbar-down-container-presentation">
                <button class="white-navabar-down-presentation">Développement d'applications</button>
            </div>
            <div class="white-navbar-down-container-presentation">
                <button class="white-navabar-down-presentation">Visualisation de données</button>
            </div>
            <div class="white-navbar-down-container-presentation">
                <button class="white-navabar-down-presentation">Déploiement de cloud computing</button>
            </div>
        </div>
    </div>
    <img id="background-image" src="https://img.freepik.com/photos-gratuite/abstrait-numerique-grille-fond-noir_53876-97647.jpg?size=626&ext=jpg&ga=GA1.1.386372595.1697587200&semt=ais">
        <div class="container-search-service">
            <form class="blue-container-search" role="search">
                <input class="input-search"type="search" placeholder="Rechercher un service, une idée..." autofocus required />
                <button class="button-submit" type="submit"><img src="images/search-icon.jpg" width="20" alt="Search"></button>
            </form>
            <div class="container-popular-service-searched">
                <p><strong><u><i>Par exemple:</i></u></strong></p>
                <button>Video editing</button>
                <button>Video editing</button>
                <button>Video editing</button>
            </div>
        </div>
        <div class="background-container-buttons">
            <h2 class="background-button-ask-demand">Demandez de l'aide</h2>
            <h2 class="background-button-ask-service">Demandez à un proffesionnel</h2>
        </div>
    </img>
    <h1 class="main-title-invisible"style="position: relative; top: -0.3rem;">Trouvez les services dont vous avez besoin</h1>
    <div>
        <h2 class="sub-title"style="margin-left: 5rem;">Faites avancer votre projet grâce au professionnels de la platforme!</h2>
        <div class="container-populars-proAsks">
            <div class="container-populars-proAsks-mooving">
                <div class="container-one-popular-proAsk">
                    <img src="images/popular-service.jpg" alt="popular-service">
                    <p style="background: linear-gradient(to right, rgb(255, 71, 50), rgb(255, 155, 56));-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-clip: text;"><strong>App developement</strong></p>
                </div>
                <div class="container-one-popular-proAsk">
                    <img src="images/popular-service.jpg" alt="popular-service">
                    <p style="background: linear-gradient(to right, rgb(255, 170, 0), rgb(255, 255, 63));-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-clip: text;"><strong>App developement</strong></p>
                </div>
                <div class="container-one-popular-proAsk">
                    <img src="images/popular-service.jpg" alt="popular-service">
                    <p style="background: linear-gradient(to right, rgb(135, 254, 175), rgb(137, 248, 64));-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-clip: text;"><strong>App developement</strong></p>
                </div>
                <div class="container-one-popular-proAsk">
                    <img src="images/popular-service.jpg" alt="popular-service">
                    <p style="background: linear-gradient(to right, rgb(49, 255, 252), rgb(155, 83, 255));-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-clip: text;"><strong>App developement</strong></p>
                </div>
                <div class="container-one-popular-proAsk">
                    <img src="images/popular-service.jpg" alt="popular-service">
                    <p style="background: linear-gradient(to right, rgb(255, 71, 50), rgb(255, 155, 56));-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-clip: text;"><strong>App developement</strong></p>
                </div>
                <div class="container-one-popular-proAsk">
                    <img src="images/popular-service.jpg" alt="popular-service">
                    <p style="background: linear-gradient(to right, rgb(255, 170, 0), rgb(255, 255, 63));-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-clip: text;"><strong>App developement</strong></p>
                </div>
                <div class="container-one-popular-proAsk">
                    <img src="images/popular-service.jpg" alt="popular-service">
                    <p style="background: linear-gradient(to right, rgb(135, 254, 175), rgb(137, 248, 64));-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-clip: text;"><strong>App developement</strong></p>
                </div>
                <div class="container-one-popular-proAsk">
                    <img src="images/popular-service.jpg" alt="popular-service">
                    <p style="background: linear-gradient(to right, rgb(49, 255, 252), rgb(155, 83, 255));-webkit-background-clip: text;-webkit-text-fill-color: transparent;background-clip: text;"><strong>App developement</strong></p>
                </div>
            </div>
        </div>
        <div class="container-presentation-proAsk-finish">
            <h2 class="presentation-proAsk-finish-text">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</h2>
            <div class="container-presentation-proAsk-finish-redirect-button">
                <button class="redirect-button"><strong>Demandez un service de développement</strong>
                    <img src="images/Redirect.jpg" alt="redirect">
                </button>
                <button class="redirect-button"><strong>En savoir plus</strong>
                    <img src="images/Redirect.jpg" alt="redirect">
                </button>
            </div>
        </div>
    </div>
    <h1 class="main-title-invisible"><strong>Le forum 2.0</strong></h1>
    <h1 class="sub-title"style="margin-left: 5rem;">Posez votre question et laissez la communauté vous aider</h1>
    <div class="container-presentation-ask">
        <section class="container-exemples-question">
            <div class="presentation-ask-theme-background">
                <h2 style="font-size: 1.9rem"class="presentation-ask-theme-found-solution">Par exemple :</h2>
            </div>
            <div class="exemple-question">
                <h3>Problème de compatibilité Java :</h3>
                <p>Comment résoudre un problème de compatibilité entre différentes versions de logiciels Java ?</p>
            </div>
            <div class="exemple-question">
                <h3>Optimisation d'un algorithme Python :</h3>
                <p>Conseils pour améliorer les performances d'un algorithme de machine learning en Python ?</p>
            </div>
            <div class="exemple-question">
                <h3>Sécurité des applications PHP :</h3>
                <p>Meilleures pratiques pour sécuriser une application PHP contre les injections SQL ?</p>
            </div>
        </section>
        <div class="container-presentation-ask-text-redirect">
            <h2 style="max-width: 60rem;text-align:justify;margin:2rem;font-size: 2.5rem;"><strong>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</strong></h2>
            <button class="redirect-button"><strong>Trouvez la solution</strong>
                <img src="images/Redirect.jpg" alt="redirect">
            </button>
        </div>
    </div>
    <h1 class="main-title-invisible"><strong>Vendez vos services et devenez freelance sur QuickFix</strong></h1>
    <div class="container-presentation-services">
        <div class="container-presentation-services-text-redirect">
            <h2 class="sub-title"style="margin-left:2rem">Vendez vos services en tant que freelance affirmé</h2>
            <p style="margin-left:4rem"> argument1</p>
            <p style="margin-left:4rem"> argument2</p>
            <p style="margin-left:4rem"> argument3</p>
            <div class="presentation-service-container-redirect-button">
                <button class="redirect-button" style="margin-top: auto;margin-left: 1rem;margin-right:0;"><strong>Lance toi </strong>
                    <img src="images/Redirect.jpg" alt="redirect">
                </button>
                <button class="redirect-button" style="margin-top: auto;margin-left: .5rem;"><strong>En savoir plus </strong>
                    <img src="images/Redirect.jpg" alt="redirect">
                </button>
            </div>
        </div>
        <img src="images/Freelancing.jpg" alt="Freelancing"style="position: relative;right: 0;margin: 1rem;margin-left:auto; width:30rem;height:30rem;border:4px solid rgb(150, 107, 147);border-radius: 5px;">
    </div>
    <h1 class="main-title-invisible" ><strong>Soyez récompensé!</strong></h1>
    <div class="container-presentation-services">
        <img src="images/money win2.jpg" alt="win money"style="margin: 1rem; width:30rem;border:4px solid rgb(150, 107, 147);border-radius: 5px;">
        <div class="container-presentation-services-text-redirect">
            <h2 class="sub-title">Aidez les internautes et recevez de l'argent:</h2>
            <p> argument1</p>
            <p> argument2</p>
            <p> argument3</p>
            <button class="redirect-button" style="margin-top: auto;"><strong>Commencer</strong>
                <img src="images/Redirect.jpg" alt="redirect">
            </button>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>
</html>
