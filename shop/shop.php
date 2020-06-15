<?php require('../bootstrap.php'); ?>

<?php include_once "../css/header.php"; ?>

<main>

    <h1 class="text-center">
        Holywind
    </h1>
    <h3 class="text-center">
        Bienvenue sur la boutique !
    </h3>
    <?php foreach (getShop() as $donnees) { ?>
        <div class="w-25"
        <p>
            <strong> <?= $donnees['product_id']; ?> </strong> : <?= $donnees['product_name']; ?><br/>
            <?= '<a href="product.php"> <img src="/img/' . $donnees["product_img"] . '"></a>  ' ?>
            Le prix est de <?= $donnees['product_price']; ?> euros !<br/>
            <a href="/panier/ajouter.php?product_id=<?= $donnees['product_id'] ?>">
                Ajouter au panier
            </a>
        </p>
        </div>
    <?php } ?>

</main>

<?php include_once "../css/footer.php"; ?>
