<?php require('../functions.php'); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>
            Holywind
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
        <link href="/css/header.css?<?php echo microtime() ?>" rel="stylesheet">
        <link href="/css/footer.css?<?php echo microtime() ?>" rel="stylesheet">
        <link href="/css/accueil.css? <?php echo microtime() ?>" rel="stylesheet">
    </head>

    <body>
        <header>
            <?php include_once "/var/www/test/css/header.php";?>
        </header>

        <main>

            <h1 class="text-center">
                Holywind
            </h1>
            <h3 class="text-center">
                Bienvenue sur la boutique !
            </h3>

            <?php foreach (getShop() as $donnees){ ?>
            <div   class="w-25"
            <p>
                <strong> <?= $donnees['product_id']; ?> </strong> : <?= $donnees['product_name']; ?><br />
                <?= '<a href="product.php"> <img src="/img/' . $donnees["product_img"] . '"></a>  '?>
                Le prix est de <?= $donnees['product_price']; ?> euros !<br />
                <a href="/panier/ajouter.php?product_id=<?= $donnees['product_id'] ?>">
                    Ajouter au panier
                </a>
            </p>
            </div>
            <?php }?>

        </main>

        <?php include_once "/var/www/test/css/footer.php"; ?>

        <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js">
        </script>
    </body>
</html>