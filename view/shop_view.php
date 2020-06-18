<?php include_once "../css/header.php"; ?>

<main>

    <h1 class="text-center">
        Holywind
    </h1>
    <h3 class="text-center">
        Welcome to the shop !
    </h3>
    <?php foreach (getShop() as $data) { ?>
        <div class="w-25">
            <p>
                <strong> <?= $data['product_id']; ?> </strong> : <?= $data['product_name']; ?><br/>
                <?= '<a href="product.php"> <img src="/img/' . $data["product_img"] . '"></a>  ' ?>
                Price : <?= $data['product_price']; ?> euros !<br/>
                <a href="/panier/add.php?product_id=<?= $data['product_id'] ?>">
                    Add to cart
                </a>
            </p>
        </div>
    <?php } ?>

</main>

<?php include_once "../css/footer.php"; ?>
