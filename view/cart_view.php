<?php include_once "../css/header.php"; ?>

    <table style="width: 400px">
        <tr>
            <td colspan="4">Your cart</td>
        </tr>
        <tr>
            <td>Name</td>
            <td>Quantity</td>
            <td>Price for one</td>

        </tr>

        <?php $nbArticles = getNbItemsInCart(); ?>
        <?php if ($nbArticles <= 0): ?>
            <tr>
                <td>Your cart is empty</td>
            </tr>
        <?php endif ?>
        <?php foreach (getCartLines() as $line): ?>
            <tr>
                <td>
                    <?php $productId = $line->id;
                    $product = new Product();
                    ?>
                    <?= $product->getName($productId)?>
                </td>
                <td>
                    <?= $line->quantity ?>
                </td>
                <td>
                    <?= $product->getPrice($productId) ?>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
    <div>
        <a href="form.php">
            Next
        </a>
    </div>

<?php include_once "../css/footer.php"; ?>