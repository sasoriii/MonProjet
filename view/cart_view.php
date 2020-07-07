<?php include_once "../css/header.php"; ?>

<?php
$cart = Cart::getInstance();
?>
    <table style="width: 400px">
        <tr>
            <td colspan="4">
                Your cart
            </td>
        </tr>
        <tr>
            <td>
                Name
            </td>
            <td>
                Quantity
            </td>
            <td>
                Price for one
            </td>

        </tr>

        <?php $nbArticles = $cart->getNbItems()?>
        <?php if ($nbArticles <= 0): ?>
            <tr>
                <td>
                    Your cart is empty
                </td>
            </tr>
        <?php endif ?>

        <?php

        ?>

        <?php foreach ($cart->getLines() as $line): ?>
            <tr>
                <td>
                    <?php $id = $line->productId ?>
                    <?= Product::getProduct($id)->name ?>
                </td>
                <td>
                    <?= $line->quantity ?>
                </td>
                <td>
                    <?= Product::getProduct($id)->price ?>
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