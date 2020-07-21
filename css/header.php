<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>
        Holywinmmmd
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
    <link href="/css/header.css?<?= microtime() ?>" rel="stylesheet">
    <link href="/css/footer.css?<?php echo microtime() ?>" rel="stylesheet">
    <link href="/css/accueil.css? <?php echo microtime() ?>" rel="stylesheet">
</head>

<body>
<header>
    <div data-role="appbar" data-expand-point="md" class="w-200 bg-violet fg-black">
        <a href="http://localhost/projetperso/index.php" class="homeLogo">
            <img class="homeLogoImg mt-2 ml-2 " src="/img/logo.png">
        </a>

        <ul>
            <li>
                <a href="../index.php">
                    Accueil
                </a>
            </li>

            <li>
                <a href="../shop/product.php">
                    Boutique
                </a>
            </li>
        </ul>

        <ul>
            <li>
                <a href="https://www.cabrinha.com/">
                    Cabrinha
                </a>
            </li>
            <li>
                <a href="../testWIP/chat/chat.php">
                    Chat
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="../panier/cart.php">
                    Panier
                </a>
            </li>
            <li>
                <a href="../panier/reset.php">
                    Vider le panier
                </a>
            </li>
        </ul>
        <?php use Carbon\Carbon;

            printf("Now: %s", Carbon::now());
        ?>
        <div class="app-bar-container ml-auto" data-flexdirection="reverse">
        </div>
        <span class="mif-1x mif-user fg-black">
        <a href="../profile/isConnect.php">
            Mon compte / connexion
        </a>

    </span>
    </div>

    <div class="pt-18">
    </div>
</header>